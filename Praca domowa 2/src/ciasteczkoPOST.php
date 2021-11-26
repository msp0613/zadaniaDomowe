<?php

if(isset($_POST['zatwierdz'])) {
    $cookie_value=$_POST['imie'];
    setcookie('imie',$cookie_value,time() + 86400 , '/');
    header('location:/Praca%20domowa%202/');
}
?>