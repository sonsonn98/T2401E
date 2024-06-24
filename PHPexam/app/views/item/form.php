<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item</title>
</head>
<?php 
    $item = $data["item"];
    $error =array();
    if(empty($item->item_code)){
        $error["item_code"]["required"]="Truong item_code khong duoc de trong";
    } else {
        if(strlen($item->item_code) <10 ) {
            $error["item_code"]["leninvalid"] = "Truong item_code khong the nho hon 10 ky tu";
        }
    }
?>
<body>
    <form action="http://localhost/phpexam/item/execute" method="POST">
        <input type="hidden" name="id" value='<?php echo ($item)  ? $item->id : "" ?>'>
        <input type="text" name="item_code" placeholder="input item_code" value='<?php echo ($item)  ? $item->item_code : "" ?>'>
            <?php 
                echo empty($error["item_code"]["required"]) ? ""
                : "<span style='color:red;'>".$error['item_code']['required']."</span>";
            ?>
            <?php
                echo empty($error["item_code"]["invalid"]) ? ""
                : "<span style='color:red'>".$error['email']['invalid']."</span>";
                ?>
        <input type="text" name="item_name" placeholder="input item_name"value='<?php echo ($item)  ? $item->item_name : "" ?>'>
        <input type="text" name="quantity" placeholder="input quantity" value='<?php echo ($item)  ? $item->quantity : "" ?>'>
        <input type="text" name="expired_date" placeholder="input expired_date" value='<?php echo ($item)  ? $item->expired_date : "" ?>'>
        <input type="text" name="note" placeholder="input note" value='<?php echo ($item)  ? $item->note : "" ?>'>
        <input type="submit" value="submit" name="submit">


    </form>
</body>
</html>