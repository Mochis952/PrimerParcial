<?php

require 'db.php';
$pagina_html = "http://localhost/primerparcial/index.html";

if(isset($_POST['index'])) {

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' and password= '$password'";
$resultado = mysqli_query($conexion,$sql);
$numero_registros =($resultado);
	if($numero_registros != 0) {

		header('Location: http://localhost/primerparcial/home.html');
	} else {
		// Credenciales inválidas
		echo "Credenciales inválidas. Por favor, verifica tu nombre de usuario y/o contraseña, por favor vuelva intentarlo."."<br>";
		echo "<a href='$pagina_html'><button>Intentar nuevamente </button></a>";
	}
}

?>