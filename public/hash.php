<?php
$password = 'adminbukupinjam';
$hash = password_hash($password, PASSWORD_DEFAULT);

echo "Password: $password<br>";
echo "Hash: $hash";
?>
