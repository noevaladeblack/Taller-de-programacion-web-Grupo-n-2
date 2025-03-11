<?php
//validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";
$datab = "prometheus";


//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario
$name = $_POST["name"] ;
$phone = $_POST["phone"] ;
$email = $_POST["email"] ;
$mensaje = $_POST["mensaje"] ;

if(!$connection) {

            echo "No se ha podido conectar con el servidor" . mysql_error();
}else{

    $db = mysqli_select_db($connection,$datab);

    if (!$db){
        echo "No se ha podido encontrar la Tabla";
    }else{
        $instruccion_SQL = "INSERT INTO contacto(Nombre, Fono, Email, Mensaje) 
                        VALUES ('$name', '$phone', '$email', '$mensaje')";

        $resultado = mysqli_query($connection,$instruccion_SQL);

        mysqli_close( $connection );

    }                      
            
}
    
   echo'<a href="index.html"> Volver Atrás</a>';

?>