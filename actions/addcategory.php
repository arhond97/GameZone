<?php
//sprawdź czy użytkownik jest zalogowany, jeśli nie przekieruj na stronę logowania
if(!isset( $_SESSION["username"])){
  header("Location:index.php");
}
include("db.php");

if(isset($_POST['catName']) ) 
{
$tytul=$_POST['catName'];
$id=$_POST['catId'];


  $sql = $db->prepare("INSERT into categories(catName,catId) values(:catName,:catId)");

  $sql->bindParam(':catName',$catName,PDO::PARAM_STR, 15);
  $sql->bindParam(':catId',$catId,PDO::PARAM_INT, 11);

  $sql->execute(array( 
    ":catName" => (string)($_POST["catName"]), 
    ":catId" => (int)($_POST["catId"])));

}

?>
