<?php 
//conexão com banco

$login = 'root';
$pass = '';
$serve = '127.0.0.1';
$bd = 'estoque';

$conect = mysqli_connect("127.0.0.1", "root", "", "estoque");
// require_once('connect_db.php');fim da conexão 
?>

<table border="1">
	<tr>
		<td>produto</td>
		<td>fornecedor</td>
		<td>marca</td>
		<td>modelo</td>
		<td>nº serie</td>
		<td>local</td>
	</tr>


						<?php 
						
						$consultardados = "SELECT * FROM usando";
						$con = mysqli_query($conect, $consultardados);

						while ($mostrar = mysqli_fetch_array($con)) {
						?><!--começo do while-->
							<tr>
								<td>	<?php echo $mostrar ['produto']; ?>		</td>
								<td>	<?php echo $mostrar ['fornecedo']; ?>	</td>
								<td>	<?php echo $mostrar ['marca']; ?>		</td>
								<td>	<?php echo $mostrar ['modelo']; ?>		</td>
								<td>	<?php echo $mostrar ['nSerie']; ?>		</td>
								<td>	<?php echo $mostrar['localidade']; ?> 	</td>
							<tr>
						<?php 
						}; //fim do while
						?>
						</table>


<form>
    <input type="button" value="Voltar" onClick="history.go(-1)">
</form>
