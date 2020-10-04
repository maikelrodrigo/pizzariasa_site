<?php 
	//conecta no banco
	include("conectar.php");
	//inicia sessão pra validar segurança
	session_start();	
	//valida segurança
	if(isset($_SESSION)){
		//valida se é admin logado ou o id do usuario é válido
		if(!($_SESSION['tipo'] == "ADMIN" || $_SESSION['id'] == $_POST['id'])){
			header("location:index.php");
			echo $_SESSION['id'];
			exit();
		}
	}
	//pega informações do post
	$id = (isset($_POST['id']) ? $_POST['id'] : "");
	$nome = $_POST['nome'];
	$tipo = $_POST['tipo'];
	$valor = $_POST['valor'];
	$tamanho = $_POST['tamanho'];
	$foto = $_FILES['foto'];
	$ingred = $_POST['ingred'];
	$qtdIng = $_POST['quantidadeIng'];

	
	//gera a query pra gravar no banco (sem imagem)
	if($id == ""){
		$query = "insert into pizza(nome,tipo,valor,tamanho) values('$nome','$tipo','$valor','$tamanho')";
		}else{
		$query = "update pizza set nome='$nome',tipo='$tipo',valor='$valor',tamanho='$tamanho' where id=$id";
	}
	//se tiver imagem 
	if (!empty($foto["name"])) {
		//valida tipo da imagem
		if( !preg_match( '/^image\/(jpeg|jpg|png|gif|bmp)$/' , $foto[ 'type' ] ) ){
			echo "IMAGEM INVÁLIDA";
			}else{
			//tira a extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
			//grava no banco (sem imagem)
			mysql_query($query);
			echo $query . "<br>";
			//pega o ultimo id inserido (caso necessário)
			$id = ($id != "" ? $id : mysql_insert_id());
			//concatena id do usuario no nome da imagem + extensão
			$nome_imagem = $id." - pizza." . $ext[1];
			$nome_imagem_delete = $id." - pizza.*";
			//query pra gravar a imagem
			$query = "update pizza set foto='$nome_imagem' where id=$id";
			//grava a imagem no banco
			mysql_query($query);
			echo $query . "<br>";
			//especificação do caminho da imagem
			$caminho_imagem = "images/pizzas/" . $nome_imagem;
			$caminho_imagem_delete = "images/pizzas/" . $nome_imagem_delete;
			//valida se já existe imagem
			if (file_exists($nome_imagem_delete)) {
				//deleta a imagem
				unlink(glob($nome_imagem_delete));
			}
			//move nova imagem para o caminho
			move_uploaded_file($foto["tmp_name"], $caminho_imagem);
		}
		//else quando n foi enviado imagem
		}else{
		//grava no banco o insert ou update lá de cima
		mysql_query($query);
		echo $query;
	}
	//:3

	
	for($i=0;$i< count($ingred);$i++){
		$result = mysql_query("SELECT * FROM pizza_ingrediente WHERE id='".$_POST['id']."'");
		echo $result;
		if(mysql_num_rows($result) < 1) {
			$sqlIng = "insert into pizza_ingrediente(id_pizza,id_ingrediente,quantidade) values($i,$ingred[$i],$qtdIng[$i])";
			echo "<br>1".$sqlIng."<br>";
		} else {
			$sqlIng = "update pizza_ingrediente set id_pizza='$id', id_ingrediente='$ingred[$i]', quantidade='$qtdIng[$i]' where id=$i";
			echo "<br>2".$sqlIng."<br>";
		}
	}
	mysql_query($sqlIng);
	echo "<br>".$sqlIng."<br>";
	
	//tchau :3
	//header("location:crud_pizzas.php");
	exit();
?>