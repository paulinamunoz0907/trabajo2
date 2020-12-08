<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">

<body class="body">
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
         <img src="img/logo-dulcería-paimon2.png" widht="30" height="80" class="d-inline-block-align-top" alt="logo1" loading="lazy"> Dulcería Paimon
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Página principal</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="listado.php">Productos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="formulario-registro.php">Registro</a>
                </li>
              </ul>
            </div>
          </nav>
        </header>


    <?php 
        //Consultar datos
        //1. Incluir el archivo BaseDatos
        include("BaseDatos.php");

        //2. Crear una copia o objeto de la BaseDatos
        $operacionBD=new BaseDatos();

        //3. Crear una consulta para BUSCAR en SQL

        $consultaSQL="SELECT * FROM productos WHERE 1";

        //4. Almacenar la respuesta de la consula (ejecutando la consulta)
        $productos=$operacionBD->consultarDatos($consultaSQL);

        
        
    ?>

<main>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/carrusel1.jpg" class="d-block w-100 carusel" alt="imagen1">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel2.jpg" class="d-block w-100 carusel" alt="imagen2">
          </div>
          <div class="carousel-item">
            <img src="img/carrusel3.jpg" class="d-block w-100 carusel" alt="imagen3">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> 
            <br><br>
      <p>
          <h1 class="letra1">¡¡Nuestros productos!!</h1>
          <br><br>
      </p>

</main>
    
    <div class="container">
    
        <div class="row row-cols-1 row-cols-md-3">

            <?php foreach($productos as $producto):?>
 
                    <div class="col mb-4">
                        
                        <div class="card h-100">
                            <img src="<?php echo($producto["foto"]) ?>" class="card-img-top" alt="foto">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo($producto["nombre"])?></h5>
                                <p class="card-text"><?php echo($producto["descripcion"])?></p>
                                <h3 class="card-title">Precio: $<?php echo($producto["precio"]) ?></h3>
                                <h3 class="card-title text-danger">Marca:<?php echo($producto["marca"]) ?></h3>
                
                                <a href="eliminarProductos.php?id=<?php echo($producto["nombreProducto"])?>" class="btn btn-danger">Eliminar</a>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar">
                                   Editar
                                </button>
                            </div>
                        </div>

                        <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edición</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="">

                                        <div class="form-group">
                                            <label>Nombre:</label>
                                            <input type="text" class="form-control">  
                                        </div>

                                        <div class="form-group">
                                            <label>Descripcion:</label>
                                            <textarea class="form-control" rows="3"></textarea>  
                                        </div>

                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    
                                    </form>
                                </div>
                                
                                </div>
                            </div>
                        </div>

                    
                    </div>

            <?php endforeach?>

        </div>

        <br><br>

    <footer class="footer">
    
    <P> Manuela Muñoz Zuluaga
        Paulina Muñoz Zuluaga
    </P>
    <p>Todos los derechos reservados</p>
                <p>2020</p>
    </footer>
   
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>   
</body>
</html>