<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> 
            
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(42, 0, 192);
        }
        .login{
            background-image: linear-gradient(to right, rgb(0, 92, 197),rgb(42, 0, 192)) ;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-image:linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        .inputSubmit:hover{
            background-image:linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
            cursor: pointer;
        }
    </style>
</head>
<body>
<br>
        <div class="d-flex" style="position:absolute; left:40%; top:80%;" >
        <a href="../projeto.php" class="btn " style="background-color: #fff;">Ir para pagina inicial.</a>
      </div>
      <div class="d-flex" style="position:absolute; left:50%; top:80%;" >
        <a href="../html/cadastro.php" class="btn " style="background-color:rgb(0, 92, 197); color:#fff">Não tenho conta!</a>
      </div>
    <div class="login">
        <h1>Login</h1>
        <form action="../php/testeLogin.php" method="POST">
        <input type="text" name="email"  placeholder="Email">
        <br><br>
        <input type="password" name="senha" placeholder="Senha">
        <br><br>
        <input class="inputSubmit" type="submit" name="Submit" value="Enviar">
        </form>
    </div>
</body>
</html>