<?php 
include("conectar.php");

$query = "select * from cliente";

$resultQuery = mysql_query($query);

echo "<a href='cliente_form.php'><button>Novo</button></a>";
echo "<br>";
echo "<br>";

echo "
<table border=1>
<tr>
<td>
ID
</td>
<td>
NOME
</td>
<td colspan=2>
AÇÕES
</td>
</tr>
";

while($result = mysql_fetch_assoc($resultQuery)){
	$resultBanco[1] = $result['id'];
	$resultBanco[2] = utf8_encode($result['nome']);
	
	echo "<tr>";
	echo "<td>";
	echo $resultBanco[1];
	echo "</td>";
	echo "<td>";
	echo $resultBanco[2];
	echo "</td>";
	echo "<td>";
	echo "<a href='cliente_form.php?id=$resultBanco[1]'><button>Editar</button></a>";
	echo "<a href='cliente_delete.php'><button>Excluir</button></a>";
	echo "</td>";
	echo "</tr>";
}


?>