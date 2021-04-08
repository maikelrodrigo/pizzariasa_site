<?php
include("conectar.php");
if(isset($_GET['id'])){
$query = "select * from cliente where id=".$_GET['id'];

$resultQuery = mysqli_query($link, $query);
while($result = mysqli_fetch_assoc($resultQuery)){
	$resultBanco[1] = $result['id'];
	$resultBanco[2] = utf8_encode($result['nome']);
}
$id = $resultBanco[1];
$nome = utf8_decode($resultBanco[2]);
}else{
$id = "";
$nome = "";
}

echo "
<form method=get action=cliente_post.php>
	id:<input type=text name=id readonly value='$id'><br>
	nome:<input type=text name=nome value='$nome'><br>
	<input type=submit>
</form>
";
?>