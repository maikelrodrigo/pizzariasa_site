<html>
	<head>
		<title>Pizzaria SA</title>	
		<link rel="stylesheet" type="text/css" href="css/global.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <meta charset="UTF-8"><link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
		</head>
	<body bgcolor='#666666'>
		<div class="mainbar">
            <?php
            session_start();
			if(isset($_SESSION['id']) && $_SESSION['tipo'] == "ADMIN"){?>
				<img class=thisalign src='images/banner/logo1.png'/><div class=logado>
					<a href="index_english.php" class=buttons>Home</a>
						<ul>
							<li class="dropdown">
								<a href="pizzas_salgadas.php" class="dropbtn">Products</a>
								<div class="dropdown-content">
									<a href="pizzas_salgadas.php" class=line>Savory Pizzas</a>
									<a href="pizzas_doces.php" class=line>Sweet Pizzas</a>
									<a href="bebidas.php" class=line>Drinks</a>
								</div>
							</li>
						</ul>
					<a href="sobre_english.php" class=buttons>About us</a>
					<ul>
						<li class='dropdown'>
							<a href='crud_clientes.php' class='dropbtn'>CRUD</a>
							<div class='dropdown-content'>
								<a href='crud_clientes.php' class=line>Clients</a>
								<a href='crud_bebidas.php' class=line>Drinks</a>
								<a href='crud_pizzas.php' class=line>Pizzas</a>
								<a href='crud_ingredientes.php' class=line>Ingredients</a>
							</div>
						</li>
					</ul>
					<ul>
						<li class='dropdown'>
							<a href='faq_english.php'  class='dropbtn'>FAQ</a>
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
								echo "<a href='cadastroUsuario_form.php?id=".$_SESSION['id']."' class='image-squad squad'><img src='images/usuario/".$_SESSION['foto']."'></a>";?>
							</a>
							
						</div>
						<a href="usuario_deslogar.php" class=buttom-deslogar></a>
					</div>
				</div>
			<?php
			}else if(isset($_SESSION['id']) && $_SESSION['tipo'] == "NORMAL"){?>
				<img class=thisalign src='images/banner/logo1.png'/><div class=logado-not-adm>
					<a href="index_english.php" class=buttons>Home</a>
					<ul>
						<li class="dropdown">
							<a href="pizzas_salgadas.php" class="dropbtn">Products</a>
							<div class="dropdown-content">
								<a href="pizzas_salgadas.php" class=line>Savory Pizzas</a>
								<a href="pizzas_doces.php" class=line>Sweet Pizzas</a>
								<a href="bebidas.php" class=line>Drinks</a>
							</div>
						</li>
					</ul>
					<a href="sobre_english.php" class=buttons>About us</a>
					<ul>
						<li class='dropdown'>
							<a href='faq_english.php'  class='dropbtn'>FAQ</a>
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
			}else{
				?>	
				<img class=thisalign src='images/banner/logo1.png'/><div class=naologado>
					<a href="index_english.php" class=buttons>Home</a>
					<ul>
						<li class="dropdown">
							<a href="pizzas_salgadas.php" class="dropbtn">Products</a>
							<div class="dropdown-content">
								<a href="pizzas_salgadas.php" class=line>Savory Pizzas</a>
								<a href="pizzas_doces.php" class=line>Sweet Pizzas</a>
								<a href="bebidas.php" class=line>Drinks</a>
							</div>
						</li>
					</ul>
					<a href="sobre_english.php" class=buttons>About us</a>
					<ul>
						<li class='dropdown'>
							<a href='faq_english.php'  class='dropbtn'>FAQ</a>
							<div class='dropdown-content'>
								<a href='faq.php' class=line><div class='icon-align'><img src='images/faq/portugues.png' width='52%'/></div> FAQ - Português</a>
								<a href='faq_english.php' class=line><div class='icon-align'><img src='images/faq/english.png' width='52%'/></div> FAQ - English</a>
							</div>
						</li>
					</ul>
					<a href='login_form.php' class='buttom-logar'>Sign in</a><br><a href='cadastroUsuario_form.php' class='buttom-cad'>Sign up</a>
				</div>	
				<?php
			}
			?>
		</div>
		<div class=global-base>
			<div class=layout-um>
				<div class=sobre>
					<a href='sobre.php' class=line><div class='icon-align'><img src='images/faq/portugues.png' width='72%'/></div></a>
					<a href='sobre_english.php' class=line><div class='icon-align'><img src='images/faq/english.png' width='72%'/></div></a><br><br><br>
					<div class=edt>About us</div><br>
					<img src="images/banner/sobrenos.jpg" width=100%></img><br><br>
					For the crazy and in love with pizza, what cannot lack in a pizzeria is variety and flavor in a distinguished menu and full of refinement!<br><br>
					With the real concept in pizzeria, pizzeria SA has quality and flavor in dishes served, especially on our pizzas, Supreme specialty of the House. Our pizzeria has a menu to meet the expectations of each customer. <br> <br>
					We have an experienced team responsible at what he does, but without doubt our greatest pride is to be increasingly gaining the trust of our customers.<br>
					We are a large and comfortable lounge to best suit the whole family. A quiet and pleasant place where you will feel good and feel like yourself at home.<br><br>
					In addition to our specialty pizzas and sfihas, our menu also has many other options such as: pasta, portions and beverages.<br><br>
					With its own headquarters, always maintaining the quality, abundance and good customer service, turning into Pizzeria reference in the region, with a diversified menu and always with the finest ingredients and the sophistication of taste pleasing to the most demanding palates.
					With a great service and a warm welcome for guests.<br><br>
					The pizzeria SA, with its more than 20-year tradition is pleased to serve a national passion! In addition, we offer a wide variety in our menu.<br>
					The House accepts credit and debit cards, as well as meal card (TR/Visa vale/VR-Sodexo), including for home payments.<br><br><br><br>
				</div>
			</div>	
			<div class=layout-dois>
				<div class=sobre-dois>
					<a href='http://www.facebook.com.br/pizzariasa'><div class=curtir-button><img src="images/banner/fb_curtir.png" width=80%></img></div></a><br><br>
					<div class=edt>Pizzaria SA Units</div><br><br>
					CONCEIÇÃO<br><br>
					(11) 5594-0673<br>
					Avenida do Café, 720<br><br>
					<br><br><br>
					SACOMÃ<br><br>
					(11) 2940-3631<br>
					R. Dom Vilares, 1595<br><br>
					<br><br><br>
					IPIRANGA<br><br>
					(11) 2495-3518<br>
					Avenida do Cursino, 453<br><br>
					<br><br><br>
					BROOKLIN<br><br>
					(11) 5181-3583<br>
					Rua Jaceru, 177<br><br>
					<br><br><br>
					SAÚDE<br><br>
					(11) 5584-9251<br>
					R. Itapiru, 537<br><br><br>
				</div>
			</div>
		</div>	
        <div class="footbar">
			<div class='squareenix'>
				<div class='fotenter'>
					<font color='#fff'><b>Our company</b></font><br><br>						
					<a class='enixsquare' href='sobre_english.php'><div class=heightline>About us</div></a><img class=lineheight src='images/faq/english.png'/><br>
					<a class='enixsquare' href='sobre.php'><div class=heightline>Sobre nós</div></a><img class=lineheight src='images/faq/portugues.png'/><br>
				</div>
			</div>	
			<div class='squareenix'>
				<div class='fotenter'>
					<font color='#fff'><b>Our products</b></font><br><br>
					<a class='enixsquare linespace' href='pizzas_salgadas.php'>Savory pizzas</a><br>
					<a class='enixsquare linespace' href='pizzas_doces.php'>Sweet pizzas</a><br>
					<a class='enixsquare linespace' href='bebidas.php'>Drinks</a><br>
				</div>
			</div>	
			<div class='squareenix'>
				<div class='fotenter'>
					<font color='#fff'><b>Contacts</b></font><br><br>
					<a class='enixsquare'><div class=heightline>0800 7722-8223</div></a><img class=lineheight src='images/banner/phone.png'><br>
					<a class='enixsquare'><div class=heightline>(47) 9628-9724</div></a><img class=lineheight src='images/banner/whatsapp.png'><br>
					<a class='enixsquare'><div class=heightline>ceo@psa.com</div><img class=lineheight src='images/banner/mail.png'></a><br>
				</div>
			</div>	
			<div class='squareenix'>
				<div class='fotenter'>
					<font color='#fff'><b>FAQ</b></font><br><br>
					<a class='enixsquare' href='faq_english.php'><div class=heightline>English</div></a><img class=lineheight src='images/faq/english.png'/><br>
					<a class='enixsquare' href='faq.php'><div class=heightline>Português</div></a><img class=lineheight src='images/faq/portugues.png'/><br>
				</div>
			</div>	
		</div>
	</body>
</html>