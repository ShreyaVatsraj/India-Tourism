<?php
    if(isset($_POST["submit"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if($username == "it" && $password == "it")
        {
            header("Location:../admin/dashboard.php");
        }
        else
        {
            header("Location:./admin.php");
        }
    }
?>
