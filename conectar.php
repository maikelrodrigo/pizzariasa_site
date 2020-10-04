<?php
	$host = "localhost";
	$user = "root";
	$passwd = "";
	$base = "phpBanco";
	$conexao = @mysql_connect($host,$user, $passwd);

if (!$conexao) {
	$mensagem = "Nao foi possivel estabelecer a conexao";
	echo $mensagem . "<hr>";
	die(mysql_error());
	}
	
$db = mysql_select_db($base,$conexao);
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

if (!$db) {
 	$mensagem = "Nao foi possivel encontrar o banco de dados";
	echo $mensagem . "<hr>";
	die(mysql_error());
	}
?> 