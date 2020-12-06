<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>GameZone</title>

</head>

<body>
    <nav>
        <a href="index.php?a=start">| Strona główna |</a>

        <?php if (isset($_SESSION["username"])) : ?>
                <a href="index.php?a=products"> Produkty |</a>
                <a href="index.php?a=addcategory"> Dodaj Kategorie |</a>
                <a href="index.php?a=logout"> Wyloguj (<?php echo $_SESSION["username"] ?>) |</a>
        <?php else : ?>
            <a href="index.php?a=login"> Zaloguj się</a>
        <?php endif; ?>

    </nav>

    <section>