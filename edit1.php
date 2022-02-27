<?php
include 'db.php';
$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['contact'];

$sql = "UPDATE names SET name = '$name', phone = '$phone' WHERE id = $id";
$result = mysqli_query($conn, $sql);
if($result){
    header('Location:index.php');
}


?>