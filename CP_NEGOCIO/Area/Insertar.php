<?php
    require_once '../../CP_DATOS/conexion.php';
    $cx = Conectar();
    $nom = $_POST['area'];
    if(empty($nom)){
        echo 0;
    }else{
        $query = "CALL P_A_InsertarArea('$nom')";
        $eje = mysqli_query($cx,$query);
        $res = mysqli_affected_rows($cx);
        echo $res;
    }
    
?>