<?php
function connectDb(){
    $connect = mysqli_connect("127.0.0.1", "root", "root", "study");
    if ($connect == false) {
        var_dump("Ошибка: Невозможно подключиться к MySQL" . mysqli_connect_error());
        die;
    }
    return $connect;
}
?>