<?php
include_once "../include/db.php";

// $sql="delete from `usere` where `id`='{$_GET['id']}'";
// $pdo->exec($sql);
$User->del($_GET['id']);

unset($_SESSION['user']);

header("location:../index.php");

?>