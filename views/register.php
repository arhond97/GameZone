<?php include _VIEWS_PATH . 'top.php'; ?>

<?php
   if (isset($message)) {
       echo '<label class="text-danger">' . $message . '</label>';
   }
   ?>

   <?php
   if (isset($register_msg)) {
       echo '<label class="text-danger">' . $register_msg . '</label>';
   }
   ?>

<form method="post" action="index.php?a=register">
    <div class="login-box">
        <h1>Załóż konto</h1>

        <div class="textbox">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="name" name="name">
        </div>

        <div class="textbox">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="surname" name="surname">
        </div>

        <div class="textbox">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="login" name="username">
        </div>

        <div class="textbox">
            <i class="fas fa-key"></i>
            <input type="password" placeholder="password" name="password">
        </div>

        <input class="btn" type="submit" name="register" value="Załóż konto">
    </div>
</form>

<?php include _VIEWS_PATH . 'footer.php'; ?>