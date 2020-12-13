<?php
include("db.php");
if(isset($_POST['submit'])){
    $enter_sql = "INSERT INTO items (itemName, catId, stock) VALUES ('{$_POST['name']}', {$_POST['categoryID']}, {$_POST['quantity']})";
    $enter_stmt = $db->prepare($enter_sql);
    $enter_res = $enter_stmt->execute();
}