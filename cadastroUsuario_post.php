<?php 
	//conecta no banco
	include("conectar.php");
	//inicia sessão pra validar segurança
	session_start();
	if(!(isset($_SESSION['id']))){
		//header("location:login_form.php");
		exit();
	}
	//pega informações do post
	$id = ($_POST['id']);
	$usuario = $_POST['usuario'];
	$nome_completo = $_POST['nome_completo'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$sexo = $_POST['sexo'];
	$cep = $_POST['cep'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$tipo = (isset($_POST['tipo']) ? $_POST['tipo'] : "NORMAL");
	$foto = $_FILES['foto'];
	
	//gera a query pra gravar no banco (sem imagem)
	if($id == ""){
		//Teste para ver se o nome de usuário já está sendo usado.
		$query="SELECT * FROM cliente WHERE usuario='$usuario'";
		$rsult=mysqli_query($link, $query);     
		$count=mysqli_num_rows ($rsult); 
		//Se já existir uma linha com esse nome de usuário retornará para o index.php
		if($count>=1){
			//header("location:index.php"); 
			//echo "Nome de usuário já usado.";
		//Senão irá inserir um novo usuário	
		}else if($count<=0){
			$query = "insert into cliente(usuario,nome_completo,email,senha,sexo,cep,cpf,telefone,tipo) values('$usuario','$nome_completo','$email','$senha','$sexo','$cep','$cpf','$telefone','NORMAL')";
		}
	}else{
		$query="SELECT * FROM cliente WHERE usuario='$usuario'";
		$rsult=mysqli_query($link, $query);     
		$count=mysqli_num_rows ($rsult); 
		//Se já existir uma linha com esse nome de usuário retornará para o index.php
		if($count>=1){
			//header("location:index.php"); 
			//echo "Nome de usuário já usado.";
		//Senão irá inserir um novo usuário	
		}else if($count<=0){
			$query = "update cliente set usuario='$usuario',nome_completo='$nome_completo',email='$email',senha='$senha',sexo='$sexo',cep='$cep',cpf='$cpf',telefone='$telefone',tipo='$tipo' where id=$id";
		
		}
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
			mysqli_query($link, $query);
			//pega o ultimo id inserido (caso necessário)
			$id = ($id != "" ? $id : mysqli_insert_id());
			//concatena id do usuario no nome da imagem + extensão
			$nome_imagem = $id." - usuario." . $ext[1];
			$nome_imagem_delete = $id." - usuario." . $ext[1];
			//query pra gravar a imagem
			$query = "update cliente set foto='$nome_imagem' where id=$id";
			//grava a imagem no banco
			mysqli_query($link, $query);
			//especificação do caminho da imagem
			$caminho_imagem = "images/usuario/" . $nome_imagem;
			$caminho_imagem_delete = "images/usuario/" . $nome_imagem_delete;
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
		mysqli_query($link, $query);
	}
	//header("location:crud_clientes.php");
	exit();
?>