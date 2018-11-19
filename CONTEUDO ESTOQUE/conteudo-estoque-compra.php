<?php
/*conexão*/
                
                $conectBanco = mysqli_connect("127.0.0.1", "root", "", "estoque");
/*COMANDO DO INSERT DO SQL */ $insert = "INSERT INTO usando (id,produto, fornecedo, marca, modelo, nSerie, localidade) select id, produto, fornecedo, marca, modelo, nSerie,localidade from compraprod";
$comandoInsert = mysqli_query($conectBanco, $insert);
/*fim da conexão*/

?>

<!DOCTYPE html>
<html>
                <head>
                    <meta charset="utf-8" />
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <title>Estoque de compra</title>
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
                    <script src="main.js"></script>
                </head>

<body>
                    <table border="1">
                        <tr>
                            <td>ID</td> 
                            <td>PRODUTO</td>
                            <td>FORNECEDOR</td>
                            <TD>MARCA</TD>
                            <td>MODELO</td>
                            <td>Nº DE SERIE</td>
                            <td>DATA COMPRA</td>
                            <td>VALOR</td>
                            <td>QUANTIDADE</td>
                            <td>LOCAL</td> <br> 
                        </tr>
                        <?php

                        $consulta = "SELECT * FROM compraprod";
                        $con = mysqli_query($conectBanco, $consulta);
                        while($mostrar = mysqli_fetch_array($con)){
                        ?><!-- fim do da tag de inicio do while-->
                        <form action="EQUIPAMENTOS EM USO/em-uso.php" method="POST">
                        <tr>
                            <td>    <?php echo $mostrar ['id'] ?>               </td> 
                            <td>    <?php echo $mostrar ['produto'] ?>          </td> 
                            <td>    <?php echo $mostrar ['fornecedo'] ?>        </td>
                            <td>    <?php echo $mostrar ['marca'] ?>            </td>
                            <td>    <?php echo $mostrar ['modelo'] ?>           </td>
                            <td>    <?php echo $mostrar ['nSerie'] ?>           </td>
                            <td>    <?php echo $mostrar ['dataCompra'] ?>       </td>
                            <td>    <?php echo $mostrar ['valor'] ?>            </td>          
                            <td>    <?php echo $mostrar ['quantidade'] ?>       </td>
                            <td>    <?php echo $mostrar ['localidade'] ?>       </td>
                             <?php
                             //<input type="submit" name="usa-prod" >  <?php $comandoInsert = mysqli_query($conectBanco, $insert);?> $con++;
                        }?><!-- fim do da tag de fim do while-->

                            </tr>
                            </form>
                       
                        </table> 
<form>
    <input type="button" value="Voltar" onClick="history.go(-1)">
</form>
</body>
</html>
