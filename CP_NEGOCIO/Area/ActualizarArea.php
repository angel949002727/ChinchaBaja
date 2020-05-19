<?php
    require_once '../../CP_DATOS/conexion.php';
    $cx = Conectar();
    $id = $_POST['idac'];
    $nom_area = $_POST['nmarea'];
    $query = "CALL P_A_ActualizarArea($id,'$nom_area')";
    $exe = mysqli_query($cx,$query);
    $a = mysqli_affected_rows($cx);
    echo $a;
?>