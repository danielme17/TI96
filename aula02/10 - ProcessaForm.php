<?php
echo '<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Formulário</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            margin: 10px 0;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Dados Recebidos</h1>';
        
        // Verifica se os dados foram enviados via POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Captura e escapa os dados recebidos do formulário
            $nome = isset($_POST["nome_cliente"]) ? htmlspecialchars($_POST["nome_cliente"]) : "Não informado";
            $email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "Não informado";
            $telefone = isset($_POST["telefone"]) ? htmlspecialchars($_POST["telefone"]) : "Não informado";
            $endereco = isset($_POST["endereco"]) ? htmlspecialchars($_POST["endereco"]) : "Não informado";
            $cpf = isset($_POST["cpf"]) ? htmlspecialchars($_POST["cpf"]) : "Não informado";
            
            echo "<p><strong>Nome Completo:</strong> $nome</p>";
            echo "<p><strong>E-mail:</strong> $email</p>";
            echo "<p><strong>Telefone:</strong> $telefone</p>";
            echo "<p><strong>Endereço:</strong> $endereco</p>";
            echo "<p><strong>CPF:</strong> $cpf</p>";
        } else {
            echo "<p>Nenhum dado foi enviado pelo formulário.</p>";
        }

echo '</div>

</body>
</html>';
?>
