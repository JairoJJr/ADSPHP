<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $nome = $_POST["nome"];
                $matricula = $_POST["matricula"];
                $curso = $_POST["curso"];
                $email = $_POST["email"];
                $telefone = $_POST["telefone"];
                $endereco = $_POST["endereço"];
                $cep = $_POST["cep"];
                $cidade = $_POST["cidade"];
                $uf = $_POST["uf"];
                $cursohora = $_POST["CursoHora"];

                if (empty($nome) || empty($matricula) || empty($curso) || empty($email) || empty($telefone) || empty($endereco)){
                    header("Location: falha.php");
                    exit;
                } else {
                    header("Location: sucesso.php");
                    exit;
                }
            } else{
                header("Location: obrigado.php");
                exit;
            }
        ?>
    </main>
    
</body>
</html>