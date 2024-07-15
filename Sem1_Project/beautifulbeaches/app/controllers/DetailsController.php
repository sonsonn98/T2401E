<?php
class DetailsController extends BaseController {

    private $__homeModel;
    function __construct($conn)
    {
        $this->__homeModel= $this->initModel("DetailsModel",$conn);
    }
    // action
    public function index(){
        $this->view("layout", ["content" => "details"]);
    }


}

?>