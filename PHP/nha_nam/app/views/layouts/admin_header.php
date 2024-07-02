<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$mainpath="/nha_nam/admin/index"
?>
<body>
<span>Xin chào, <?php echo $_SESSION["user"]["username"]    ?></span>
    <span><a href="http://localhost/nha_nam/user/logout">Đăng xuất</a></span><br/>
 <?php  echo ($_SERVER['REQUEST_URI'] != $mainpath) ? '<a href="http://localhost/nha_nam/admin/index">Quay lại trang chính</a><br/>' : "" ?>

</body>
</html>