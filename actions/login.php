 <?php
    session_start();
    include("db.php");
    
    if (isset($_REQUEST["login"])) 
    {
        $username = strip_tags($_REQUEST["username"]);
        $password = strip_tags($_REQUEST["password"]);
        //sprawdzenie poprawnosci - jesli zle to wpisanie do $errors
        if (empty($username) || empty($password)) 
        {
            $errors['username'] = 'Pole login i hasło są wymagane';
        }
        else
        {
         try
            {
                $statement = $db->prepare("SELECT * FROM users WHERE username = :username");  
                $statement->execute(  
                    array(  
                        'username'     =>     $_POST["username"] 
                    )  
                );
                $row=$statement->fetch(PDO::FETCH_ASSOC);
                
                if($statement->rowCount()>0)
                {
                    if($username==$row["username"])
                    {
                        if(password_verify($password, $row["password"]))
                        {
                            $_SESSION["username"]=$row["username"];
                            header("Location: index.php");  
                        }
                    }
                } 
                else  
                    {  
                        $message = '<label>Podane login lub hasło są nieprawidłowe!</label>';  
                    }  
            }
         catch(PDOException $e)
          {
            echo $e->getMessage();
          }
      }
    }
?>





