 <?php include _VIEWS_PATH . 'top.php'; ?>

 <?php
    if (isset($message)) {
        echo '<label class="text-danger">' . $message . '</label>';
    }
    ?>

 <form method="post" action="index.php?a=login">
     <div class="login-box">
         <h1>Panel logowania</h1>

         <div class="textbox">
             <i class="fas fa-user"></i>
             <input type="text" placeholder="username" name="username">
         </div>

         <div class="textbox">
             <i class="fas fa-key"></i>
             <input type="password" placeholder="password" name="password">
         </div>

         <input class="btn" type="submit" name="login" value="ZALOGUJ SIE">
     </div>
    Jeszcze nie masz konta? <a href="index.php?a=register">Zarejstruj się!</a>

 </form>

 <?php include _VIEWS_PATH . 'footer.php'; ?>