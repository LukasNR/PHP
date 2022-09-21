 <?php
  $nome = $_POST['nome'];
  $mail = $_POST['email'];
  $pass = $_POST['pass'];

  
  echo 'Seu nome é: ' . $nome . '<br>';
  echo 'Seu E-mail é: ' . $mail . '<br>';
  echo 'Seu Senha é: '  . md5($pass) . '<br>';





 ?>