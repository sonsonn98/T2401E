<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><a href="http://localhost/nha_nam/book/add">Thêm sách mới</a></div>
    <table border="1" style="width: 100%">
        <tr>
            <th style="width:3%">Id</th>
            <th style="width:10%">Ten sach</th>
            <th style="width:5%">Tac gia</th>
            <th style="width:5%">Gia ban</th>
            <th style="width:50%">Mo ta</th>
            <th style="width:7%">Anh bia</th>
            <th style="width:5%">Action</th>
        </tr>
        <?php $listbook = $data["listbooks"]; 
        ?>
        
        <?php foreach ($listbook as $key => $value) : ?>
            <tr>
                <td><?php echo $value->id ?></td>
                <td><?php echo $value->name ?></td>
                <td><?php echo $value->author ?></td>
                <td><?php echo $value->price ?></td>
                <td><?php echo $value->description ?></td>
                <td><?php echo $value->picture ?></td>
                <td>
                    <a href="http://localhost/nha_nam/book/edit/<?php echo $value->id ?>">Edit</a> 
                    ||
                    <a href="http://localhost/nha_nam/book/delete/<?php echo $value->id ?>"> Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>