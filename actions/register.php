<?php
    session_start();
    include("db.php");
    
    if (isset($_REQUEST["register"])) 
    {
      $username = strip_tags($_REQUEST['username']);
      $password = strip_tags($_REQUEST['password']);
      $name = strip_tags($_REQUEST['name']);
      $surname = strip_tags($_REQUEST['surname']);
        //sprawdzenie poprawnosci - jesli zle to wpisanie do $errors
        if (empty($username) || empty($password) || empty($name) || empty($surname)) 
        {
            $message  = 'Wszystkie pola są wymagane!';
        }
        else
        {
          try
          {
            $query = "SELECT username FROM users WHERE username = :username";  
            $statement = $db->prepare($query); 
            $statement->execute(
              array(
                    'username'     =>     $_POST["username"]
              )
            );
            $row=$statement->fetch(PDO::FETCH_ASSOC);
            if($row["username"]==$username)
            {
              $message="Konto z podanym loginem już istnieje!";
            }
            else if(!isset($message))
            {
              $new_password=password_hash($password, PASSWORD_DEFAULT);
              $insert_query=$db->prepare("INSERT INTO users (username,password,name,surname,permission) VALUES (:username,:password,:name,:surname,:permission)");
              if($insert_query->execute(array(
                ':username'=>$username,
                ':password'=>$new_password,
                ':name'=>$name,
                ':surname'=>$surname,
                ':permission'=>"user"
              )))
              {
                $register_msg="Rejestracja wykonana pomyślnie. Witamy!";
              }
            }
          }
          catch(PDOException $e)
          {
            echo $e->getMessage();
          }
        }
    }
?>





