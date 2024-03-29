<?php

require_once("../configs/db.class.php");
$db = new DB();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST["action"];
    $id = $_POST["id"] ?? '';
    $productName = $_POST["productName"];
    $productDesc = $_POST["productDesc"];
    $productPrice = $_POST["productPrice"];
    
    if ($action === 'update') {
        $query = 'update products set productName = "'.$productName.'", productDesc = "'.$productDesc.'", productPrice = "'.$productPrice.'" where id = "'.$id.'";';
        $db->query_execute($query);
    } else {
        $query = 'select max(id) from products;';
        $result = $db->query_select($query);
        $max_id = mysqli_fetch_array($result)[0] + 1;

        $query = 'insert into products value ('.$max_id.',"'.$productName.'","'.$productDesc.'",'.$productPrice.')';
        echo $query;
        $db->query_execute($query);
    }
} else {
    $id = $_GET["id"];
    $query = 'delete from products where id = "'.$id.'"';
    $db->query_execute($query);
}
header("Location: ../index.php");
?>