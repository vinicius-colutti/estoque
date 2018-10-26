<?php 

/*conexão*/
				
				$conectBanco = mysqli_connect("127.0.0.1", "root", "", "estoque");

/*fim da conexão*/


if(!$conectBanco){
	die("Falha na conexão: " . mysqli_connect_error());
}
/////////////////////////////////////

if(isset($_POST['enviar-dados'])){

	$produto = $_POST['produto'];
	$oficina = $_POST['oficina'];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$nserie = $_POST['serie_1'];
	$data = $_POST['data'];
	$valor = $_POST['valor'];
	$quantidade = $_POST['qtd'];


}//FINAL DO ISSET


$inserirdados = mysqli_query($conectBanco, "INSERT INTO consertoProd (produto, oficina, marca, modelo, nSerie, dataConserto, valor, quantidade) VALUES ('$produto', '$oficina', '$marca', '$modelo', '$nserie', '$data', '$valor', $quantidade, '$local')") or die (mysqli_error($conectBanco));

ECHO "Produto cadastrado";
?>

<form>
<input type="button" value="Voltar" onClick="history.go(-1)">
<!--<input type="button" value="Avançar" onCLick="history.forward()"> -->
<!--<input type="button" value="Atualizar" onClick="history.go(0)">-->
</form>