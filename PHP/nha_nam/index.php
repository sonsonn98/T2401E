<?php
session_start();
require_once("app/config/db.php");
require_once("app/App.php");
require_once("app/controllers/BaseController.php");
require_once("app/middleware/AuthMiddleware.php");
$conn = DBConnection::getConnection();
// $authmiddleware = new AuthMiddleware(["admin/formBook","admin/listBooks"]);
$authmiddleware = new AuthMiddleware(["book/index"]);
$app = new App($conn,$authmiddleware);  

?>

