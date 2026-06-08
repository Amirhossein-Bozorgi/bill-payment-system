<?php
require"DB.php";

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$userName = $_POST["userName"];
$password = $_POST["password"];
$number = $_POST["number"];
$unit = $_POST["unit"];
$id = $_POST["id"];

$sql = "INSERT INTO `residents`(`first_name`, `last_name`, `username`, `password`, `number`, `unit`, `manager_id`) 
VALUES ('$firstName','$lastName','$userName','$password','$number','$unit','$id')";

$submit = $pdo->prepare($sql);
$submit->execute();
header("location:index.php");
?>