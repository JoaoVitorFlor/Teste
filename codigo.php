<?php

$host = "localhost";
$db   = "devmedia";
$user = "root";
$pass = "root";

$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR);

mysql_select_db($db, $con);

$query = sprintf("SELECT produto, cor, preco FROM produto");

$dados = mysql_query($query, $con) or die(mysql_error());

$linha = mysql_fetch_assoc($dados);

$total = mysql_num_rows($dados);
?>

<html>
	<head>
	<title>Puxando dados da pagina</title>
</head>
<body>
<?php

	if($total > 0) {

		do {
?>
			<p><?=$linha['produto']?> / <?=$linha['cor']?/<?=$linha['preco']></p>
<?php

		}while($linha = mysql_fetch_assoc($dados));

	}
?>
</body>
</html>
<?php
// tira o resultado da busca da memória
mysql_free_result($dados);
?>