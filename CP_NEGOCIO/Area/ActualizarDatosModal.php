<?php
    require_once '../../CP_DATOS/conexion.php';
    $cx = Conectar();
    $ide = $_POST['ide'];
    $query = "CALL P_A_MostrarAreaID($ide)";
    $exe = mysqli_query($cx,$query);
    $array;
    while($r = mysqli_fetch_array($exe)){
        $array = array("IdArea"=>$r['IdArea'],"NomArea"=>$r['Nombre_Area']);
    }
    echo json_encode($array);
?>