<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">  
	    <title>Vigtech</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
       <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/templatemo-style.css" rel="stylesheet">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	   
	</head>
	<body class="light-gray-bg">
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
	          <div class="logo">
				<img class="img-responsive" src="images/logo2.png"><br><br>
				<H1><b>VIGTECH</b></H1>
			  </div>
	        </header>
	        <form action="php/valida/valida.php" class="templatemo-login-form" method="POST">
	        	<div class="form-group">
	        		<div class="input-group">
		              	<input type="email" class="form-control" name="correo" required placeholder="Ingresa tu correo">           
		          	</div>	 
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		              	<input type="password" class="form-control" name="password" required placeholder="Ingresa tu contraseña">           
		          	</div>	
	        	</div>	          	
	          	
				<div class="form-group">
					<button type="submit" id="btn" class="btn btn-info1 width-100">Entrar</button>
				</div>
	        </form>
		</div>
		
		<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<strong><a href="#" class="pink-text">Recuperar contraseña</a> </strong>
		</div>
	</body>
</html>
