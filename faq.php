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
		<div class=layout-faq>
			<div class=sobre>
				<a href='faq_english.php' class=line><div class='icon-align'><img src='images/faq/english.png' width='72%'/></div></a>
				<a href='faq.php' class=line><div class='icon-align'><img src='images/faq/portugues.png' width='72%'/></div></a><br><br><br>
				<div class=edt>FAQ - Perguntas frequentes</div><br>
				<h4>Qual o endereço da pizzaria?</h4>
				Você pode verificar nossas unidades na área <a href='sobre.php'>Sobre nós</a>.<br><br><br>
				
				<h4>Quais os tipos de pizza disponíveis?</h4>
				Temos disponível dois tipos de pizza, doces e pizzas salgadas.<br><br><br>
				 
				<h4>Quais os tamanhos de pizza disponíveis?</h4>
				Há três tamanhos de pizza sendo, pequeno, médio (normal) e grande.<br><br><br>
				 
				<h4>Como comprar uma pizza?</h4>
				Para comprar uma pizza você deve se dirigir à nossa unidade física, os produtos no site são apenas amostra da qualidade dos nossos produtos.<br><br><br>
				 
				<h4>Como são feitas as pizzas?</h4>
				Para fazer as pizzas utilizamos os melhores produtos disponíveis no mercado pois prezamos pela qualidade de nosso produto.<br><br><br>
				 
				<h4>No serviço on-line há apenas pizzas?</h4>
				Não, você pode visualizar acompanhamentos como refrigerantes, sucos e outros.<br><br><br>
				 
				<h4>Porque devo me cadastrar no site?</h4>
				Com cadastro em nosso site você tem descontos em nossa unidade física e nos auxilia no serviço expresso.<br><br><br>
				 
				<h4>Porque devo fornecer meu telefone?</h4>
				Fornecendo seu telefone você nos ajuda a manter contato caso for preciso para o serviço expresso.<br><br><br>
				 
				<h4>Minhas informações estão seguras?</h4>
				Suas informações são armazenadas com total segurança e não são divulgadas em hipótese alguma.<br><br><br>
				 
				<h4>Quais as formas de pagamento?</h4>
				Dinheiro ou Cartão de crédito (via pagseguro ou paypal) na unidade física<br><br><br>
				 
				<h4> Qual o tempo médio de entrega do produto?</h4>
				Caso disponível em sua região, nosso serviço expresso leva em torno de 30 minutos para entregar o produto em sua localização.<br><br><br>
				 
				<h4> Tenho que pagar pelo serviço expresso?</h4>
				Nosso serviço expresso é por conta da casa, ou seja, você paga apenas pelo(s) produto(s).<br><br><br>
				 
				<h4> Posso pagar diretamente ao entregador?</h4>
				Sim, apenas em dinheiro.<br><br><br>
				 
				<h4> O pedido por telefone demora muito?</h4>
				Não, nosso serviço é de primeira com pizzaboys preparados para o serviço.<br><br><br>
				 
				<h4> Posso montar minha pizza?</h4>
				Essa ferramenta ainda não está disponível, portanto você pode apenas encomendar os produtos definidos no site.<br><br><br>
				 
				<h4> Qual o horário de funcionamento da pizzaria?</h4>
				Nossa pizzaria fica aberta de domingo a sábado das 18h às 23h.<br><br><br>
				<br><br><br>
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