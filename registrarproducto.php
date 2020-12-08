<?php

include("Basedatos.php");

if(isset($_POST["boton"])){

    //1. Recibir los datos
    $id=$_POST["codigoProducto"];
    $descripcion=$_POST["descripcion"];
    $nombre=$_POST["nombreProducto"];
    $precio=$_POST["precioProducto"];
    $marca=$_POST["marcaProducto"];
    $foto=$_POST["foto"];
    
    //2. crear un objeto(copia) de la clase BaseDatos()
    $operacionBD= new BaseDatos();
   

    //3.Necesito crear una consulta SQL para insertar datos
    $consultaSQL="INSERT INTO productos(id, nombre, precio, marca, descripcion,foto) VALUES ('$id','$nombre','$precio','$marca','$descripcion','$foto')";
   
    //4. LLamar al metodo agregarDatos() de la clase BaseDatos
    $operacionBD->agregarDatos($consultaSQL);



    

}




?>