<?php 
function atualizarDados($nome, $telefone, $endereco, $email) {
  // Conecte-se ao banco de dados
  $conn = new PDO("mysql:host=localhost;dbname=visãoinclusiva", "root", "");

  // Prepare a instrução SQL
  $stmt = $conn->prepare("UPDATE cadastro_pessoal SET nome = ?, telefone = ?, endereco = ?, email = ? WHERE id = ?");

  // Vincule os parâmetros
  $stmt->bindParam(1, $nome);
  $stmt->bindParam(2, $telefone);
  $stmt->bindParam(3, $cid);
  $stmt->bindParam(4, $endereco);
  $stmt->bindParam(5, $email);

  // Execute a instrução SQL
  $stmt->execute();

  // Feche a conexão com o banco de dados
  $conn = null;
}

?>