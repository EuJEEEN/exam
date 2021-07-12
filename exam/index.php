<?php

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $val_email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (filter_var($val_email, FILTER_VALIDATE_EMAIL)) {
        echo "E-mail адрес <font color=green><b>" . $val_email . "</b></font> указан верно<br>\n";
    } else {
        $email = '';
        echo "E-mail адрес <font color=red><b>" . $val_email . "</b></font> указан неверно<br>\n";
    }
}


?>


 
