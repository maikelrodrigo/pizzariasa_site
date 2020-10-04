<?php
include('conectar.php');
session_start();
if(isset($_GET['id'])){
	
//testar
if(!isset($_SESSION['usuario']) || !($_SESSION['tipo'] == 'ADMIN' || $_SESSION['id'] == $_GET['id'])){
header('location:index.php');
exit();
}

$query = 'select * from cliente where id='.$_GET['id'];

$resultQuery = mysql_query($query);
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
}
$id = $resultBanco[1];
$usuario = utf8_decode($resultBanco[2]);
$nome_completo = utf8_decode($resultBanco[3]);
$email = utf8_decode($resultBanco[4]);
$senha = utf8_decode($resultBanco[5]);
$sexo = utf8_decode($resultBanco[6]);
$cep = utf8_decode($resultBanco[7]);
$cpf = utf8_decode($resultBanco[8]);
$telefone = utf8_decode($resultBanco[9]);
$tipo = utf8_decode($resultBanco[10]);
$foto = utf8_decode($resultBanco[11]);
$titulo = 'ALTERANDO';
}else{
$id = '';
$usuario = '';
$nome_completo = '';
$email = '';
$senha = '';
$sexo = '';
$cep = '';
$cpf = '';
$telefone = '';
$tipo = '';
$foto = '';
$titulo = 'CADASTRANDO';
}

