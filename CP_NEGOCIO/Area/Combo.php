<?php
    require_once '../../CP_DATOS/conexion.php';
    $cx = Conectar();
    $query = "CALL P_A_MostrarArea";
    $ejec = mysqli_query($cx,$query);
    
?>
<select name="areaop" id="areaop" class="form-control wide text-black mb-3" style="cursor:pointer;">
   <option value="" selected disabled>Elija área para cita</option>
    <?php
    while($r = mysqli_fetch_array($ejec)){
    ?>
     <option value="<?php echo $r['IdArea']?>"><?php echo $r['Nombre_Area']?></option>
    <?php
     }
    ?>
</select>