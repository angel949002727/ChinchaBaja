<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="Framework/MDB/css/bootstrap.min.css">
    <link rel="stylesheet" href="Framework/MDB/css/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    
</head>
<body>
    
    <form id="formulario">
        
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="md-form">
                        <i class="fab fa-battle-net prefix"></i>
                        <input type="text" class="form-control" id="area" name="area" required>
                        <label for="area">Area</label>   
                    </div>
                    <button class="btn btn-block btn-success" id="btnAdd" type="button">AGREGAR</button>
                </div>
            </div>
        </div>
    </form>
    
    <br>
    
    <div id="tablax" class="container">
        
    </div>
    
    

    <div class="modal fade mdactualizar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="container p-3">
                <br>
              <h3>ACTUALIZAR AREA</h3>
              <form id="formactualizar">
                  <input type="text" name="idac" id="idac" hidden>
                  <div class="md-form">
                      <input type="text" name="nmarea" id="nmarea" class="form-control">                    
                  </div>
                  <button type="button" id="btnactualizar" class="btn btn-warning mb-3">ACTUALIZAR</button>
              </form>
          </div>
        </div>
      </div>
    </div>

    
    <script type="text/javascript" src="Framework/MDB/js/jquery.min.js"></script>
    <script type="text/javascript" src="Framework/MDB/js/popper.min.js"></script>
    <script type="text/javascript" src="Framework/MDB/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Framework/MDB/js/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    
    <script type="text/javascript">
        $("document").ready(function(){
            $("#tablax").load("../CP_NEGOCIO/Area/Mostrar.php")
        })
    </script>
    
    <script type="text/javascript">
        $("#btnAdd").on("click",function(){
           var x = $("#formulario").serialize();
           
           $.ajax({
              type:"post",
              data:x,
              url:"../CP_NEGOCIO/Area/Insertar.php",
              success:function(a){
                  if(a>0){
                      swal.fire({
                          icon:'success',
                          title:'Mensaje',
                          text:'REGISTRADO CON EXITO',
                          timer:1300
                       });
                       $("#tablax").load("../CP_NEGOCIO/Area/Mostrar.php");
                       $("#formulario")[0].reset();
                  }else{
                      swal.fire({
                          icon:'error',
                          title:'Mensaje',
                          text:'NO REGISTRADO - REVISE SUS DATOS',
                          timer:1000
                       });
                  }
              }
           }); 
        });
    </script>
    
    <script type="text/javascript">
        function eliminar(a){
            alertify.confirm("Eliminar Area","¿DESEA ELIMINAR EL AREA SELECCIONADO?",function(){
                $.ajax({
                    type:"post",
                    data:"area="+a,
                    url:"../CP_NEGOCIO/Area/Eliminar.php",
                    success:function(x){
                        if(x>0){
                            swal.fire({
                               icon:"success",
                                title:"mensaje",
                                text:"Area eliminada",
                                timer:1000
                            });
                            $("#tablax").load("../CP_NEGOCIO/Area/Mostrar.php");
                        }else{
                            swal.fire({
                               icon:"error",
                                title:"mensaje",
                                text:"Area no eliminada",
                                timer:1000
                            });
                        }
                    }
                });
            },function(){})
        }
    </script>
    
    <script type="text/javascript">
        function MostrarActualizar(a){
            $.ajax({
               type:"post",
                data:"ide="+a,
                url:"../CP_NEGOCIO/Area/ActualizarDatosModal.php",
                success:function(x){
                    var db = jQuery.parseJSON(x);
                    $("#idac").val(db['IdArea']);
                    $("#nmarea").val(db['NomArea']);
                }
            });
        } 
    </script>
    
    <script type="text/javascript">
        $("#btnactualizar").on("click",function(){
            var frmac = $("#formactualizar").serialize();
            $.ajax({
                type:"post",
                data:frmac,
                url:"../CP_NEGOCIO/Area/ActualizarArea.php",
                success:function(x){
                    if(x>0){
                        swal.fire({
                            title:"Mensaje",
                            icon:"success",
                            text:"Area Actualizada",
                            timer:500
                        }); 
                        $("#tablax").load("../CP_NEGOCIO/Area/Mostrar.php");
                    }else{
                        swal.fire({
                            title:"Mensaje",
                            icon:"error",
                            text:"Area no Actualizada",
                            timer:1000
                        });
                    }                  
                }
            });
        })
    </script>
    
</body>
</html>