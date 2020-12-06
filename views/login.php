 <?php include _VIEWS_PATH . 'top.php'; ?>

<?php  
    if(isset($message))  
        {  
            echo '<label class="text-danger">'.$message.'</label>';  
        }  
?>  

<form method="post" action="index.php?a=login">  
    <label>Login</label>  
    <input type="text" name="username" />  
     <br />  
    <label>Hasło</label>  
    <input type="password" name="password" />  
    <br />  
    <input type="submit" name="login" value="Login" />  
</form>  

 <?php include _VIEWS_PATH.'footer.php'; ?>