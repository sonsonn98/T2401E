<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
</head>
<body>
    <?php
    $this->view("layouts/admin_header");
    $this->view($data["content"],$data);

    ?>
</body>
</html>