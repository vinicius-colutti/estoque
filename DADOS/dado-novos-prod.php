<?php 

/*conexão*/
				
				$conectBanco = mysqli_connect("127.0.0.1", "root", "", "estoque");

/*fim da conexão*/
if(isset($_POST['enviar-dados'])){
	$produto = $_POST['produto'];
	$fornecedor = $_POST['fornecedor'];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$nserie = $_POST['serie_1'];
	$data = $_POST['data'];
	$valor = $_POST['valor'];
	$quantidade = $_POST['qtd'];
	$local = $_POST['local'];


}//FINAL DO ISSET


$inserirdados = mysqli_query($conectBanco, "INSERT INTO compraProd (produto, fornecedo, marca, modelo, nSerie, dataCompra, valor, quantidade, localidade) VALUES ('$produto', '$fornecedor', '$marca', '$modelo', '$nserie', '$data', '$valor', $quantidade, '$local')") or die (mysqli_error($conectBanco));



echo "Produto cadastrado <br>";


?>


<form>
<input type="button" value="Voltar" onClick="history.go(-1)">
<!--<input type="button" value="Avançar" onCLick="history.forward()"> -->
<!--<input type="button" value="Atualizar" onClick="history.go(0)">-->
</form>
