<?php
	include ("conectar.php");
	$usuario= $_POST['usuario'];
	$senha= $_POST['senha'];

	$query = "select * from cliente where usuario='$usuario' and senha='$senha'";
	
	echo "$query";
	
	$resultQuery = mysqli_query($link, $query);

if(mysqli_num_rows($resultQuery) > 0 ){
		
		while($result = mysqli_fetch_assoc($resultQuery)){
			$resultBanco[1] = $result['id'];
			$resultBanco[2] = utf8_encode($result['usuario']);
			$resultBanco[3] = utf8_encode($result['nome_completo']);
			$resultBanco[4] = utf8_encode($result['email']);
			$resultBanco[5] = utf8_encode($result['senha']);
			$resultBanco[6] = utf8_encode($result['sexo']);
			$resultBanco[7] = utf8_encode($result['cep']);
			$resultBanco[8] = utf8_encode($result['cpf']);
			$resultBanco[9] = utf8_encode($result['telefone']);
			$resultBanco[10] = utf8_encode($result['tipo']);
			$resultBanco[11] = utf8_encode($result['foto']);
		}
		session_start();
		$_SESSION['id'] = $resultBanco[1];
		$_SESSION['usuario'] = $resultBanco[2];
		$_SESSION['nome_completo'] = $resultBanco[3];
		$_SESSION['email'] = $resultBanco[4];
		$_SESSION['senha'] = $resultBanco[5];
		$_SESSION['sexo'] = $resultBanco[6];
		$_SESSION['cep'] = $resultBanco[7];
		$_SESSION['cpf'] = $resultBanco[8];
		$_SESSION['telefone'] = $resultBanco[9];
		$_SESSION['tipo'] = $resultBanco[10];
		if($resultBanco[11] != ""){
		$_SESSION['foto'] = $resultBanco[11];
		}else{
		$_SESSION['foto'] = "USER.png";
		}
		
		switch($resultBanco[10]){
			case "ADMIN":
				header("location:index.php");
				break;
			case "NORMAL":
				header("location:index.php");
				break;
			default:
				header("location:login_form.php");
				break;
		}
	}else{
		header("location:index.php");
	}
?>
