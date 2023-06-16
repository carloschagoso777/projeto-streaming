<?php

session_start();

if(isset($_POST['Submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

    include_once('config.php');
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //print_r('senha:' .$email);
    //print_r($senha);

    $sql = "SELECT*FROM usuarios WHERE email = '$email' AND senha = '$senha'";

    $result = $conexao->query($sql);

   // print_r($result);
   if(mysqli_num_rows($result) < 1){

    //print_r('não existe');
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: ../html/teladelogin.php');

   }
   else{
    //print_r('existe');
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header('Location: ../html/projeto1.php');
   }
}
else{
    header('Location: ../html/teladelogin.php');

}

 //print_r($_REQUEST);

?>