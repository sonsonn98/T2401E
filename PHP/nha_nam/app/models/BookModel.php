<?php
class BookModel {
    private $__conn;
    public function __construct($conn) {
        $this->__conn = $conn;
    }
        public function listBooks (){
            try{
                if(isset($this->__conn)){
                $sql = "select * from book order by id desc";
                $stmt = $this->__conn->prepare($sql);
                $stmt -> execute();
                $result = $stmt ->fetchAll(PDO::FETCH_OBJ);
                return $result;
                }
            } catch (PDOException $e) {
                echo "". $e ->getMessage();
                exit();
            }
        }
        
        public function getBookById ($id) {
            try{
                if(isset($this->__conn)){
                    $sql = "select * from book where id =:id";
                    $stmt = $this->__conn->prepare($sql);
                    $stmt -> bindParam("id", $id, PDO::PARAM_INT);
                    $stmt -> execute();
                    $result = $stmt -> fetch(PDO::FETCH_OBJ);
                    return $result;
                }
            } 
            catch (PDOException $e) {
                echo "". $e -> getMessage();
                exit();
            }
        }

        public function addNewBook ($name, $author, $price, $description, $picture) {
            try{
                if(isset($this->__conn)){
                    $sql = "insert into book (name, author, price, description, picture) values (:name, :author, :price, :description, :picture)";
                    $stmt = $this->__conn->prepare($sql);
                    $stmt -> bindParam("name", $name, PDO::PARAM_STR);
                    $stmt -> bindParam("author", $author, PDO::PARAM_STR);
                    $stmt -> bindParam("price", $price, PDO::PARAM_INT);
                    $stmt -> bindParam("description", $description, PDO::PARAM_STR);
                    $stmt -> bindParam("picture", $picture, PDO::PARAM_STR);
                    $stmt -> execute();
                }
            } catch (PDOException $e) {
                echo "". $e -> getMessage();
                exit();
            }
        }
        public function editBookById($id,$name, $author, $price, $description, $picture) {
            try{
                if(isset($this->__conn)){
                    $sql = "update book set name=:name , author=:author, price=:price, description=:description, picture=:picture where id=:id";
                    $stmt = $this->__conn->prepare($sql);
                    $stmt -> bindParam("id", $id, PDO::PARAM_INT);
                    $stmt -> bindParam("name", $name, PDO::PARAM_STR);
                    $stmt -> bindParam("author", $author, PDO::PARAM_STR);
                    $stmt -> bindParam("price", $price, PDO::PARAM_INT);
                    $stmt -> bindParam("description", $description, PDO::PARAM_STR);
                    $stmt -> bindParam("picture", $picture, PDO::PARAM_STR);
                    $stmt -> execute();
                }
            } catch (PDOException $e) {
                echo "". $e -> getMessage();
                exit();
            }
        }
        public function deleteBookById($id) {
            try{
                if(isset($this->__conn)){
                    $sql = "delete from book where id=:id";
                    $stmt = $this->__conn->prepare($sql);
                    $stmt -> bindParam("id", $id, PDO::PARAM_INT);
                    $stmt -> execute();
                }
            } catch (PDOException $e) {
                echo "". $e -> getMessage();
                exit();
            }
        }

}

?>