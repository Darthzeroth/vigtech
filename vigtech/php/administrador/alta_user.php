<?php
session_start();
$id_usuarios=$_SESSION['id_usuario'];
$nombre=$_SESSION['nombre'];
?>
<!DOCTYPE HTML>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vigtech</title>
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
<link href="../../css/styles.css" rel="stylesheet" type="text/css" />
<script src="../../js/jquery-1.7.1.min.js"></script>
<script src="../../js/jquery.flexslider-min.js"></script>
 <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link href="../../css/templatemo-style.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="headerContainer">
        <h1><a href="">Vigtech</a></h1>
        <div id="navcontainer">
            <ul id="navlist">
                <li id="active"><a href="#">Inicio</a></li>
                <li id=""><a href="#">Alta avisos</a></li>
                <li id=""><a href="#">Alta usuarios</a></li>
                <li><a href="../logout.php">Salir</a></li>
            </ul>
        </div>
        <br class="clearfloat" />
            
    </div>

              
</header>
<div class="container">
    <section>
        <div class="logo"><center><img class="img-responsive" src="../../images/logo1.png"><br><br></center>
                
              </div>
    	
        <h1 class="pink-text">Alta de aviso</h1>
        <p>
        	<form action="php/valida/valida.php" class="templatemo-login-form" method="POST">
                <div class="form-group">
                    <div class="input-group">
                        <input type="email" class="form-control" name="correo" required placeholder="Nombre de el aviso">           
                    </div>   
                </div>
                <div class="form-group">
                    <div class="input-group"><h2 class="pink-text">Selecciona la imagen</h2>
                        <input type="file" class="form-control" name="file" required placeholder="Selecciona una imagen">           
                    </div>  
                </div>              
                
                <div class="form-group">
                    <a href="index.php" id="btn" class="btn btn-info1 width-100">Enviar</a>
                </div>
            </form>
        </p>
    </section>
    
    <br class="clearfloat" />
</div>
<footer>
    <p>
        Copyright &copy; DEMOWOLF. 
    </p>
</footer>
</body>
</html>
