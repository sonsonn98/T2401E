<?php
class HomeModel {
    private $__conn;
    public function __construct($conn) {
        $this->__conn = $conn;
    }
        public function getAllBooks (){
            try{
                if(isset($this->__conn)){
                $sql = "SELECT * FROM book order by id desc";
                $stmt = $this->__conn->prepare($sql);
                $stmt -> execute();
                $result = $stmt ->fetchAll(PDO::FETCH_OBJ);
                return $result;
                }
            } catch (PDOException $e) {
                echo "". $e ->getMessage();
            }
            return null;
        }
        
    }



?>