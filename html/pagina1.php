<?php
session_start();
//print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){

  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location: html/teladelogin.php');

}

$logado = $_SESSION['email'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> 
            
    <title>playermultistream</title>

</head>
<body>
    <main>
    <section class="playervideo">
        

    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="projeto1.php" ><button class="btn btn-outline"> Home</button></a>
        <a href="#referencia" ><button class="btn btn-outline"> Sobre.</button></a>
       
      </div>
      <div class="box" style="position:absolute; left:86%; top:15%;font-size:85%; background-color:rgb(42, 0, 192); color:white;">
        Bem vindo 
        <br>
        <?php echo"<u>$logado</u>"; ?>
        <br>
        <div class="d-flex" style="padding-left: 30%; ">
        <a href="../php/sair.php" class="btn btn-danger">sair</a>
      </div>
      </div>
       

        <div class="exibicao">
            <a id="direcionador"  href="#"><img src="../imagens/playermelhor.png" alt="" height="100px" width="100px"></a>
        </div>

        <div class="descricao">
          <a href=""> Assistir:Vasco vs Botafogo- multicanais</a>
        </div>
      
        <div class="publicidade1">

        </div>
        <div class="publicidade2">

        </div>
    </section>
</main>    
    
</body>
</html>