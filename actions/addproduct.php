<?php
//sprawdź czy użytkownik jest zalogowany, jeśli nie przekieruj na stronę logowania
if(!isset( $_SESSION["username"])){
    header("Location:index.php");
}
include("db.php");
if(isset($_POST['submit'])){
    $enter_sql = "INSERT INTO items (itemName, catId, stock) VALUES ('{$_POST['name']}', {$_POST['categoryID']}, {$_POST['quantity']})";
    $enter_stmt = $db->prepare($enter_sql);
    $enter_res = $enter_stmt->execute();
}