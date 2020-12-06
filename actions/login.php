 <?php
    session_start();
    include("db.php");
    
    if (isset($_POST["login"])) 
    {
        //sprawdzenie poprawnosci - jesli zle to wpisanie do $errors
        if (empty($_POST["username"]) || empty($_POST["password"])) 
        {
            $errors['username'] = 'Pole login i hasło są wymagane';
        }
        else
        {
            $query = "SELECT * FROM users WHERE username = :username AND password = :password";  
            $statement = $db->prepare($query);  
            $statement->execute(  
                array(  
                     'username'     =>     $_POST["username"],  
                     'password'     =>     $_POST["password"]  
                )  
           );  
           $count = $statement->rowCount();
           if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"];  
                     header("Location: index.php");  
                }  
            else  
                {  
                     $message = '<label>Podane login lub hasło są nieprawidłowe!</label>';  
                }  
        }
    }
?>





