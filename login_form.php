<?php
include('conectar.php');
session_start();
if(!isset($_SESSION['id'])){
}else{
header("location:index.php");
}
?>
<html>
	<head>
		<title>Pizzaria SA</title>	
		<link rel="stylesheet" type="text/css" href="css/global.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/atualiza.css">
        <meta charset="UTF-8"><link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
		
	</head>
	<body background='images/banner/parallax1.jpg'>
		<div class="mainbar">
			<img class=thisalign src='images/banner/logo1.png'/><div class=naologado>
				<a href="index.php" class=buttons>Inicio</a>
				<ul>
					<li class="dropdown">
						<a href="pizzas_salgadas.php" class="dropbtn">Produtos</a>
						<div class="dropdown-content">
							<a href="pizzas_salgadas.php" class=line><div class='icon-align'><img src='images/banner/tradicional.png' width='52%'/></div>Pizzas Salgadas</a>
							<a href='pizzas_doces.php' class=line><div class='icon-align'><img src='images/banner/doces.png' width='52%'/></div>Pizzas Doces</a>
							<a href="bebidas.php" class=line><div class='icon-align'><img src='images/banner/bebidas.png' width='52%'/></div>Bebidas</a>
						</div>
					</li>
				</ul>				
				<a href="sobre.php" class=buttons>Sobre nós</a>
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
			</div>	
		</div>
        <div class=mainbarfix></div>
		<div class=englobal>
			<div class=login>
				<div id=login>
					<img src='images/banner/logo.png' height='55px' width='261px'></img><br><br><center>________________________________</center><br><br>
					
					<center>Insira seu nome de usuário e senha.</center><br><br>
					<form method=POST action=login_validation.php>
						<input type=text required name=usuario placeholder="Usuário" class="form-control top"/></input><br><br>
						<input type=password required name=senha class="form-control bottom" oninvalid="this.setCustomValidity('Insira sua senha aqui.')" oninput="setCustomValidity('')" placeholder="Senha"></input><br><br>
						<button class='btn btn-primary btn-lg btn-block' type=submit>Entrar</button><br><br><a href='cadastroUsuario_form.php'>Não tenho uma conta.</a><br><center>________________________________</center><br><br>
					</form>
				</div>
			</div>

		</div>
		<div class="footbar">
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