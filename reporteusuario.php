<?php
include_once "conexion.php";
$sql="SELECT * FROM USUARIO";
$result=mysqli_query($conn,$sql);
//var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>RÉPORTE DE USUARIO</h1>
    <table border=2>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Correo Electronico</th>
                <th>Telefono</th>
                <th>Idpermiso</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while($row=mysqli_fetch_array($result))
            {
                ?>
                <tr>
                    <td><?=$row['ID'];?></td>
                    <td><?=$row['NOMBRE'];?></td>
                    <td><?=$row['EMAIL'];?></td>
                    <td><?=$row['TELEFONO'];?></td>
                    <td><?=$row['IDPERMISO'];?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>