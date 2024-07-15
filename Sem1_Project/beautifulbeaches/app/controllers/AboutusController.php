<?php
class AboutusController extends BaseController {

    private $__homeModel;
    function __construct($conn)
    {
        $this->__homeModel= $this->initModel("AboutusModel",$conn);
    }
    // action
    public function index(){
        $this->view("layout", ["content" => "aboutus"]);
    }


}

?>


