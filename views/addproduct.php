<?php include _VIEWS_PATH.'top.php';
//sprawdź czy użytkownik jest zalogowany, jeśli nie przekieruj na stronę logowania
if(!isset( $_SESSION["username"])){
    header("Location:index.php");
}
?>

    <div class="maincontent">
        <h3><a class="button3" href="index.php">Powrót</a></h3><br>
        <h3>Wprowadź szczegóły nowego przedmiotu</h3>
        <form action="index.php?a=addproduct" method="post" enctype="multipart/form-data">
            <p>Nazwa przedmiotu: <input type="text" name="name"></p>



            <p>Kategoria: <select name="categoryID">

                    <?php
                    include("db.php");
                    $categorylist_sql = 'SELECT * FROM categories';
                    $categorylist_stmt = $db->prepare($categorylist_sql);
                    $categorylist_res = $categorylist_stmt->execute();
                    $categorylist_rows = $categorylist_stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach($categorylist_rows as $row){?>
                        <option value="<?php echo $row['catId'];?>"
                        ><?php echo $row['catName'];?></option>
                        <?php
                    }
                    ?>

                </select></p>


            <p>Ilość: <label>
                    <input type="number" name="quantity" min="1">
                </label></p>
            <input type="submit" name="submit" value="Potwierdź">
        </form>
    </div>

<?php include _VIEWS_PATH.'footer.php'; ?>