<?php
 $host = "mysql-salmanette.alwaysdata.net";
 $username = "208207";
 $password = "absathiam2020";
 $database = "salmanette_bd";
 $message = "";
//se connecter à mysql
$connect=new PDO("mysql:host=$host; dbname=$database",$username, $password);

//preparation de la requete d'insertion
if(isset($_POST['sub'])){

    $score= 0;
    $target= "../public/image/photos/".basename($_FILES['image']['name']);
    $images= $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    $pdoStat = $connect->prepare("INSERT INTO utilisateurs (prenom, nom, login, password, profil, avatar, score) VALUES (?,?,?,?,?,?,?)");
    $insert = $pdoStat -> execute(array(ucfirst($_POST['firstname']),strtoupper($_POST['lastname']),$_POST['login'], $_POST['password'],'joueur',$images, $score));
    $result = $pdoStat->fetch(PDO::FETCH_ASSOC);

    if($insert)  {
        header("location: ../index.php");
    }else {
        $message = "Echec de l'enregistrement. Le login existe déja !";
    }
}

?>
