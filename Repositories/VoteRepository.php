<?php       

namespace Repositories;

require_once REPOSITORY_PATH . '/Repository.php';

class VoteRepository extends Repository{

    protected $table = 'votes';
    protected $returnType = \PDO::FETCH_ASSOC; // Set the default fetch mode here

    public function __construct()
    {
        parent::__construct();
    }


    // Összes szavazat lekérdezése
    public function selectAll()
    {
        $sql = sprintf('SELECT * FROM `%s`', $this->table);
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    // Szavazat hozzáadása

    public function insertRow($data){
        
        // Adatok hozzzáadása

        $keys = array_keys($data);
        $columns = implode(',', $keys);
        $porps = implode(', :', $keys);
        $sql = sprintf("INSERT INTO `%s`(%s) VALUES (:%s)", $this->table, $columns, $porps);
        $stmt = $this->db->prepare($sql);
        $stmt->execute($data);

        // újonnan létrejött sor lekérdezése

        $id = $this->db->lastInsertId();

        if (!$id) {
            return false;
        }

        $sql = sprintf('SELECT * FROM `%s` WHERE `id` = :id', $this->table);
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch($this->returnType);
     
        }

        // adatbázistábla összessorának törlése

        public function reset(){
            $sql = sprintf("TRUNCATE TABLE `%s`", $this->table);
            $this->db->exec($sql);


        }





}