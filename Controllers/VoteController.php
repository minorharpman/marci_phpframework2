<?php   

namespace Controllers;

require_once REPOSITORY_PATH . '/VoteRepository.php';

use Repositories\VoteRepository;



class VoteController{

    private $voteRepository;
   
    public function __construct()
      {
         // echo "hello ";
          $this->voteRepository = new VoteRepository();

      }
    
    public function getAllVotes() : array{

        $this -> voteRepository -> selectAll();
        echo '<pre>'; print_r($votes); echo '</pre>'; exit;
        // return $this -> voteRepository -> selectAll();
    }

    public function create(){

     $result = $this -> voteRepository -> insertRow([
        
        'name' => $_POST['name'],
        'vote' => (int)$_POST['vote'],
        'create_at' => 0,
      ]);  
      
      //var_dump($result);

      echo '<h2> Köszönjük!  <a  href="'.BASE_URL.'"><br><br>  Vissza a Főoldalra.</a></h2>';

    }

    public function restart(){
        $this -> voteRepository -> reset();
    }
}