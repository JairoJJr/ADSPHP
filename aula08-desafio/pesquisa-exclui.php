<?php 
include_once("conectar.php");
$pesquisa = $_POST['dado'];
$coluna = $_POST['coluna']
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da pesquisa por Cidade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table border="1" style='width:50%'>
        <tr>
            <th>NOME</th>
            <th>MATRÍCULA</th>
            <th>CURSO</th>
            <th>EMAIL</th>
            <th>TELEFONE</th>
            <th>ENDEREÇO</th>
            <th>CEP</th>
            <th>CIDADE</th>
            <th>UF</th>
            <th>CARGA-HORÁRIA</th>
        </tr>
        <form name="exclui" action="excluir.php" method="post">
        <p>Digite o nome que deseja excluir:
        <input type="text" name="nome"/></p>
        <input type="submit" name="botao" value="Enviar"/>
    </form>
        <?php 
        $sql = "SELECT * FROM alunos ";
        $resultado = mysqli_query($strcon , $sql);

        while($registro = mysqli_fetch_array($resultado)){
            $nome = $registro['nome'];
            $matricula = $registro['matricula'];
            $curso = $registro['curso'];
            $email = $registro['email'];
            $telefone = $registro['telefone'];
            $endereco = $registro['endereço'];
            $cep = $registro['cep'];
            $cidade = $registro['cidade'];
            $uf = $registro['uf'];
            $carga = $registro['CursoHora'];
            echo "<tr>";
            echo "<td>" . $nome . "</td>";
            echo "<td>" . $matricula . "</td>";
            echo "<td>" . $curso . "</td>";
            echo "<td>" . $email . "</td>";
            echo "<td>" . $telefone . "</td>";
            echo "<td>" . $endereco . "</td>";
            echo "<td>" . $cep . "</td>";
            echo "<td>" . $cidade . "</td>";
            echo "<td>" . $uf . "</td>";
            echo "<td>" . $carga . "</td>";
            echo "</tr>";
        }
        mysqli_close($strcon);
        echo "</table>"
        ?>

    
</body>
</html>