echo "
<html>
	<head>
		<title>Pizzaria SA</title>	
		<link rel='stylesheet' type='text/css' href='css/global.css'>
		<link rel='stylesheet' type='text/css' href='css/atualiza.css'>
		<link rel='shortcut icon' href='images/favicon.ico' type='image/x-icon'/>
	</head>
	<body background='images/banner/parallax1.jpg'>
		<div class='mainbar'>";	

			if(isset($_SESSION['id']) && $_SESSION['tipo'] == "ADMIN"){
				echo "<img class=thisalign src='images/banner/logo1.png'/><div class=logado>
					<a href='index.php' class=buttons>Inicio</a>
					<ul>
						<li class='dropdown'>
							<a href='pizzas_salgadas.php' class='dropbtn'>Produtos</a>
							<div class='dropdown-content'>
								<a href='pizzas_salgadas.php' class=line><div class='icon-align'><img src='images/banner/tradicional.png' width='52%'/></div>Pizzas Salgadas</a>
								<a href='pizzas_doces.php' class=line>Pizzas Doces</a>
								<a href='bebidas.php' class=line><div class='icon-align'><img src='images/banner/bebidas.png' width='52%'/></div>Bebidas</a>
							</div>
						</li>
					</ul>		
					<a href='sobre.php' class=buttons>Sobre nós</a>
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
						<div class='sessao'>";

								echo "<a href='cadastroUsuario_form.php?id=".$_SESSION['id']."' class='buttom-usuario'>";
								echo $_SESSION['usuario'];
								echo "<a href='cadastroUsuario_form.php?id=".$_SESSION['id']."' class='image-squad squad'><img src='images/usuario/".$_SESSION['foto']."'></a></a>";
							
							
						echo "</div>
						<a href='usuario_deslogar.php' class=buttom-deslogar></a>
					</div>
				</div>";

			}else if(isset($_SESSION['id']) && $_SESSION['tipo'] == "NORMAL"){
				echo "<img class=thisalign src='images/banner/logo1.png'/><div class=logado-not-adm>
					<a href='index.php' class=buttons>Inicio</a>
					<ul>
						<li class='dropdown'>
							<a href='pizzas_salgadas.php' class='dropbtn'>Produtos</a>
							<div class='dropdown-content'>
								<a href='pizzas_salgadas.php' class=line><div class='icon-align'><img src='images/banner/tradicional.png' width='52%'/></div>Pizzas Salgadas</a>
								<a href='pizzas_doces.php' class=line>Pizzas Doces</a>
								<a href='bebidas.php' class=line><div class='icon-align'><img src='images/banner/bebidas.png' width='52%'/></div>Bebidas</a>
							</div>
						</li>
					</ul>		
					<a href='sobre.php' class=buttons>Sobre nós</a>
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
						<div class='sessao'>";

								echo "<a href='cadastroUsuario_form.php?id=".$_SESSION['id']."' class='buttom-usuario'>";
								echo $_SESSION['usuario'];
								echo "<a href='cadastroUsuario_form.php?id=".$_SESSION['id']."' class='image-squad squad'><img src='images/usuario/".$_SESSION['foto']."'></a></a>";

							
							
						echo "</div>
						<a href='usuario_deslogar.php' class=buttom-deslogar></a>
					</div>
				</div>";
			}else{
				echo "<img class=thisalign src='images/banner/logo1.png'/><div class=naologado>
					<a href='index.php' class=buttons>Inicio</a>
					<ul>
						<li class='dropdown'>
							<a href='pizzas_salgadas.php' class='dropbtn'>Produtos</a>
							<div class='dropdown-content'>
								<a href='pizzas_salgadas.php' class=line><div class='icon-align'><img src='images/banner/tradicional.png' width='52%'/></div>Pizzas Salgadas</a>
								<a href='pizzas_doces.php' class=line>Pizzas Doces</a>
								<a href='bebidas.php' class=line><div class='icon-align'><img src='images/banner/bebidas.png' width='52%'/></div>Bebidas</a>
							</div>
						</li>
					</ul>		
					<a href='sobre.php' class=buttons>Sobre nós</a>
					<ul>
						<li class='dropdown'>
							<a href='faq.php'  class='dropbtn'>FAQ</a>
							<div class='dropdown-content'>
								<a href='faq.php' class=line><div class='icon-align'><img src='images/faq/portugues.png' width='52%'/></div> FAQ - Português</a>
								<a href='faq_english.php' class=line><div class='icon-align'><img src='images/faq/english.png' width='52%'/></div> FAQ - English</a>
							</div>
						</li>
					</ul>
					<a href='login_form.php' class='buttom-logar'>Entrar</a><br><a href='cadastroUsuario_form.php' class='buttom-cad'>Criar conta</a>
				</div>";
			}
		echo "</div>
		<div class='englobal-reg clnt'>
			<div class=login>
				<div id=login>
					<img src='images/banner/logo.png' height='55px' width='261px'></img><br><br><center>________________________________</center><br><br>
					<form action='cadastroUsuario_post.php' method='POST'  enctype='multipart/form-data'>
					";
						if($titulo == 'ALTERANDO'){
						echo "
						ID: <input name='id' readonly value='$id' class='form-control top'>
						<br>
						";
						
						}
						echo "
						<br>Usuário*: <input name='usuario' required value='$usuario' class='form-control top' placeholder='Usuário'>
						<br>
						<br>Nome completo*: <input name='nome_completo' required value='$nome_completo' class='form-control top' placeholder='Nome completo'>
						<br>
						<br>E-mail*: <input name='email' type=email value='$email' class='form-control top' placeholder='E-mail'>
						<br>
						<br>Senha*: <input name='senha' required type=password value='$senha' class='form-control top' placeholder='Senha'>
						";
						echo "<br>Sexo*: <input type='radio' name='sexo' value='MASCULINO' ".($sexo == 'MASCULINO' ? "checked" : "")."> Masculino
						<input type='radio' name='sexo' value='FEMININO' ".($sexo == 'FEMININO' ? "checked" : "")."> Feminino<br>";
						
						echo "<br>
						<br>CEP: <input name='cep' value='$cep' class='form-control top' placeholder='CEP'>
						<br>
						<br>CPF*: <input name='cpf' required value='$cpf' class='form-control top' placeholder='CPF'>
						<br>
						<br>Telefone*: <input name='telefone' required value='$telefone' class='form-control top' placeholder='Telefone'>
						<br><br>";
						
						if($titulo == 'ALTERANDO'){
						echo "
						<img src='images/usuario/$foto' class='image-squad'>
						<br>
						";
						
						}
						
						echo "
						<br><input type=file name='foto' value='$foto' class='form-image top'>
						<br><br>
						";
						
						if($titulo == 'ALTERANDO' && $_SESSION['tipo'] == 'ADMIN' ){
						echo "Tipo de usuário:<br>
							  <select name=tipo class='form-control'>";
						if($tipo == 'ADMIN'){
							echo"<option value='ADMIN'>ADMIN</option>
								<option value='NORMAL'>NORMAL</option>";
						}else if($tipo == 'NORMAL'){
							echo "<option value='NORMAL'>NORMAL</option>
								<option value='ADMIN'>ADMIN</option>";
						}
						echo "</select>
						<br>
						";
						}	
						if($titulo == 'ALTERANDO'){
							echo "<br><br><button class='btn btn-primary btn-lg btn-block' type=submit>Aplicar</button><br><br><br><center>________________________________</center>";
						}else if($titulo == 'CADASTRANDO'){
							echo "<br><br><br><br><button class='btn btn-primary btn-lg btn-block' type=submit>Criar conta</button><br><br><br><center>________________________________</center>";
						}
					echo "</form>
				</div>
			</div>
		</div>
		<div class='footbar'>
			<div class='squareenix'>
				<div class='fotenter'>
					<font color='#fff'><b>Nossa empresa</b></font><br><br>
					<a class='enixsquare' href='sobre.php'><div class=heightline>Sobre nós</div></a><img class=lineheight src='images/faq/portugues.png'/><br>
					<a class='enixsquare' href='sobre_english.php'><div class=heightline>About us</div></a><img class=lineheight src='images/faq/english.png'/><br>
				</div>
			</div>	
			<div class='squareenix'>
				<div class='fotenter'>
					<font color='#fff'><b>Nossos produtos</b></font><br><br>
					<a class='enixsquare linespace' href='pizzas_salgadas.php'>Pizzas salgadas</a><br>
					<a class='enixsquare linespace' href='pizzas_doces.php'>Pizzas doces</a><br>
					<a class='enixsquare linespace' href='bebidas.php'>Bebidas</a><br>
				</div>
			</div>	
			<div class='squareenix'>
				<div class='fotenter'>
					<font color='#fff'><b>Contatos</b></font><br><br>
					<a class='enixsquare'><div class=heightline>0800 7722-8223</div></a><img class=lineheight src='images/banner/phone.png'><br>
					<a class='enixsquare'><div class=heightline>(47) 9628-9724</div></a><img class=lineheight src='images/banner/whatsapp.png'><br>
					<a class='enixsquare'><div class=heightline>ceo@psa.com</div><img class=lineheight src='images/banner/mail.png'></a><br>
				</div>
			</div>	
			<div class='squareenix'>
				<div class='fotenter'>
					<font color='#fff'><b>FAQ</b></font><br><br>
					<a class='enixsquare' href='faq.php'><div class=heightline>Português</div></a><img class=lineheight src='images/faq/portugues.png'/><br>
					<a class='enixsquare' href='faq_english.php'><div class=heightline>English</div></a><img class=lineheight src='images/faq/english.png'/><br>
				</div>
			</div>	
		</div>
	</body>
</html>

";
?>
