<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>mi formulario html</h1>
<form action="" method="POST">
    <label for="id">id</label>
    <input type="text" id="id"  value="e-001" disabled><br>
    <label>
     nombre: <input type="text" name="nombre" placeholder="nombre">
    </label>
    <label for="email">email</label>
    <input type="text" name="email" id="email" placeholder="escriba su correo electronico"><br>
     <label for="curso">curso</label>
     <input type="text" value="6to" id="curso" readonly>
     <label for="fecnac">fecha de nacimiento</label>
     <input type="date" id="fecnac"><br>
     <label for="paralelo">paralelo</label>
     <select name="paralelo" id="paralelo" multiple size="3">
    <option value=""disabled selected>seleccionar paralelo</option><br>
    <option value="a">a</option><br>
    <option value="b">b</option><br>
    <option value="c">c</option><br>
    <option value="d">d</option><br>
     </select><br>
     <label for="color">color</label>
     <input type="checkbox" name="color" id="color">
     <label for="color1">color1</label>
     <input type="checkbox" name="color1" id="color1">
     <label for="color2">color2</label>
     <input type="checkbox" name="color2" id="color2">
     <br>
    <fieldset border="2">
        <LEgend>seleccionar genero</LEgend>
     <label for="genero">femenino</label>
     <input type="radio" value="f" name="genero" id="genero">
     <label for="genero1">masculino</label>
     <input type="radio" value="m" name="genero" id="genero1">
    </fieldset>
    <input type="submit" value="enviar">
    <input type="reset" value="borrar">
</form>
</body>
</html>