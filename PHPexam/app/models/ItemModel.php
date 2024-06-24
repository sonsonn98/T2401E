<?php 
class ItemModel {
    private $__conn;
    public function __construct($conn) {
        $this->__conn = $conn;
    }

   
    public function addNewItem($item_code, $item_name, $quantity,$expired_date, $note) {
        $sql = "insert into item_sale (`item_code`, `item_name`, `quantity`, `expired_date`,`note` ) values (:item_code, :item_name, :quantity, :expired_date, :note)";
        $stmt = $this->__conn->prepare($sql);
        $stmt->bindParam("item_code", $item_code, PDO::PARAM_STR);
        $stmt->bindParam("item_name", $item_name, PDO::PARAM_STR);   
        $stmt->bindParam("quantity", $quantity, PDO::PARAM_INT);
        $stmt->bindParam("expired_date", $expired_date);
        $stmt->bindParam("note", $note, PDO::PARAM_STR);
        $stmt->execute();
        header("Location: http://localhost/phpexam/item/listItems");

    }
    public function listItems() {
        try {
            if (isset($this->__conn)) {
                $sql = "select * from item_sale order by id desc ";
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

    public function getItemById($id) {
        try {  
            $sql = "select * from item_sale where id = :id";
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

    public function updateItemById($id, $item_code, $item_name, $quantity,$expired_date, $note) {
        try {  
            $sql = "update item_sale set item_code=:item_code, item_name =:item_name, quantity =:quantity, expired_date=:expired_date, note=:note where id = :id";
            $stmt = $this->__conn->prepare($sql);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->bindParam("item_code", $item_code, PDO::PARAM_STR);
            $stmt->bindParam("item_name", $item_name, PDO::PARAM_STR);   
            $stmt->bindParam("quantity", $quantity, PDO::PARAM_INT);
            $stmt->bindParam("expired_date", $expired_date, PDO::PARAM_STR);
            $stmt->bindParam("note", $note, PDO::PARAM_STR);
            $stmt->execute();
            header("Location: http://localhost/PHPexam/item/listItems");
        } catch(Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }

    public function deleteItemById($id) {
        try {  
            $sql = "delete from item_sale where id = :id";
            $stmt = $this->__conn->prepare($sql);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();
            header("Location: http://localhost/PHPexam/item/listItems");
        } catch(Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }

}





?>