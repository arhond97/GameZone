<?php
//sprawdź czy użytkownik jest zalogowany, jeśli nie przekieruj na stronę logowania
if(!isset( $_SESSION["username"])){
    header("Location:index.php?page=admin");
}
session_start();  
session_destroy(); 
header("Location: index.php");
?>