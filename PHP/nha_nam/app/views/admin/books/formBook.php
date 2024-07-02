<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item</title>
</head>
<?php 
    $book = isset($data["book"]) ? $data["book"] : null; 
    $error = isset($book->error) ? $book->error :"";
?>
<body>
    <a href="http://localhost/nha_nam/book/listBooks">Quay lại</a><br/>
        <form  action= <?php echo empty($book->id) ?"http://localhost/nha_nam/book/add" : "http://localhost/nha_nam/book/edit/$book->id" ?> method="POST">
            <input type="hidden" name="id" value='<?php echo ($book)  ? $book->id : "" ?>'>
            <h5>Name</h5>
            <input type="text" name="name" placeholder="input name" value='<?php echo !empty($book)  ? $book->name : "" ?>'>
                <?php 
                    echo empty($book->error["name"]["required"]) ? ""
                    : "<span style='color:red;'>".$book->error['name']['required']."</span>";
                ?>
                <?php
                    echo empty($book->error["name"]["invalid"]) ? ""
                    : "<span style='color:red'>".$book->error['name']['invalid']."</span>";
                    ?>
            <h5>Author</h5>
            <input type="text" name="author" placeholder="input author"value='<?php echo !empty($book)  ? $book->author : "" ?>'>
            <?php 
                    echo empty($book->error["author"]["required"]) ? ""
                    : "<span style='color:red;'>".$book->error['author']['required']."</span>";
                ?>
                <?php
                    echo empty($book->error["author"]["invalid"]) ? ""
                    : "<span style='color:red'>".$book->error['author']['invalid']."</span>";
                    ?>
            <h5>Price</h5>
            <input type="text" name="price" placeholder="input price" value='<?php echo !empty($book)  ? $book->price : "" ?>'>
            <h5>Description</h5>
            <input type="text" name="description" placeholder="input description" value='<?php echo !empty($book)  ? $book->description : "" ?>'>
            <h5>Picture</h5>
            <input type="text" name="picture" placeholder="input picture" value='<?php echo !empty($book)  ? $book->picture : "" ?>'>
            <input type="submit" value="submit" name="submit">


    </form>
</body>
</html>