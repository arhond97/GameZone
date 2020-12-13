<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?Alfa Slab One' rel='stylesheet'>
    <title>GameZone</title>

</head>

<body>
    <nav>
        <a href="index.php?a=start">| Strona główna |</a>

        <?php if (isset($_SESSION["username"])) : ?>
            <a href="index.php?a=products"> Produkty |</a>
            <a href="index.php?a=addcategory"> Dodaj Kategorie |</a>
            <a href="index.php?a=deletecategory"> Usuń Kategorie |</a>
            <a href="index.php?a=addproduct"> Dodaj Produkt |</a>
            <a href="index.php?a=logout"> Wyloguj (<?php echo $_SESSION["username"] ?>) |</a>
        <?php else : ?>
            <a href="index.php?a=login"> Zaloguj się</a>
        <?php endif; ?>

    </nav>

    <section>