<?php
session_start();
if(isset($_SESSION['id']) && $_SESSION['tipo'] == "ADMIN"){
}else{
header("location:login_form.php");
}

include("conectar.php");

$query = "select * from cliente";

$resultQuery = mysql_query($query);
?>
<html>
	<head>
		<title>Pizzaria SA</title>	
		<link rel="stylesheet" type="text/css" href="css/atualiza.css">
		<link rel="stylesheet" type="text/css" href="css/global.css">
        <link rel="stylesheet" type="text/css" href="css/crud.css">
        <meta charset="UTF-8"><link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
	</head>
	<body bgcolor='#666666'> 
		<div class="mainbar">
		<img class=thisalign src='images/banner/logo1.png'/><div class=logado>
			<a href="index.php" class=buttons>Inicio</a>
			<ul>
				<li class="dropdown">
					<a href="pizzas_salgadas.php" class="dropbtn">Produtos</a>
					<div class="dropdown-content">
						<a href='pizzas_salgadas.php' class=line><div class='icon-align'><img src='images/banner/tradicional.png' width='52%'/></div>Pizzas Salgadas</a>
						<a href='pizzas_doces.php' class=line><div class='icon-align'><img src='images/banner/doces.png' width='52%'/></div>Pizzas Doces</a>
						<a href='bebidas.php' class=line><div class='icon-align'><img src='images/banner/bebidas.png' width='52%'/></div>Bebidas</a>
					</div>
				</li>
			</ul>
			<a href="sobre.php" class=buttons>Sobre nós</a>
			<ul>
				<li class='dropdown'>
					<a href='crud_clientes.php' class='dropbtn'>CRUD</a>
					<div class='dropdown-content'>
						<a href='crud_clientes.php' class=line>Clientes</a>
						<a href='crud_bebidas.php' class=line>Bebidas</a>
						<a href='crud_pizzas.php' class=line>Pizzas</a>
						<a href='crud_ingredientes.php' class=line>Ingredientes</a>
					</div>
				</li>
			</ul>
			<ul>
				<li class='dropdown'>
					<a href='faq.php'  class='dropbtn'>FAQ</a>
					<div class='dropdown-content'>
						<a href='faq.php' class=line><div class='icon-align'><img src='images/faq/portugues.png' width='52%'/></div> FAQ - Português</a>
						<a href='faq_english.php' class=line><div class='icon-align'><img src='images/faq/english.png' width='52%'/></div> FAQ - English</a>
					</div>
				</li>
			</ul>
			<div class='space1'>
				<?php
					echo "<a href='cadastroUsuario_form.php?id=".$_SESSION['id']."' class='buttom-usuario'>";
					echo $_SESSION['usuario'];
					echo "<a href='cadastroUsuario_form.php?id=".$_SESSION['id']."' class='image-squad squad'><img src='images/usuario/".$_SESSION['foto']."'></a>";?>
				</a>
				<a href='usuario_deslogar.php' class=buttom-deslogar></a>
			</div>
			
		</div><br><br><br><br>
		<div>
			<div class=barcrud>
				<a href='crud_clientes.php' class=crudbutton>Clientes</a>
				<a href='crud_bebidas.php' class=crudbutton>Bebidas</a>
				<a href='crud_pizzas.php' class=crudbutton>Pizzas</a>
				<a href='crud_ingredientes.php' class=crudbutton>Ingredientes</a>
			</div>
			<div class=layout>
				<div class=barra-principal>
					<label class='barbar'>
						<a href='crud.php' class=button-allcrud>◄</a>
						Clientes<a href='cadastroUsuario_form.php' class=button-plus>+</a>
					</label>
				</div>						
				<div id=minhaDiv1>
					<form metdod=POST action=cadastroUsuario_form.php id=cliente>
						<?php
						echo "
						<table class=tablestyle align='center'>
							<td>
								ID
							</td>
							<td>
								Usuário
							</td>
							<td>
								Nome completo
							</td>
							<td>
								E-mail
							</td>
							<td>
								Senha
							</td>
							<td>
								Sexo
							</td>
							<td>
								CEP
							</td>
							<td>
								CPF
							</td>
							<td>
								Telefone
							</td>
							<td>
								Tipo
							</td>
							<td></td>
							<td></td>
						";

						while($result = mysql_fetch_assoc($resultQuery)){
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
							
							echo "<tr>";
							echo "<td>";
							echo $resultBanco[1];
							echo "</td>";
							echo "<td>";
							echo $resultBanco[2];
							echo "</td>";
							echo "<td>";
							echo $resultBanco[3];
							echo "</td>";
							echo "<td>";
							echo $resultBanco[4];
							echo "</td>";
							echo "<td>";
							echo $resultBanco[5];
							echo "</td>";
							echo "<td>";
							echo $resultBanco[6];
							echo "</td>";
							echo "<td>";
							echo $resultBanco[7];
							echo "</td>";
							echo "<td>";
							echo $resultBanco[8];
							echo "</td>";
							echo "<td>";
							echo $resultBanco[9];
							echo "</td>";
							echo "<td>";
							echo $resultBanco[10];
							echo "</td>";
							echo "<td>";
							echo "<img src='images/usuario/$resultBanco[11]' class='squad-fir'>";
							echo "</td>";
							echo "<td>";
							echo "
							<div class=align>
								<a class='edit' href='cadastroUsuario_form.php?id=$resultBanco[1]'>Editar</a>
								<a class='delete' href='adminUsuario_delete.php?id=$resultBanco[1]'>Deletar</a>
							</div>";					
							echo "</td>";
							echo "</tr>";
						}?>
						</table>
					</form>
				</div>
			</div>	
		</div>
	</body>
</html>
