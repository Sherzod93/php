<?php


include"config.php";

$name = @$_POST['name'];
$email = @$_POST['email'];
$id = @$_POST['id'];

if($_POST['type']=='update'){
    $sql = "UPDATE users SET  name = '{$name}', email = '{$email}' WHERE id = '{$id}'";
}

if($_POST['type']=='insert'){
    $sql = "INSERT INTO users (name, email) VALUES ('".$name."' ,'".$email."' ) ";
}
if($_POST['type']=='delete'){
    $sql = "DELETE FROM users WHERE id='{$id}'";
}

$insert = $connect->query($sql);

header('Location: index.php');