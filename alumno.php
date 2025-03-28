<?php
//var_dump($_POST);
if(!empty($_POST)) 
{
    if(empty($_POST["name"]))
{
    echo"los datos del nombre son obligatorios <br>" ;
   // header('location:index.php');
 }else

echo"gracias por registrarte:".$_POST["name"]."<br>";
if(empty($_POST["lastname"]))  
    {
        echo"el apellido es obligatorio";
        //header('location.index.php');
    }else
    
        echo"tu apellido es: " . $_POST["lastname"]."<br>";
 if(empty($_POST["ci"])){
    echo"<script>alert('los datos del ci son obligatorio')</script>";
    //header('location.index.php');
}
else
    echo"tu ci es: " . $_POST["ci"]."<br>";
    if(empty($_POST["fecnac"]))  
    {
        echo"<script>alert('la fecha de nacimiento son obligatorio')</script>";
        //header('location.index.php');
    }else
    
        echo"tu naciste en: " . $_POST["fecnac"]."<br>";
        if(empty($_POST["gener"]))  
    {
        echo"<script>alert('el genero es obligatorio')</script>";
        //header('location.index.php');
    }else
    
        echo"tu genero es: " . $_POST["gener"]."<br>";
       
     
}
else

 
{
    echo"error al recibir datos";
}
