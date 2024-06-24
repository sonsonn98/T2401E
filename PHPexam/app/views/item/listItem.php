<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" style="width: 700px;">
        <tr>
            <th>Id</th>
            <th>Item Code</th>
            <th>Item Name</th>
            <th>Quantity</th>
            <th>Expired Date</th>
            <th>Note</th>
            <th>Action</th>
        </tr>
        <?php $listItem = $data["listItem"]; ?>
        <?php foreach ($listItem as $key => $value) : ?>
            <tr>
                <td><?php echo $value->id ?></td>
                <td><?php echo $value->item_code ?></td>
                <td><?php echo $value->item_name ?></td>
                <td><?php echo $value->quantity ?></td>
                <td><?php echo $value->expired_date ?></td>
                <td><?php echo $value->note ?></td>
                <td>
                    <a href="http://localhost/PHPexam/item/execute/<?php echo $value->id ?>">Edit</a> 
                    ||
                    <a href="http://localhost/PHPexam/item/delete/<?php echo $value->id ?>"> Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>