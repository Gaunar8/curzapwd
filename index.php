<?php
require_once 'conectar.php';

if(isset($_GET['boton']))
{
    // en este lugar, proceso lo que viene y me fijo en la bd;
    $query = "SELECT * FROM nusuarios where usuario='".$_GET['usuario']."'";
    $result = mysqli_query($connection, $query);
    $resultado = mysqli_fetch_assoc($result);
    if($resultado)
    {
        session_start();
        $_SESSION['usuario']=$_GET['usuario'] ;
        header('Location: menu.php');
        exit();
    }
        else{
        $mensajeError = "Usuario inexistente"; 
    }
}

?>

<html>
    <title>login</title>
    <header>
   <h1>INGRESO AL SISTEMA</h1>
   <h1>hola</h1>
</header>
    <center><form><BR>
        Nombre de usuario:<br><input type="text" name="usuario"  ><br></br>
        Contraseña:<br><input type="password" name="contra"><br></br>
        <button name="boton" type="submit">Entrar</button>
        <span class='error'><?= $mensajeError ?? '';?></span> 
    </form></center>
    
    
    
    <footer>Ferreteria Curza &copy;</footer>
<style>
span.error {
    color:red;
}

header, footer {

    padding: 1em;
    color: white;
    background-color: #4ea6ca;
    clear: bottom;
    text-align: center;
}

button {
  background: #3498db;

  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 8;
  -moz-border-radius: 8;
  border-radius: 8px;
  -webkit-box-shadow: 0px 1px 3px #666666;
  -moz-box-shadow: 0px 1px 3px #666666;
  box-shadow: 0px 1px 3px #666666;
  font-family: Arial;
  color: #ffffff;
  font-size: 17px;
  padding: 10px;
  text-decoration: black;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
</style>
</html>