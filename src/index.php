<?php
$pdo = new PDO('mysql:dbname=web-db; host=mysql', 'web-user', 'USERPASSWORD', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo 'MySQL version:' . $row['Value'];

?>