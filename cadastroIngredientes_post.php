<?php 
	include("conectar.php");
	session_start();	
	if(isset($_SESSION)){
		if(!($_SESSION['tipo'] == "ADMIN" || $_SESSION['id'] == $_POST['id'])){
			header("location:index.php");
			echo $_SESSION['id'];
			exit();
		}
	}
	$id = (isset($_POST['id']) ? $_POST['id'] : "");
	$nome = $_POST['nome'];
	$tipo = $_POST['tipo'];
	$valor = $_POST['valor'];
	$estoque = $_POST['estoque'];

	if($id == ""){
		$query = "insert into ingrediente(nome,tipo,valor,estoque) values('$nome','$tipo','$valor','$estoque')";
		}else{
		$query = "update ingrediente set nome='$nome',tipo='$tipo',valor='$valor',estoque='$estoque' where id=$id";
	}
	
	mysql_query($query);
	echo $query;
	header("location:crud_ingredientes.php");
	exit();
?>