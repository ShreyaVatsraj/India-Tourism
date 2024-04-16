<?php
session_start();
$pdo = new PDO("mysql:host=localhost;dbname=indiatourism", "root", "");

 if (isset($_POST['login_button'])) 
 {
   $Username = $_POST['username'];
   $Password = $_POST['password'];
   $statement = $pdo->prepare("SELECT * from register where username=? and password=?");
   $statement->execute(array($Username, $Password));
   $record = $statement->fetch();
   $id=$record['id'];
  //  $record

   $row = $statement->rowCount();
  if(isset($row))
   if($row > 0)
   {
    $_SESSION['USER']=$id;  
    header("Location: ./demo.php");
   }

   else
   {
    header("Location: ./login.php");
   }
 }

?>