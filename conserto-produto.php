<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Produto de conserto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/cadastro.css" />
    <script src="main.js"></script>
</head>
<body class="corpocadastro">
 
 <form action="DADOS/dados-conserto-prod.php" method="POST">
	Produto <input type="text" name="produto"><br>
	Oficina <input type="text" name="oficina"><br>
	Marca <input type="text" name="marca"><br>
	Modelo <input type="text" name="modelo"><br>
	Nº de serie <input type="text" name="serie_1"><br>
	Data <input type="date" name="data"><br>
	valor <input type="text" name="valor"><br>
	Quantidade <input type="text" name="qtd"><br>
	local <input type="text" name="local">
	<button type="submit" name="enviar-dados">CADASTRAR</button>
	<br>
</form> <!---FIM DO FORMULARIOS-->


	<a href="CONTEUDO ESTOQUE/conteudo-estoque-conserto.php">LISTA DE PRODUTO</a><br><br>
	<a href="index.php"> PAGINA PRINCIPAL</a>
	
</body>
</html>