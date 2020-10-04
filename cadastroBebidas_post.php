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
	$sabor = $_POST['sabor'];
	$valor = $_POST['valor'];
	$litros = $_POST['litros'];
	$foto = $_FILES['foto'];
	
	//gera a query pra gravar no banco (sem imagem)
	if($id == ""){
		$query = "insert into bebidas(nome,tipo,sabor,valor,litros) values('$nome','$tipo','$sabor','$valor','$litros')";
		}else{
		$query = "update bebidas set nome='$nome',tipo='$tipo',sabor='$sabor',valor='$valor',litros='$litros' where id=$id";
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
			//pega o ultimo id inserido (caso necessário)
			$id = ($id != "" ? $id : mysql_insert_id());
			//concatena id do usuario no nome da imagem + extensão
			$nome_imagem = $id." - bebida." . $ext[1];
			$nome_imagem_delete = $id." - bebida.*";
			//query pra gravar a imagem
			$query = "update bebidas set foto='$nome_imagem' where id=$id";
			//grava a imagem no banco
			mysql_query($query);
			//especificação do caminho da imagem
			$caminho_imagem = "images/bebidas/" . $nome_imagem;
			$caminho_imagem_delete = "images/bebidas/" . $nome_imagem_delete;
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
	}
	//tchau :3
	header("location:crud_bebidas.php");
	exit();
?>