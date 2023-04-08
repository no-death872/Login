<?php
session_start();
$mail=htmlspecialchars( $_POST['mail']);
$password=htmlspecialchars($_POST['password']);
if ((isset($mail)) && isset($password)){
    if(($password==='0000') && ($mail==="admin@gmail.com"))
    {header("location:home.php");
        $_SESSION['user']=$mail;

    }
    else{
        $_SESSION['erreur']="veuillez verifier votre authentificateur";
        header("location:login.php");

    }
}else{  $_SESSION['erreur']="veuillez verifier votre authentificateur";
    header("location:login.php");}
