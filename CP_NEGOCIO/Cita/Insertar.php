<?php
    require_once '../../CP_DATOS/conexion.php';
    $cx = Conectar();
    $Nombre = $_POST['nombre'];
    $Ap_Pat = $_POST['ap_pat'];
    $Ap_Mat = $_POST['ap_mat'];
    $Direccion = $_POST['direccion'];
    $Celular = $_POST['telefono'];
    $Sexo = $_POST['genero'];
    $Correo = $_POST['correo'];
    $Fecha = $_POST['fecha'];
    $Hora = $_POST['hora'];
    $Asunto = $_POST['motivo'];
    $Area = $_POST['areaop'];
    if(empty($Nombre) || empty($Ap_Pat) || empty($Ap_Mat) || empty($Direccion) || empty($Sexo) || empty($Fecha) || empty($Hora) || empty($Asunto) || empty($Area)){
        echo 0;
    }else{
        $query = "CALL P_A_InsertarCita('$Nombre','$Ap_Pat','$Ap_Mat','$Direccion','$Celular','$Sexo','$Correo','$Fecha','$Hora','$Asunto','$Area')";
        $exe = mysqli_query($cx,$query);
        $res = mysqli_affected_rows($cx);
        echo $res;
    }
    
?>