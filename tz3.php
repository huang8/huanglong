<?php
$dsn = 'mysql:host=localhost;dbname=fkcp';
$pdo = new PDO($dsn,'root','');
$sql = 'select * from fk_goods limit 10';
$stmt = $pdo->query($sql);
$list = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($list);
sssssssssssssssssssssssssssss;
nnnnnnnnnnnn;