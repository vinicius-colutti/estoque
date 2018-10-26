<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Estoque consertado</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
   <?php
/*conexão*/
                
                $conectBanco = mysqli_connect("127.0.0.1", "root", "", "estoque");

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
                            <td>OFICINA</td>
                            <TD>MARCA</TD>
                            <td>MODELO</td>
                            <td>Nº DE SERIE</td>
                            <td>DATA COMPRA</td>
                            <td>VALOR</td>
                            <td>QUANTIDADE</td>
                            <td>LOCAL</td>

                        </tr>
                        <?php

                        $consulta = "SELECT * FROM consertoprod";
                        $con = mysqli_query($conectBanco, $consulta);
                        while($mostrar = mysqli_fetch_array($con)){
                        ?><!-- fim do da tag de inicio do while-->

                        <tr>
                            <td><?php echo $mostrar ['id'] ?></td>
                            <td><?php echo $mostrar ['produto'] ?></td>
                            <td><?php echo $mostrar ['oficina'] ?></td>
                            <td><?php echo $mostrar ['marca'] ?></td>
                            <td><?php echo $mostrar ['modelo'] ?></td>
                            <td><?php echo $mostrar ['nSerie'] ?></td>
                            <td><?php echo $mostrar ['dataConserto'] ?></td>
                            <td><?php echo $mostrar ['valor'] ?></td>
                            <td><?php echo $mostrar ['quantidade'] ?></td>
                            <td><?php echo $mostrar ['localidade'] ?></td>
                        </tr>
                        <?php
                        }
                        ?><!-- fim do da tag de fim do while-->
<form>
    <input type="button" value="Voltar" onClick="history.go(-1)">
<!--<input type="button" value="Avançar" onCLick="history.forward()"> -->
<!--<input type="button" value="Atualizar" onClick="history.go(0)">-->
</form>
</body>
</html>
