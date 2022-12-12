<?php
require_once './connect.php';
session_start();


$id = $_POST['id'];
$quantity = $_POST['quantity'];
$_SESSION['id'] = $id;

echo $_SESSION['id'];

$quantity -= 1;

/* 
echo $quantity;
print_r($_POST); */



mysqli_query($connect, "UPDATE `tconcert` SET `quantity` = '$quantity' WHERE `tconcert`.`id` = '$id' ");


header('Location: ../ticket.php');

/* UPDATE tconcert SET quantity = '10' WHERE tconcert.id = '3' */


/* INSERT INTO `tconcert`(`id`, `name`, `genre`, `quantity`, `description`, `price`) VALUES (null,'Miagi','Rap','2000','Zbs','25');
INSERT INTO `tconcert`(`id`, `name`, `genre`, `quantity`, `description`, `price`) VALUES (null,'Morgenshtern','Rap','200','Klass','250'); */