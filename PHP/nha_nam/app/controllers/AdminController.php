<?php 
class AdminController extends BaseController {
    public function index() {
        $this->view("layouts/admin_layout",["content" => "homeadmin"]);
    }
}





?>