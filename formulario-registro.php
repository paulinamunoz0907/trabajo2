<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">

</head>
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
                  <a class="nav-link" href="index.php">Página principal </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="listado.php">Productos </a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="formulario-registro.php">Registro</a>
                </li>
    </header>

    <main clas="body">
    

        <div class="container">

        <form class="mt-5" method="POST" action="registrarproducto.php">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre" name="nombreProducto">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Precio" name="precioProducto">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                        <input type="text" class="form-control" placeholder="Marca" name="marcaProducto">
                </div>
            </div>
            
            <div class="row mt-3">
                <div class="col">
                        <input type="text" class="form-control" placeholder="Codigo" name="codigoProducto">
                </div>
            </div>

            <div class="row mt-3">
                    <div class="col">
                        <textarea class="form-control" rows="3" name="descripcion"></textarea>
                   </div>
            </div>

            <div class="row mt-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="FOTO URL" name="foto">
                   </div>
            </div>


            <button type="submit" class="btn btn-info btn-block mt-3" name="boton">registrar</button>
        </form>
        
        </div>
    
    </main>
        <br><br>
    <footer>
    <footer class="footer">
    
    <P> Manuela Muñoz Zuluaga
        Paulina Muñoz Zuluaga
    </P>
    <p>Todos los derechos reservados</p>
                <p>2020</p>
    </footer>
    </footer>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>