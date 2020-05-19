<?php
    require_once '../../CP_DATOS/conexion.php';
    $cx = Conectar();
    $query = "CALL P_A_MostrarArea";
    $ejec = mysqli_query($cx,$query);
?>
<body>
    <div class="table-responsive">
        <table class="table table-sm table-hover table-condensed table-bordered" id="tb">
            <thead style="background:RGB(163, 49, 31);color:white;">
                <tr class="text-center">
                    <th>Codigo</th>
                    <th>Nombre de Cargo</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                    while($r = mysqli_fetch_array($ejec)){
                ?>
                <tr>
                    <td style="width:10%"><?php echo $r['IdArea'] ?></td>
                    <td><?php echo $r['Nombre_Area'] ?></td>
                    <td style="width:10%">
                       <div class="text-center">
                           <button type="button" class="btn btn-warning" onclick="MostrarActualizar(<?php echo $r['IdArea'] ?>)" data-toggle="modal" data-target=".mdactualizar"><i class="fas fa-edit"></i></button>
                       </div>
                        
                    </td>
                    <td style="width:10%">
                       <div class="text-center">
                           <button type="button" class="btn btn-danger" onclick="eliminar(<?php echo $r['IdArea'] ?>)" id="btneliminar"><i class="fas fa-trash-alt"></i></button>
                       </div>
                        
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    
    
    <script type="text/javascript"> 
        $("document").ready(function(){
           $("#tb").dataTable({
                ///////////////////////////////////////////////
                "language":{
                    "sProcessing":     "Procesando...",
                                "sLengthMenu":     "Mostrar _MENU_ registros",
                                "sZeroRecords":    "No se encontraron resultados",
                                "sEmptyTable":     "Ningún dato disponible en esta tabla =(",
                                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                                "sInfoPostFix":    "",
                                "sSearch":         "Buscar:",
                                "sUrl":            "",
                                "sInfoThousands":  ",",
                                "sLoadingRecords": "Cargando...",
                                "oPaginate": {
                                    "sFirst":    "Primero",
                                    "sLast":     "Último",
                                    "sNext":     "Siguiente",
                                    "sPrevious": "Anterior"
                                },
                                "oAria": {
                                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                                },
                                "buttons": {
                                    "copy": "Copiar",
                                    "colvis": "Visibilidad"
                                }
                }
                ///////////////////////////////////////////////  
           });
        })
        
    </script>
    
</body>
