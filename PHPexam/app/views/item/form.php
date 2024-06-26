<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item</title>
</head>
<?php 
    $item = $data["item"];
    $error = isset($item->error) ? $item->error :"";
?>
<body>
    <form action="http://localhost/phpexam/item/execute" method="POST">
        <input type="hidden" name="id" value='<?php echo ($item)  ? $item->id : "" ?>'>
        <input type="text" name="item_code" placeholder="input item_code" value='<?php echo !empty($item)  ? $item->item_code : "" ?>'>
            <?php 
                echo empty($item->error["item_code"]["required"]) ? ""
                : "<span style='color:red;'>".$item->error['item_code']['required']."</span>";
            ?>
            <?php
                echo empty($item->error["item_code"]["invalid"]) ? ""
                : "<span style='color:red'>".$item->error['item_code']['invalid']."</span>";
                ?>
        <input type="text" name="item_name" placeholder="input item_name"value='<?php echo !empty($item)  ? $item->item_name : "" ?>'>
        <?php 
                echo empty($item->error["item_name"]["required"]) ? ""
                : "<span style='color:red;'>".$item->error['item_name']['required']."</span>";
            ?>
            <?php
                echo empty($item->error["item_name"]["invalid"]) ? ""
                : "<span style='color:red'>".$item->error['item_name']['invalid']."</span>";
                ?>
        <input type="text" name="quantity" placeholder="input quantity" value='<?php echo !empty($item)  ? $item->quantity : "" ?>'>
        <input type="text" name="expired_date" placeholder="input expired_date" value='<?php echo !empty($item)  ? $item->expired_date : "" ?>'>
        <input type="text" name="note" placeholder="input note" value='<?php echo !empty($item)  ? $item->note : "" ?>'>
        <input type="submit" value="submit" name="submit">


    </form>
</body>
</html>