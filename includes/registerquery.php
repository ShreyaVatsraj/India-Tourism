<?php

    $pdo = new PDO("mysql:host=localhost;dbname=indiatourism", "root", "");

        if (isset($_POST['register_btn'])) 
        {
           $Name = $_POST['username'];
           $Password = $_POST['password'];
           $Email_id = $_POST['email'];
        
           $statement = $pdo->prepare("INSERT INTO register(username , password , email ) values(? , ? , ? )");
           $statement->execute(array($Name , $Password , $Email_id));
           header("Location:./login.php");
        }
?>