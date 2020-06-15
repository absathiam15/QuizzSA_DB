<?php
   $host = "mysql-salmanette.alwaysdata.net";
   $username = "208207";
   $password = "absathiam2020";
   $database = "salmanette_bd";
   $message = "";
   try{
       $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);
       $connect ->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        if (isset($_POST['submit'])) 
        {
           if (!empty($_POST['login']) || !empty($_POST['pwd'])) 
           
           {
               $query = "SELECT * FROM users WHERE login = :login AND pwd = :pwd";
               $statement = $connect->prepare($query);
               $statement->execute(
                        array(

                            'login' =>  $_POST['login'],
                            'pwd' =>  $_POST['pwd']
                        )
                );
                $result=$statement->fetch(PDO::FETCH_ASSOC);

                if($result['profil'] == 'admin') 
                {
                  header('location:index.php?lien=admin');
                }else if($result['profil'] == 'joueur') 
                {
                  header('location:index.php?lien=Joueur');
                }

                $count = $statement->rowCount();
                if ($count>0) 
                {
                     $_SESSION['login'] = $_POST['login'];
                }
                else
                {
                    $message = "Login ou Password incorrect !";
                }
           }
        }
   }
        catch(PDOException $error)
        {
            $message = $error -> getMessage(); 
        }
        ?>