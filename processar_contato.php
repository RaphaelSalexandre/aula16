<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];

  echo "<h1>Mensagem de Contato Recebida</h1>";
  echo "<p>Nome: $nome</p>";
  echo "<p>Mensagem: $mensagem</p>";
} else {
 
  header("Location: contato.html");
  exit;
}
?>
