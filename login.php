<?php
session_start();
$acc=$_POST['acc'];
$acc=$_POST['pw'];

$dsn="mtsql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');

$sql="select * from users where where `acc`='$acc' && `pw`='$pw'";
$user=$pdo->query($sql)->fetch();

if($user['acc']==$acc && $user['pw']==$pw){
    $_SESSION['user']=$acc;
    header("location:index.php");
}else{
    header('location:login_form.php?error=帳號密碼錯誤');
}
?>