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

    public function validateItem($id,$item_code, $item_name, $quantity,$expired_date, $note) {
        $item = new stdClass();
        $item->id = $id;
        $item->item_code = $item_code;
        $item->item_name = $item_name;
        $item->quantity = $quantity;
        $item->expired_date = $expired_date;
        $item->note = $note;
        $error =array();
        if(isset($_REQUEST["submit"])) {
            if(empty($item_code)){
                $error["item_code"]["required"]="Truong item_code khong duoc de trong";
            } else {
                if (preg_match("/[^a-zA-Z0-9 ]/",$item_code) >0){
                    $error["item_code"]["invalid"] = "Truong item_code khong the chua ky tu dac biet";
                }
            }
            if(empty($item_name)){
                $error["item_name"]["required"]="Truong item_name khong duoc de trong";
            } else {
                if (preg_match("/[^a-zA-Z0-9 ]/",$item_name) >0){
                    $error["item_name"]["invalid"] = "Truong item_name khong the chua ky tu dac biet";
                }
            }
            if(!empty($error)){
                $item->error = $error;
                return $item;
            } else {
                return ;}
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
            header("Location: http://localhost/phpexam/item/listItems");
        } catch(Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }

}





?>