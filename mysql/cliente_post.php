<?php 
include("conectar.php");

$nome = $_GET['nome'];
$query = "insert into cliente(nome) values('$nome')";

mysql_query($query);
//header("location:home.php");
?>