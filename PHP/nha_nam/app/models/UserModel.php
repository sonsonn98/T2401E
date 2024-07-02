<?php 
class UserModel {
    private $__conn;
    public function __construct($conn) {
        $this->__conn = $conn;
    }

    public function login($username, $password) {
        $sql = "select * from user1 where username = :username and password = :password";
        $stmt = $this->__conn->prepare($sql);
        $stmt->bindParam("username", $username, PDO::PARAM_STR);
        $stmt->bindParam("password", $password, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); 
        //ASSOC : mỗi phần tử là 1 mảng , OBJ : Mỗi 1 phần tử là 1 stdObject, 
        //CLASS : 1 phần tử là 1 object của class mà mình đang lấy ra
    }

    public function createUser($username, $password, $role) { 
        $sql = "insert into user1 (`username`, `password`, `role`) values (:username, :password, :role)";
        $stmt = $this->__conn->prepare($sql);
        $stmt->bindParam("username", $username, PDO::PARAM_STR);
        $stmt->bindParam("password", $password, PDO::PARAM_STR);   
        $stmt->bindParam("role", $role, PDO::PARAM_STR);
        $stmt->execute();
        header("Location: http://localhost/nha_nam/user/listUsers");
    }

    public function listUsers() {
        try {
            if (isset($this->__conn)) {
                $sql = "select * from user1 order by id desc ";
                $stmt = $this->__conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $result;
            }
        } catch(Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }

    public function getUserById($id) {
        try {  
            $sql = "select * from user1 where id = :id";
            $stmt = $this->__conn->prepare($sql);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_OBJ);
            return $result;
        } catch(Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }

    public function updateUserById($id, $username, $password, $role) {
        try {  
            $sql = "update user1 set username = :username, password = :password, role = :role where id = :id";
            $stmt = $this->__conn->prepare($sql);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->bindParam("username", $username, PDO::PARAM_STR);
            $stmt->bindParam("password", $password, PDO::PARAM_STR);
            $stmt->bindParam("role", $role, PDO::PARAM_STR);
            $stmt->execute();
            header("Location: http://localhost/mvcthay/user/listUsers");
        } catch(Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }

    public function deleteUserById($id) {
        try {  
            $sql = "delete from user1 where id = :id";
            $stmt = $this->__conn->prepare($sql);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();
            header("Location: http://localhost/mvcthay/user/listUsers");
        } catch(Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }

}





?>