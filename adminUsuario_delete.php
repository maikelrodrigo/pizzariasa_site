﻿<?php
session_start();
if(isset($_SESSION['usuario']) && $_SESSION['tipo'] == "ADMIN"){
echo "<br>";
}else{
header("location:index.php");
exit();
}

include("conectar.php");

$query = "delete from cliente where id=".$_GET['id'].";";

mysql_query($query);

header("location:crud_clientes.php");
?>