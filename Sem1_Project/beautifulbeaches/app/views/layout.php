
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/beautifulbeaches/app/asset/reponsive.css" />
    <link rel="stylesheet" href="/beautifulbeaches/app/asset/header.css" />
    <link rel="stylesheet" href="/beautifulbeaches/app/asset/home.css" />
    <link rel="stylesheet" href="/beautifulbeaches/app/asset/details.css" />
    <link rel="stylesheet" href="/beautifulbeaches/app/asset/aboutus.css" />
    <link rel="stylesheet" href="/beautifulbeaches/app/asset/footer.css" />
    <title></title>
</head>
<body>
    <?php    
    $this->view("header");
    $this->view($data["content"], $data); 
    $this->view("footer");
    ?>  
</body>
</html>