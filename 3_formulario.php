<!-- USANDO O MÉTODO POST -->
<!-- POST: método HTML padrão, a requisição
é enviada DIRETAMENTE no corpo do HTML -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exemplo de formulário de Cadastro</title>
</head>
<body>
    <!-- Método pode ser POST ou GET -->
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" required><br>

        <button type="submit">Enviar</button>
    </form>

    <!-- PARTE EM PHP -->
    <?php

    // Condição para confirmação dos dados
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        echo "<h2>Dados recebidos:</h2>";
        echo "Nome do usuário: $nome <br>";
        echo "E-mail do usuário: $email <br>";
        echo "Telefone do usuário: $telefone <br>";
    }

    ?>
</body>
</html>