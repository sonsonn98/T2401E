<?php
class BookController extends BaseController {

    private $__model;
    function __construct($conn)
    {
        $this->__model= $this->initModel("BookModel",$conn);
    }
    // action
    public function index($id){
        $book = $this->__model->getBookById($id);
        $books = $this->__model->listBooks();
        $this->view("layouts/user_layout", ["content" => "book", "book" => $book, "books" => $books]);
    }

    public function listBooks(){
        $books = $this->__model->listBooks();
        $this->view("layouts/admin_layout", ["content" => "admin/books/listBooks","listbooks"=> $books]);
    }
    public function add(){
        if(isset($_POST["submit"])){
            $name=($_POST["name"]);
            $author=($_POST["author"]);
            $price=($_POST["price"]);
            $description=($_POST["description"]);
            $picture=($_POST["picture"]);
            $this->__model->addNewBook($name, $author, $price, $description, $picture);
            header("Location: http://localhost/nha_nam/book/listBooks");
        }
        else {
            $this->view("layouts/admin_layout",["content"=>"admin/books/formBook"]);
        }
    }
    public function edit($id = null)
    {
        if(isset($id)){
            if(isset($_POST["submit"])){
                $id= $_POST["id"];
                $name=($_POST["name"]);
                $author=($_POST["author"]);
                $price=($_POST["price"]);
                $description=($_POST["description"]);
                $picture=($_POST["picture"]);
                $this->__model->editBookById($id, $name, $author, $price, $description, $picture);
                header("Location: http://localhost/nha_nam/book/listBooks");
            }
            else {
                $book =$this->__model->getBookById($id);
                $this->view("layouts/admin_layout", ["content" => "admin/books/formBook","book"=>$book]);
            }
        }
        else {
            $this->view("errors/403");
            exit();
        }
    }
    public function delete($id){
        $this->__model->deleteBookById($id);
        header("Location: http://localhost/nha_nam/book/listBooks");
    }
}


?>


