<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--Estilos de Bootstrap 4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Estilos Css-->
    <link rel="stylesheet" href="estilos/estilos.css">
    <!--Estilos Iconos-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    
</head>
<body>
   
   <div class="modal-dialog text-center">
       <div class="col-sm-8 main-section">
          
           <div class="modal-content">
              
               <div class="col-12 user-img">
                   <img src="imagenes/logom.png" alt="">
               </div>
               
               <div class="container-form pb-3">
                <div class="header">
                    <div class="menu">
                        <a href="login.php"><li class="module-login active">Login</li></a>
                        <a href="register.php"><li class="module-register">Register</li></a>
                    </div>
                </div>
               </div>
               
               <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="col-12 form" method="post">
                   <!--CONTENEDOR INPUT USUARIO-->
                   <div class="form-group" id="user-group">
                       <input type="text" class="form-control" name="usuario" placeholder="Nombre Usuario">
                   </div>
                   <!--FIN-->
                   
                   <!--CONTENEDOR INPUT CONTRASEÑA-->
                   <div class="form-group" id="contrasena-group">
                       <input type="password" class="form-control" name="clave" placeholder="Contraseña">
                   </div>
                   <!--FIN-->
                   
                   <!--CODIGO DE ERROR EL USUARIO NO EXISTE PHP PARA REGISTRO-->
                   <?php if(!empty($error)): ?>
                   <div class="mensaje">
                       <?php echo $error; ?>
                   </div>
                   <?php endif; ?>
                   <!--FIN-->
                   
                   <!--CONTENEDOR DE BOTON-->
                   <button class="btn text-white"> <i class="fas fa-sign-in-alt"></i> INGRESAR</button>
                   <!--fin-->
                   
                   <!--CONTENEDOR OLVIDE CONTRASEÑA-->
                   <div class="col-12 forgot pb-3">
                       <a href="#">Olvide Contraseña</a>
                   </div>
               </form>
               
           </div>
       </div>
   </div>
   
   
    <!--Codigo Script Bootstrap 4-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--Codigo Jquery Iconos-->
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</body>
</html>