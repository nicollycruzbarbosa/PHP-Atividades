<!-- O programa armazena os usuários em um documento externo com a extensão .txt -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h2>Informe o nome e a senha que deseja cadastrar</h2>
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>

        <button type="submit">Cadastrar</button>
    </form>
    <?php

    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // recebe os números enviados para o formulário
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        // Abre o arquivo usuarios.txt para escrita, adicionando dados
        $arquivo = fopen('usuarios.txt', 'a');

        // Cria uma linha com o nome e a senha separados 
        $linha = $nome . '; ' . $senha . "\n";

        // escreve a linha
        fwrite($arquivo, $linha);

        // fechar
        fclose($arquivo);

        echo "<p>Usuário cadastrado com sucesso!</p>";
    }
    ?>
</body>
</html>
