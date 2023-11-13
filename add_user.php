<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');

$sql="insert into `users`(`acc`,`pw`,`$agename`,`email`,address`)
                   value('{$_POST['acc']}','{$_POST['pw']}','{$_POST['name']}','
                   {$_POST['email']}','{$_POST['address']}')";
$pdo->exec($sql);                   
?>