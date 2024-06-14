<?php
    /*Se definen las credenciales para conectarse a la base de datos MySQL*/
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDeDatos="CONTACTO";

    /*devuelve un enlace a la conexión, que se almacena en la variable enlace*/
    $enlace=mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);


?>

<?php
    /*verifica si el formulario ha sido enviado*/
    if(isset($_POST['enviar'])){

        /*se obtienen los valores enviados desde el formulario HTML*/
        $nombre=$_POST['nombre'];
        $email=$_POST['email'];
        $numero_tel=$_POST['numero_tel'];
        $edad=$_POST['edad'];
        $comentarios=$_POST['comentarios'];
        $califica_pagina=$_POST['califica_pagina'];

        /*determina los valores del formulario que serán almacenados en la base de datos*/
        $InsertarDatos="INSERT INTO formu (nombre, email, numero_tel, edad, comentarios, califica página) VALUES ('$nombre', '$email','$numero_tel','$edad','$comentarios','$califica_pagina')";

        /*Esta línea inserta los datos del formulario en la base de datos.*/
        $ejecutarInsertar=mysqli_query($enlace,$InsertarDatos);

        /*esta línea redirige al usuario de nuevo a la misma página después de enviar el formulario*/
        header("Location: {$_SERVER ['REQUEST_URI']}");exit;
        
    }

?>