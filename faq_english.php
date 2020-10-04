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
								<a href='crud_clientes.php' class=line>Clientes</a>
								<a href='crud_bebidas.php' class=line>Bebidas</a>
								<a href='crud_pizzas.php' class=line>Pizzas</a>
								<a href='crud_ingredientes.php' class=line>Ingredientes</a>
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
		<div class=layout-faq>
			<div class=sobre>
				<a href='faq.php' class=line><div class='icon-align'><img src='images/faq/portugues.png' width='72%'/></div></a>
				<a href='faq_english.php' class=line><div class='icon-align'><img src='images/faq/english.png' width='72%'/></div></a><br><br><br>
				<div class=edt>FAQ - Frequently Asked Questions</div><br>
				<h4>What's the address from the pizza places?</h4>
				You can see the addresses in <a href='sobre_english.php'>About us</a>.<br><br><br>
				
				<h4>What type of pizzas are available? </h4>
				We have two pizza’s type available, savory and sweet. <br><br><br>
				 
				<h4>What size of pizzas are available? </h4>
				There are three sizes, being small, average (normal) and great. <br><br><br>
				 
				<h4>How to buy a pizza? </h4>
				To buy a pizza you need go to our physical unit, the products in our website are sample the quality of our products. <br><br><br>
				 
				<h4>As the pizzas are made? </h4>
				To make the pizzas we uses the best products of market  <br><br><br>
				
				<h4>There are only pizzas in on-line service?</h4>
				No, you can see side dishes as soda, juice and others.<br><br><br>
				
				<h4>Why should I register on the site?</h4>
				With registered account you have discounts in our physical units and assists the express service.<br><br><br>
				
				<h4>Why should I give my phone?</h4>
				Providing your phone you helps us keep contact if necessary to express service.<br><br><br>
				
				<h4>My data is safe?</h4>
				Your data is stored with total security and aren’t disclosed in any way.<br><br><br>

				<h4>What the payment forms?</h4>
				Money or credit card (with pagseguro or paypal) in our pizzaria.<br><br><br>

				<h4>What is the average time of product delivery?</h4>
				If available in your location, our express service takes an approximately 30 minutes to deliver the product to you.<br><br><br>

				<h4>Should I pay the express service?</h4>
				Our express service is free, you need to pay only the products.<br><br><br>

				<h4>Can I pay to the pizza boy?</h4>
				Yes, only with cash.<br><br><br>

				<h4>The phone request takes too long?</h4>
				No, our service is fast.<br><br><br>

				<h4>Can I make my own pizza?</h4>
				This tool aren’t available, you need request only the website products.<br><br><br>

				<h4>What the opening hour of the pizza places?</h4>
				Our pizza places stays open from Sunday to Saturday from 6:00 pm to 11:00 pm.<br><br><br>
				<br><br><br>
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