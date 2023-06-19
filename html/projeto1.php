<?php
session_start();
//print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){

  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location: ../html/teladelogin.php');

}

$logado = $_SESSION['email'];


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assistirjogosoline</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> 
    <style>
      .container{
    position: relative;
    height:900px; 
    width: 3000px;
    }
    .gradiente{
    position: absolute;
    background-image:linear-gradient(to bottom,rgba(255, 255, 255, 0),rgb(42, 0, 192));
    height: 150px;
    width: 1870px;
    bottom: 3%;
    left: -21%;
 }


    </style>        
    
</head>
<body>
    
    <main>

    <section class="container">
      
      <div class="btn-group" role="group" aria-label="Basic example">
        <a href="#referencia" ><button class="btn btn-outline"> Home</button></a>
        <a href="#referencia" ><button class="btn btn-outline" >  Jogos de Hoje</button></a>
        <a href="#referencia" ><button class="btn btn-outline"> Sobre.</button></a>
       
      </div>
      <div class="box" style="position:absolute; left:80%; top:12%;font-size:85%; background-color:rgb(42, 0, 192); color:white;">
        Bem vindo 
        <br>
        <?php echo"<u>$logado</u>"; ?>
        <br>
        <div class="d-flex" style="padding-left: 30%; ">
        <a href="../php/sair.php" class="btn btn-danger">sair</a>
      </div>
      </div>
      
    
    
      <div class="playercentral">
        <a href="#referencia"><img src="../imagens/playermelhor.png" alt="" height="20%" width="20%"></a>
      </div>
     
     <div class="centro">
      <h1 id="bv" style="color: rgb(42, 0, 192);"> Bem vindo!</h1> 
     </div>
     <div class="gradiente">
       
     </div>
     
     <div class="anuncio" >
     <h2 > Assista às Principais Ligas do Mundo:</h2>
    </div>
    </section>
  

   
   
    
     
    <section class="conteiner2" >
        <div class="logo1">
            <img src="../imagens/champions.png" alt="" width="20%" height="20%">
        </div>
        <div class="logo2">
            <img src="../imagens/brasileirao2.png" alt="" width="50%" height="50%">
        </div>
        <div class="logo3">
            <img src="../imagens/nba.png" alt="" width="65%" height="60%">
        </div>

    </section>
    <br>

     
    <section class="player">
       <div class="titulo2">
            <h1>Jogos de Hoje:</h1>
       </div>
        <div class="card" style="width: 250px;height: 300px;">
            <img id="referencia" src="../imagens/confronto1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Real Madrid x Barcelona</h5>
              <p class="card-text">31/02/2077 às 16:00 hrs</p>
              <a href="pagina1.php" class="btn btn-primary">assistir</a>
            </div>
          </div>
        </div>
        <div id="card2" class="card" style="width: 250px;height: 300px;">
            <img id="referencia" src="../imagens/confronto2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Lakers vs GSW</h5>
              <p class="card-text">31/02/2077 às 23:00 hrs</p>
              <a href="pagina1.php" class="btn btn-primary">assistir</a>
            </div>
          </div>
        <div id="card3" class="card" style="width: 250px;height: 300px;">
            <img id="referencia" src="../imagens/confronto5.jpg" class="card-img-top" alt="..." height="200px">
            <div class="card-body">
              <h5 class="card-title">Vasco vs Botafogo</h5>
              <p class="card-text">31/02/2077 às 20:00 hrs</p>
              <a href="pagina1.php" class="btn btn-primary">assistir</a>
            </div>
          </div>
        <div id="card4" class="card" style="width: 250px;height: 300px;">
            <img id="referencia" src="../imagens/confronto4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">FLA vs FLU </h5>
              <p class="card-text">31/02/2077 às 17:00 hrs</p>
              <a href="pagina1.php" class="btn btn-primary">assistir</a>
            </div>
          </div>
    

    </section> 
    </main>
</body>
</html>

     
