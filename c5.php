<?php
    $email=$_GET['txtEmail'];
    $pass=$_GET['pass'];

    if($email=="sam@gmail.com" && $pass=="123456")
    {
        echo "<br>";
        echo $email." ".$pass;
    }
    else{
        header("Location: login.html");
        exit;
    }
    
?>