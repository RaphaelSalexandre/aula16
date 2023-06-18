<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 


  echo "<h1>Solicitação de Orçamento Recebida</h1>";
 
} else {
  
  header("Location: index.html]");
  exit;
}
?>
