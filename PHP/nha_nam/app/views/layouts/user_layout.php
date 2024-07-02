<?php
$content= isset($data["book"]) ? $data["book"] : "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href='http://localhost/mvc/app/asset/css/layout.css' rel="stylesheet"> -->
    <title><?php echo $data["content"]=="home"? "Nhã Nam" : $content->name?></title>
</head>
<body>
    <?php    
    $this->view("layouts/header");
    $this->view($data["content"], $data); 
    $this->view("layouts/footer");
    ?>  
</body>
</html>