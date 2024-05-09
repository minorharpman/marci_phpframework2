<?php

namespace Repositories;

require_once REPOSITORY_PATH . '/Repository.php';

class MediaRepository extends Repository
{
    protected $table = 'images';
    
    public function __construct()
    {
        parent::__construct();
        
    }

    public function create($data) : int
    {
        $sql = sprintf(
            "
                INSERT INTO `%s` 
                    (`name`, `original_name`, `extension`, `size`, `created_at`) 
                VALUES 
                    (:name, :original_name, :extension, :size, :created_at)
            ", 
            $this->table
        );
        $stmt = $this->db->prepare($sql);
        $stmt->execute($data);

        return $this->db->lastInsertId();
    }

    public function getById($id)
    {
        $sql = sprintf('SELECT * FROM `%s` WHERE `id` = :id', $this->table);
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch($this->returnType);
    }

    public function getAllArticles()
    {
        $sql = sprintf('SELECT * FROM `%s`', $this->table);
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll($this->returnType);
    }
}