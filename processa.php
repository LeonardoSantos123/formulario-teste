<?php
// Obtendo os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];

// Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = ""; // Se você configurou a senha, coloque-a aqui
$dbname = "banco_local";
$port = 3307; // Nova porta

// Cria a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Inserir os dados na tabela de usuários
$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

// Verifica se a consulta foi bem-sucedida
if ($conn->query($sql) === TRUE) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar o usuário: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>