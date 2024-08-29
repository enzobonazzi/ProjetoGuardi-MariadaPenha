<?php
// Configuração do banco de dados
$host = 'localhost';
$dbname = 'cadastro_usuarios';
$username = 'root'; // Geralmente o usuário padrão é 'root'
$password = ''; // Deixe vazio se não houver senha

try {
    // Conexão com o banco de dados
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Preparar a inserção dos dados
    $stmt = $conn->prepare("INSERT INTO usuarios (nome, idade, telefone) VALUES (:nome, :idade, :telefone)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':idade', $idade);
    $stmt->bindParam(':telefone', $telefone);

    // Captura os dados do formulário
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $telefone = $_POST['telefone'];

    // Executa a inserção
    $stmt->execute();

    echo "Cadastro realizado com sucesso!";
} catch(PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

// Fecha a conexão
$conn = null;
?>
