<?php

session_start();

if(isset($_POST['zatwierdz'])) {
    $_SESSION['nazwisko'] = $_POST['nazwisko'];
    header('location:/Praca%20domowa%202/');
}
?>