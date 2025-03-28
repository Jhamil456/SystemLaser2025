<?php 
$servername="localhost"; //servidor
$database="DBsecuritylaser"; //nombre de la base de datos creado
$username="root"; //nombre del usuario de la base de datos
$password=""; //contraseña es vacio en este caso
$port=3307; //puerto
//linea para conectarnos a una base de datos
//usando libreria mysqli
$conn=new mysqli($servername, 
                 $username,
                 $password,
                 $database,
                 $port);
//verificar la conexion
if($conn->connect_error)
{
    die("Error de conexion".$conn->connect_error);
}
else
{
    echo "Conexion exitosa";
}
?>