<?php 
include("conectar.php");

$nome = $_GET['nome'];
$query = "insert into cliente(nome) values('$nome')";

mysqli_query($link, $query);
//header("location:home.php");
?>