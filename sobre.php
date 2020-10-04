<html>
	<head>
		<title>Pizzaria SA</title>	
		<link rel="stylesheet" type="text/css" href="css/global.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/parallax.css">
        <meta charset="UTF-8"><link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
		 <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		</head>
	<body bgcolor='#666666'>
		<div class="mainbar">
            <?php
            session_start();
			if(isset($_SESSION['id']) && $_SESSION['tipo'] == "ADMIN"){?>
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
						<a href="usuario_deslogar.php" class=buttom-deslogar></a>
					</div>
				</div>
			<?php
			}else if(isset($_SESSION['id']) && $_SESSION['tipo'] == "NORMAL"){?>
				<img class=thisalign src='images/banner/logo1.png'/><div class=logado-not-adm>
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
							<a href='faq.php'  class='dropbtn'>FAQ</a>
							<div class='dropdown-content'>
								<a href='faq.php' class=line><div class='icon-align'><img src='images/faq/portugues.png' width='52%'/></div> FAQ - Português</a>
								<a href='faq_english.php' class=line><div class='icon-align'><img src='images/faq/english.png' width='52%'/></div> FAQ - English</a>
							</div>
						</li>
					</ul>
					<div class='space1'>
						<div class='sessao'>
							<?php
								echo "<a href='cadastroUsuario_form.php?id=".$_SESSION['id']."' class='buttom-usuario'>";
								echo $_SESSION['usuario'];
								echo "<a href='cadastroUsuario_form.php?id=".$_SESSION['id']."' class='image-squad squad'><img src='images/usuario/".$_SESSION['foto']."'></a>";
							?>
							</a>
							
						</div>
						<a href="usuario_deslogar.php" class=buttom-deslogar></a>
					</div>
				</div>
			<?php
			}else{
				?>	
				<img class=thisalign src='images/banner/logo1.png'/><div class=naologado>
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
							<a href='faq.php'  class='dropbtn'>FAQ</a>
							<div class='dropdown-content'>
								<a href='faq.php' class=line><div class='icon-align'><img src='images/faq/portugues.png' width='52%'/></div> FAQ - Português</a>
								<a href='faq_english.php' class=line><div class='icon-align'><img src='images/faq/english.png' width='52%'/></div> FAQ - English</a>
							</div>
						</li>
					</ul>
					<a href='login_form.php' class='buttom-logar'>Entrar</a><br><a href='cadastroUsuario_form.php' class='buttom-cad'>Criar conta</a>
				</div>	
				<?php
			}
			?>
		</div>
		<div class=global-base>
			<div class=layout-um>
				<div class=sobre>
					<a href='sobre_english.php' class=line><div class='icon-align'><img src='images/faq/english.png' width='72%'/></div></a>
					<a href='sobre.php' class=line><div class='icon-align'><img src='images/faq/portugues.png' width='72%'/></div></a><br><br><br>
					<div class=edt>Sobre nós</div><br><br>
					<img src="images/banner/sobrenos.jpg" width=100%></img><br><br>
					Para os loucos e apaixonados por pizza, o que não pode faltar em uma pizzaria é variedade e o sabor em um cardápio diferenciado e cheio de requinte!<br><br>
					Temos uma equipe experiente e responsável no que faz, mas sem dúvida o nosso maior orgulho é estar conquistando cada vez mais a confiança de nossa clientela.<br>
					Estamos num salão amplo e confortável para melhor atender a toda a família. Um lugar tranquilo e agradável onde você vai sentir-se bem e a vontade como se estivesse em sua casa.<br><br>
					Além de nossa especialidade em pizzas e esfihas, nosso cardápio também possui muitas outras opções como: massas, porções e bebidas.<br><br>
					Com sede própria, prezando sempre pela qualidade, fartura e bom atendimento aos clientes, transformando em Pizzaria referência na região, com um menu diversificado e sempre com os melhores ingredientes e a sofisticação de sabor agradável aos paladares mais exigentes.
					Com um ótimo atendimento e um ambiente aconchegante para recepcionar os clientes.<br><br>
					A Pizzaria SA, com seus mais de 20 anos de tradição tem o prazer de servir uma paixão nacional a Pizza! Além disso, oferecemos uma variedade ampla em nosso cardápio.<br>
					A casa aceita cartões de débito, crédito e além de cartão refeição (TR/Visa vale/VR-Sodexo), inclusive para pagamentos em casa.<br><br><br><br><br><br><br>
				</div>
			</div>	
			<div class=layout-dois>
				<div class=sobre-dois>
					<a href='http://www.facebook.com.br/pizzariasa'><div class=curtir-button><img src="images/banner/fb_curtir.png" width=80%></img></div></a><br><br>
					<div class=edt>Unidades físicas</div><br><br><br>
					CONCEIÇÃO<br><br>
					(11) 5594-0673<br>
					Avenida do Café, 720<br><br>
					<br><br><br><br>
					SACOMÃ<br><br>
					(11) 2940-3631<br>
					R. Dom Vilares, 1595<br><br>
					<br><br><br><br>
					IPIRANGA<br><br>
					(11) 2495-3518<br>
					Avenida do Cursino, 453<br><br>
					<br><br><br><br>
					BROOKLIN<br><br>
					(11) 5181-3583<br>
					Rua Jaceru, 177<br><br>
					<br><br><br><br>
					SAÚDE<br><br>
					(11) 5584-9251<br>
					R. Itapiru, 537<br><br>
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