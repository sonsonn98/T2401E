<?php 
class ItemController  extends BaseController {
    private $__model;
    public function __construct($conn) {
        $this->__model = $this->initModel("ItemModel", $conn);
    }

  
    public function execute($id = null) {
        //insert or update
        if(isset($_POST["submit"])) {
            $item_code = $_POST["item_code"];
            $item_name = $_POST["item_name"];
            $quantity = $_POST["quantity"];
            $expired_date = $_POST["expired_date"];
            $note = $_POST["note"];
            $id =  $_POST["id"];
            if(empty($id)) {
                //insert
                        $this->__model->addNewItem($item_code, $item_name, $quantity,$expired_date, $note);                               
            } else {
                //update item
                $this->__model->updateItemById($id,$item_code, $item_name, $quantity,$expired_date, $note);
            }
            
        } else {
            $item = $this->__model->getItemById($id);
            $this->view("item/form", ["item"=> $item]);
        }

        //onpen form
    }

    public function listItems() {
        $listItem =  $this->__model->listItems();
        $this->view("layouts/layout", ["content"=>"item/listItem", "listItem"=>$listItem]);
    }

    public function delete($id) {
        $this->__model->deleteItemById($id);
    }
}




?>