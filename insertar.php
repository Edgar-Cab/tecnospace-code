<?php
require 'config.php';

$nombre = $_POST['name'];
$apellido = $_POST['surname'];
$correo = $_POST['email'];
$telefono = $_POST['telefono'];
$servicio = $_POST['Servicio_id'];
$obser = $_POST['indicaciones'];
$mensaje = "*Hola, TecnoSpace*
me interesa contratar sus servicos en ".$servicio.
" soy ".$nombre.' '.$apellido." mi correo es ".$correo.".   Indicaciones: ".$obser;
$url= "https://api.whatsapp.com/send?phone=529971652862&text=".urlencode($mensaje);
if(isset($_POST['nuevo'])){
    
    $ins = $con->query("INSERT INTO solicitudes(nombrePersona,apellidoP,correo,telefono,servicio,indicaciones, mensaje) VALUES ('$nombre','$apellido','$correo','$telefono','$servicio','$obser', '$mensaje')");
    
    if(!$ins){
            die(json_encode($con->error));
    }
    

if( $ins){
    header("Location: ".($url));//die(urlencode($url));
    /*echo '<script langiaje="javascript">'; 
    echo 'alert("Registrado exitosamente");';
    echo 'window.location="url";';
    echo '</script>';*/
}else{
    echo '<script langiaje="javascript">'; 
    echo 'alert("Error al insertar");';
    echo 'window.location="index.php";';
    echo '</script>';
}

}

?>