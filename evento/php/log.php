<?php

include_once("connect.php");

$codigo = $_POST['codigo'];
$senha = MD5($_POST['senha']);
$logar = $_POST['logar'];

$db = mysqli_select_db($con, "pessoa") or die("erro");
echo"";

if (isset($logar)){

    $verifica_log = mysqli_query($con, "SELECT * FROM user WHERE codigo = '$codigo' AND senha = '$senha'") 
    or die("erro ao selecionar");
    
      if (mysqli_num_rows($verifica_log)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='../login.php';</script>";
        die();
      }else{
        setcookie("codigo",$login);
        header("Location:../index.php");
      }
  }
?>