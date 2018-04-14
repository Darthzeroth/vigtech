<?php
session_start();
include('../conexion/conexion.php');
	
	$correo=$_POST['correo'];
	$pass=$_POST['password'];
	

	$buscarUsuario = "SELECT * FROM usuarios WHERE correo='$correo' AND password='$pass'";
	$result = $conexion->query($buscarUsuario);
	//Contamos cuantos usuarios hay con ese dato
	$count = mysqli_num_rows($result);
	if($count>0){
	$array=$result->fetch_assoc();
	$mail=$array['correo'];
	$password=$array['password'];
	$id_usuarios=$array['idUsuarios'];
	$id_dpuser=$array['Datos_Personales_idDatos_Personales'];
	$tipo_user=$array['tipo_user'];
	$buscarUsuarioDP = "SELECT * FROM datos_personales WHERE idDatos_Personales='$id_dpuser'";
	$resultdp = $conexion->query($buscarUsuarioDP);
	$arraydp=$resultdp->fetch_assoc();

	$nombre=$arraydp['nombre'].' '.$arraydp['app'].' '.$arraydp['apm'];

	if($mail==$correo AND $pass==$password){
		if($tipo_user==1){
		$_SESSION['id_usuario']=$id_usuarios;
		$_SESSION['nombre']=$nombre;
		echo'<script type="text/javascript">document.location = "../administrador/index.php";</script>';
		}
		else if($tipo_user==2){
		$_SESSION['id_usuario']=$id_usuarios;
		$_SESSION['nombre']=$nombre;
		echo'<script type="text/javascript">document.location = "../analista/index.php";</script>';
		}
		else if($tipo_user==3){
		$_SESSION['id_usuario']=$id_usuarios;
		$_SESSION['nombre']=$nombre;
		echo'<script type="text/javascript">document.location = "../usuario/index.php";</script>';
		}
	

	}
	else{
		echo'<script type="text/javascript">alert("La contraseña o correo son incorrectos");document.location = "../../index.php";</script>';
	}


	}
else{
    echo'<script type="text/javascript">alert("La contraseña o correo son incorrectos");document.location = "../../index.php";</script>';
}

?>