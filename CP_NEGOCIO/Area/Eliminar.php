<?php
    require_once '../../CP_DATOS/conexion.php';
    $cx = Conectar();
    $id = $_POST['area'];
    $query = "CALL P_A_EliminarArea($id)";
    $exe = mysqli_query($cx,$query);
    $a = mysqli_affected_rows($cx);
    echo $a;
?>