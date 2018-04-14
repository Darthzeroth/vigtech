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
</head>
<body>
<header>
    <div class="headerContainer">
        <h1><a href="">Vigtech</a></h1>
        <div id="navcontainer">
            <ul id="navlist">
                <li id="active"><a href="#">Inicio</a></li>
                <li id=""><a href="alta_aviso.php">Alta avisos</a></li>
                <li id=""><a href="alta_user.php">Alta usuarios</a></li>
                <li><a href="../logout.php">Salir</a></li>
            </ul>
        </div>
        <br class="clearfloat" />
        <!-- begin .slider -->
        <div class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="../../images/avisos.jpg" alt="" class="shadowStyle"></li>
                    <li><img src="../../images/av1.jpg" alt="" class="shadowStyle"></li>
                    <li><img src="../../images/av2.jpg" alt="" class="shadowStyle"></li>
                </ul>
            </div>
        </div>
        <br class="clearfloat" />
        <!-- end .slider -->
    </div>
</header>
<div class="container">
    <section>
    	<!-- begin .boxes -->
        <div class="boxes">
			<ul>
            	<li class="shadowStyle">
                	<h2>Key West</h2>
                	<img src="images/boxPic1.jpg" alt="" class="boxPic shadowStyle">
                    <p>
                    	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <a href="#">It has survived not only</a> five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                  </p>
                  <div class="button"><a href=""><img src="images/more.png" alt=""></a></div>
                </li>
                <li class="shadowStyle">
                	<h2>South</h2>
                	<img src="images/boxPic2.jpg" alt="" class="boxPic shadowStyle">
                    <p>
                    	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <a href="#">It has survived not only</a> five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                  </p>
                  <div class="button"><a href=""><img src="images/more.png" alt=""></a></div>
                </li>
                
            </ul>

            <br class="clearfloat" />

        </div>
        
        <!-- end .boxes -->
        <h1>Welcome Palm</h1>
        <p>
        	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into <a href="#">electronic typesetting</a>, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br><br>
            The industry's standard dummy <a href="#">text ever since the 1500s</a>, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </section>
    <!-- begin Right List -->
    <div class="rightList shadowStyle">
        <h2>About Palm</h2>
        <p>
            <img src="images/pic.jpg" alt="" class="floatPic shadowStyle">
           	Lorem Ipsum is simply dummy text of the printing 
and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.
        </p>
    </div>
    <!-- end Right List -->
    <!-- begin Left List -->
    <div class="leftList">
        <h2>Species Profiles</h2>
        <ul>
            <li><a href="">Lorem Ipsum is simply dummy</a></li>
            <li><a href="">Text of the printing and typesetting industry</a></li>
            <li><a href="">The industry's standard dummy text</a></li>
            <li><a href="">Ever since the 1500s, when an unknown</a></li>
            <li><a href="">Printer took a galley of type and scrambled</a></li>
            <li><a href="">Make a type specimen book</a></li>
            <li><a href="">It has survived not only five centuries</a></li>
        </ul>
    </div>
    <!-- end Left List -->
    <br class="clearfloat" />
</div>
<footer>
    <p>
        Copyright &copy; DEMOWOLF. All rights reserved. </p>
</footer>
</body>
</html>
