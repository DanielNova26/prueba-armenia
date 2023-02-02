<?php
include "../../clases/Auth.php";

    $titulo = $_POST['titulo'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $Auth = new Auth();
        header("location:../../index.php");
?>