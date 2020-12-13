<?php include _VIEWS_PATH.'top.php';
//sprawdź czy użytkownik jest zalogowany, jeśli nie przekieruj na stronę logowania
if(!isset( $_SESSION["username"])){
    header("Location:index.php");
}
?>
<div class="maincontent">
    <h3><a class="button3" href="index.php">Powrót</a></h3>
    <h2>Usuń kategorię</h2>
    <?php
    include("db.php");
    $delcategory_sql = 'SELECT * FROM categories';
    $delcategory_stmt = $db->prepare($delcategory_sql);
    $delcategory_res = $delcategory_stmt->execute();
    $delcategory_rows = $delcategory_stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($delcategory_rows as $row)
    { ?>
        <h3><a class="button3" href="index.php?a=deletecategory&categoryID=<?php echo $row['catId'];?>"><?php echo $row['catName'];?></a></h3>
        <?php
    }
    if(empty($delcategory_rows)) echo '<h5>Brak kategorii w bazie danych</h5>'
    ?>

</div>
<?php include _VIEWS_PATH.'footer.php'; ?>


