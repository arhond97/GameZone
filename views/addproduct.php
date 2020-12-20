<?php include _VIEWS_PATH . 'top.php';
//sprawdź czy użytkownik jest zalogowany, jeśli nie przekieruj na stronę logowania
if (!isset($_SESSION["username"])) {
    header("Location:index.php");
}
?>

<div class="addproduct-box">
    <h3>
        <a class="page-btn" href="index.php">
            <i class="fas fa-arrow-circle-left"></i>Powrót
        </a>
    </h3>
    <h1>Wprowadź szczegóły nowego przedmiotu</h1>

    <form action="index.php?a=addproduct" method="post" enctype="multipart/form-data">
        <div class="textbox">
            Nazwa przedmiotu: <input type="text" name="name">
        </div>

        <div class="textbox">
            Kategoria: <select name="categoryID">
                <?php
                include("db.php");
                $categorylist_sql = 'SELECT * FROM categories';
                $categorylist_stmt = $db->prepare($categorylist_sql);
                $categorylist_res = $categorylist_stmt->execute();
                $categorylist_rows = $categorylist_stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($categorylist_rows as $row) { ?>
                    <option value="<?php echo $row['catId']; ?>"><?php echo $row['catName']; ?></option>
                <?php
                }
                ?>
                </select>
        </div>

        <div class="textbox">
            Ilość:
            <label>
                <input type="number" name="quantity" min="1">
            </label>
        </div>

        <input class="btn" type="submit" value="Potwierdź" />
</div>
</form>

<?php include _VIEWS_PATH . 'footer.php'; ?>