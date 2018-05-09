<?php
require_once("conexao.php");

if(isset($_GET['id'])){
	$id = $_GET['id'];

	$resultado = $con->query("SELECT * FROM produto p WHERE p.idProduto = ".$id);
	$res = $resultado->fetch();

	die($res['precoProd']);
}
?>