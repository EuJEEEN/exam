<?php 
include "connect.php";

if (isset($_POST['action'])) {
    if ($_POST['action'] === 'create') {
        addComm();
    }
}

 function addComm() {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $message = $_POST['message'];
    $sql =  "INSERT INTO comments SET date_time = NOW(), email = '$email', name = '$name', surname = '$surname', message = '$message'";
    $result = mysqli_query(connectDb(), $sql);
    if ($result == false) {
        echo ("Произошла ошибка при выполнении запроса");
    } 
    return true;
 }
?>