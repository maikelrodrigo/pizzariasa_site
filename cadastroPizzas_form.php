<?php
	include('conectar.php');
	session_start();	
	if(isset($_GET['id'])){
		
		//testar
		/*
			if(!isset($_SESSION['pizza']) || $_SESSION['id'] == $_GET['id']){
			header('location:index.php');
			exit();
		}*/
		
		$query = 'select * from pizza where id='.$_GET['id'];
		
		$resultQuery = mysql_query($query);
		while($result = mysql_fetch_assoc($resultQuery)){
			$resultBanco[1] = $result['id'];
			$resultBanco[2] = utf8_encode($result['nome']);
			$resultBanco[3] = utf8_encode($result['tipo']);
			$resultBanco[4] = utf8_encode($result['valor']);
			$resultBanco[5] = utf8_encode($result['tamanho']);
			$resultBanco[6] = utf8_encode($result['foto']);
		}
		$id = $resultBanco[1];
		$nome = utf8_decode($resultBanco[2]);
		$tipo = utf8_decode($resultBanco[3]);
		$valor = utf8_decode($resultBanco[4]);
		$tamanho = utf8_decode($resultBanco[5]);
		$foto = utf8_decode($resultBanco[6]);
		$titulo = 'ALTERANDO';
		}else{
		$id = '';
		$nome = '';
		$tipo = '';
		$valor = '';
		$tamanho = '';
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
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
	<script src='js/script.js'></script>
	<meta charset='UTF-8'>
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
		
		}else{
		header('location:index.php');
	}
	echo "</div>
	<div class='englobal-reg pzz'>
	<div class=login>
	<div id=login>
	<img src='images/banner/logo.png' height='55px' width='261px'></img><br><br><center>________________________________</center><br><br>
	<form action='cadastroPizzas_post.php' method='POST'  enctype='multipart/form-data'><div class=ativs>
	";
	if($titulo == 'ALTERANDO'){
		echo "
		ID: <input name='id' readonly value='$id' class='form-control top'>
		<br>
		";
		
	}
	echo "
	<br>Nome: <input name='nome' value='$nome' class='form-control top' placeholder='Nome'>
	<br><br>Valor: <input name='valor' value='$valor' class='form-control top' placeholder='Valor'>
	<br><br>Tamanho:
	<br><select name=tamanho class=form-control>
	<option value='GRANDE' ".($tamanho == 'GRANDE' ? "selected" : "").">GRANDE</option>
	<option value='MEDIA' ".($tamanho == 'MEDIA' ? "selected" : "").">MEDIA</option>
	<option value='PEQUENA' ".($tamanho == 'PEQUENA' ? "selected" : "").">PEQUENA</option>
	</select>
	<br><br>Tipo:
	<select name=tipo class=form-control>
	<option value='SALGADA' ".($tipo == 'SALGADA' ? "selected" : "").">SALGADA</option>
	<option value='DOCE' ".($tipo == 'DOCE' ? "selected" : "").">DOCE</option>
	</select>
	<br><br>
	";
	
	echo "<div id=ingredientes>";
	echo "Ingredientes: <button id='addInput'>+</button><br><br>";
	
	$ingredientes = mysql_query("select nome,id from ingrediente");
	$nrIngredienteBanco = 0;
	while($rowIngrediente = mysql_fetch_array($ingredientes)){
		$ingredientesList[$nrIngredienteBanco][0] = $rowIngrediente['id'];
		$ingredientesList[$nrIngredienteBanco][1] = $rowIngrediente['nome'];
		$nrIngredienteBanco++;
	}
		$nrIngrediente = 1;
	if($titulo == 'ALTERANDO'){
		$pizzaIngredientes = mysql_query("select id_ingrediente,quantidade from pizza_ingrediente where id_pizza=$id;");
		while ($rowPizzaIngrediente = mysql_fetch_array($pizzaIngredientes)){
			echo "<div class=ingrediente id=ing$nrIngrediente>";
			echo "<select id=s$nrIngrediente class='sIngredientes' name='ingred[]'>";
			//pode dar problema de performance pq está hittando mto o banco
			for($i = 0;$i<$nrIngredienteBanco;$i++){
				echo "<option class=form-control value=".$ingredientesList[$i][0]." ".($rowPizzaIngrediente['id_ingrediente'] == $ingredientesList[$i][0] ? "selected" : "").">".$ingredientesList[$i][1]."</option>";
			}
			echo "</select>";
			if($nrIngrediente != 1){
			echo "<p class=btnRemoveIng id=sIng$nrIngrediente data-id=$nrIngrediente>×</p>";
			}
			echo "<input type='number' placeholder='Quantidade' value='".$rowPizzaIngrediente['quantidade']."' name='quantidadeIng[]' min='1'></input>";
			
			echo "</div>";
			$nrIngrediente++;
		}
		}else{
		echo "<div class=ingrediente id=ing$nrIngrediente>";
			echo "<select id=s$nrIngrediente class='sIngredientes' name='ingred[]'>";
			//pode dar problema de performance pq está hittando mto o banco
			for($i = 0;$i<$nrIngredienteBanco;$i++){
				echo "<option class=form-control value=".$ingredientesList[$i][0].">".$ingredientesList[$i][1]."</option>";
			}
			echo "</select>";
			echo "<input type='number' placeholder='Quantidade' value='1' name='quantidadeIng[]' min='1'></input>";
			
			echo "</div>";
		}
		echo "</div>";
		//colocar for
		
		
		
		
		
		if($titulo == 'ALTERANDO'){
			echo "
			<br><br><br>
			<img src='images/pizzas/$foto' class='image-squad'>";
		}
		
		echo "
		<br>
		<input type=file name='foto' value='$foto' class='pload top'>
		<br><br>
		<button class='btn btn-primary btn-lg btn-block' type=submit>Aplicar</button><br><br><center>________________________________</center><br><br></div>
		</form>
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
