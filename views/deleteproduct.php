<?php include _VIEWS_PATH.'top.php'; ?>
<div class="maincontent">
    <h3><a class="button3" href="index.php">Powrót</a></h3>
    <h2>Usuń Produkt</h2>
    <?php
    include("db.php");
    $delcategory_sql = 'SELECT * FROM items';
    $delcategory_stmt = $db->prepare($delcategory_sql);
    $delcategory_res = $delcategory_stmt->execute();
    $delcategory_rows = $delcategory_stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($delcategory_rows as $row)
    { ?>
        <h3><a class="button3" href="index.php?a=deleteproduct&itemID=<?php echo $row['itemId'];?>"><?php echo $row['itemName'];?></a></h3>
        <?php
    }
    if(empty($delcategory_rows)) echo '<h5>Brak produktów w bazie danych</h5>'
    ?>

</div>
<?php include _VIEWS_PATH.'footer.php'; ?>


