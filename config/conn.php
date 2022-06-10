<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "blog";
try{

	$conectar = new PDO("mysql:host=".$host.";dbname=".$dbname, $user, $password);
	// echo "Conexão realizada com sucesso!"; //
}catch(Exeption $err){
	echo "Erro na conexão";
}
?>
