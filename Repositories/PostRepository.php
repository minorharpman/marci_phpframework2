<?php 

namespace Repositories;

require_once REPOSITORY_PATH . '/Repository.php';

use PDO;
use PDOException;

class PostRepository extends Repository
{
    private $table = 'article';

    protected $db;

    private $returnType;    

    public function __construct()
    {
        $connString = sprintf('mysql:host=%s;dbname=%s;charset=utf8', DB_HOST, DB_DATABASE);
        try {
            $this->db = new \PDO($connString, DB_USER, DB_PASS);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Hiba kezelés
        } catch (PDOException $e) {
            die("Database connection error: " . $e->getMessage());
        }

        $this->returnType = PDO::FETCH_ASSOC;

    }
    /*
    public function getAll(){
        $sql = "SELECT article.*,  FROM article";
        $stmt = $this->db->query($sql);
        $results = $stmt->fetchAll($this->returnType);
        return $results ?: [];
    }
    
    
    public function getAllPosts() {
        $sql = "SELECT article.*, user.name AS user_name FROM article
                JOIN user ON article.author_id = user.id ORDER BY article.created_at DESC";
        $stmt = $this->db->query($sql);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    */
   
    public function getAll() {
        $sql = "SELECT article.*, user.name AS user_name, images.name AS image_name, images.extension AS image_extension  
                FROM article
                JOIN user ON article.author_id = user.id
                JOIN images ON article.image_id = images.id";
        $stmt = $this->db->query($sql);
        $results = $stmt->fetchAll($this->returnType);
        return $results ?: []; 
    }

    public function getById($id) {
        $sql = "SELECT article.*, user.name AS user_name, images.name AS image_name, images.extension AS image_extension
                FROM article
                JOIN user ON article.author_id = user.id
                JOIN images ON article.image_id = images.id
                WHERE article.id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch($this->returnType);
    }
    
    //Cikk létrehozása

    public function create($data)
    {
        $sql = "INSERT INTO $this->table (`title`, `author_id`, `image_id`, `summary`, `articleText`, `category`, `created_at`, `updated_at`) VALUES (:title, :author_id, :image_id, :summary, :articleText, :category, NOW(), NOW())";
        $stmt = $this->db->prepare($sql);
        $success = $stmt->execute([
            'title' => $data['title'],
            'author_id' => $data['author_id'],
            'image_id' => $data['image_id'],
            'summary' => $data['summary'],
            'articleText' => $data['articleText'],
            'category' => $data['category']
        ]);

        if ($success) {
            return $this->db->lastInsertId();
        } else {
            return false;
        }
    }
 

//Cikk szerkesztése

public function update($article)
    {
        $sql = "
        UPDATE 
            `%s` 
        SET 
            `title` = :title, 
            `author_id` = :author_id, 
            `summary` = :summary, 
            `articleText` = :articleText, 
            `category` = :category, 
            `updated_at` = NOW()
        WHERE 
            `id` = :id
        ";
        $sql = sprintf($sql, $this->table);
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'id' => $article['id'],
            'title' => $article['title'],
            'author_id' => $article['author_id'],
            'summary' => $article['summary'],
            'articleText' => $article['articleText'],
            'category' => $article['category']
        ]);
        return $this->getById($article['id']);
    }
   

//Cikk törlése

public function delete($id)
{
    $sql = sprintf('DELETE FROM `%s` WHERE `id` = :id', $this->table);
    $stmt = $this->db->prepare($sql);
    $stmt->execute(['id' => $id]);
}

//cikkek megjelenítése

public function show($id)
{
    $sql = "SELECT article.*, user.name AS user_name FROM article JOIN user ON article.author_id = user.id WHERE article.id = :id ORDER BY article.created_at DESC";
    $stmt = $this->db->prepare($sql);
    $stmt->execute(['id' => $id]);
    return $stmt->fetch($this->returnType);
}

// cikkek kategóriák szerinti megjelenítése


public function showByCategory($category)
{
    $sql = "SELECT article.*, user.name AS user_name, images.name AS image_name, images.extension AS image_extension  
            FROM article
            JOIN user ON article.author_id = user.id
            JOIN images ON article.image_id = images.id
            WHERE article.category = :category";
    $stmt = $this->db->prepare($sql);
    $stmt->execute(['category' => $category]);
    return $stmt->fetchAll($this->returnType);
}

// cikkek szerző szerinti megjelenítése

public function showByAuthorName($author_name)
{
    $sql = "SELECT article.*, user.name AS user_name, images.name AS image_name, images.extension AS image_extension  
            FROM article
            JOIN user ON article.author_id = user.id
            JOIN images ON article.image_id = images.id
            WHERE user.name = :author_name";
    $stmt = $this->db->prepare($sql);
    $stmt->execute(['author_name' => $author_name]);
    return $stmt->fetchAll($this->returnType);
}


}