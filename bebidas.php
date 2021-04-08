<?php
	include("conectar.php");

	$query_bebidas = "select * from bebidas";

	$resultQuery = mysqli_query($link, $query_bebidas);
?>
<html>
	<head>
		<title>Pizzaria SA - Bebidas</title>	
		<link rel="stylesheet" type="text/css" href="css/global.css">
        <link rel="stylesheet" type="text/css" href="css/produtos.css">
        <meta charset="UTF-8"><link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
		</head>
	<body>
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
        <div>
			<div class=barprodutos>
				<a href="pizzas_salgadas.php" class=produtosbutton>▼ Pizzas Salgadas</a>
				<a href="pizzas_doces.php" class=produtosbutton>► Pizzas Doces</a>
				<a href="bebidas.php" class=produtosbutton>► Bebidas</a>
			</div>
			<div class=pdtlayout>
				<div class=produtos>
					<?php
					while($result = mysqli_fetch_assoc($resultQuery)){
						$resultBanco[1] = $result['id'];
						$resultBanco[2] = utf8_encode($result['nome']);
						$resultBanco[3] = utf8_encode($result['tipo']);
						$resultBanco[4] = utf8_encode($result['sabor']);
						$resultBanco[5] = utf8_encode($result['valor']);
						$resultBanco[6] = utf8_encode($result['litros']);
						$resultBanco[7] = utf8_encode($result['foto']);
						
						echo "<div class=products>";
						echo "<div class=image><img src='images/bebidas/$resultBanco[7]' class='image-pdt'/></div><div class=botaopdt>";
						if ($resultBanco[3] == "GASEIFICADA"){
							if(isset($_SESSION['id']) && $_SESSION['tipo'] == "ADMIN"){
								if($resultBanco[6] < 10){
									echo "<div class=nomepdt>$resultBanco[2] - $resultBanco[4] $resultBanco[6] litro(s)<a class='delete' href='adminPizzasBebidas_delete.php?id=$resultBanco[1]'>×</a></div>";
								}else if($resultBanco[6] > 10){
									echo "<div class=nomepdt>$resultBanco[2] - $resultBanco[4] $resultBanco[6] ml<a class='delete' href='adminPizzasBebidas_delete.php?id=$resultBanco[1]'>×</a></div>";
								}
							}else{
								if($resultBanco[6] < 10){
									echo "<div class=nomepdt>$resultBanco[2] - $resultBanco[4] $resultBanco[6] litro(s)</div>";
								}else if($resultBanco[6] > 10){
									echo "<div class=nomepdt>$resultBanco[2] - $resultBanco[4] $resultBanco[6] ml</div>";
								}
							}
						}else if($resultBanco[3] == "NATURAL"){
							if(isset($_SESSION['id']) && $_SESSION['tipo'] == "ADMIN"){
								if($resultBanco[6] < 10){
									echo "<div class=nomepdt>Bebida Natural de $resultBanco[4] - $resultBanco[2] $resultBanco[6] litro(s)<a class='delete' href='adminPizzasBebidas_delete.php?id=$resultBanco[1]'>×</a></div>";
								}else if($resultBanco[6] > 10){
									echo "<div class=nomepdt>Bebida Natural de $resultBanco[4] - $resultBanco[2] $resultBanco[6] ml<a class='delete' href='adminPizzasBebidas_delete.php?id=$resultBanco[1]'>×</a></div>";
								}
							}else{
								if($resultBanco[6] < 10){
									echo "<div class=nomepdt>Bebida Natural de $resultBanco[4] - $resultBanco[2] $resultBanco[6] litro(s)</div>";
								}else if($resultBanco[6] > 10){
									echo "<div class=nomepdt>Bebida Natural de $resultBanco[4] - $resultBanco[2] $resultBanco[6] ml</div>";
								}
							}
							
						}
						echo "</div><div class=botaopdt>R$ $resultBanco[5]</div>";
						echo "</div>";
						
						
					}?>
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
		</div>	
	</body>
</html>