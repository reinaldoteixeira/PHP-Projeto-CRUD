<?php
require_once("conexao.php");

if(isset($_GET['id'])){
	$id = $_GET['id'];

	$resultado = $con->query("SELECT * FROM cliente p WHERE p.cpf = ".$cpf);
	$res = $resultado->fetch();

	die($res['precoProd']);
}
?>