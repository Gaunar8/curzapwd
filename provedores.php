<?php
        session_start();
        if(!$_SESSION['usuario']){
            header('Location: index.php');
            exit();
        }

?>
<html>
    <title>provedores</title>



<header>
   <h1>Provedores</h1>
    <a href="menu.php" class="button">Panel</a>
    <a href="provedores.php" class="button">Provedores</a>
    <a href="Productos.php" class="button">Productos</a>
    <a href="ventas.php" class="button">Ventas</a>
    <a href="index.php" class="button">salir</a>
</header>

    <form><br></br><center>
        <div>
        Nombre de empresa<br><input type="text" name="empresa"><br></br>
        </div><div>
        Numero de contacto<br><input type="number" name="contacto"><br></br>
        </div><div>
        Nombre de viajante<br><input type="text" name="nombrev"><br></br>
        </div><div>
        Fecha de llegada<br><input type="date" name="fechallegada"><br></br>
        </div><div></div>
            Comentarios<br><textarea name="comentarios" rows="2" cols="20"></textarea>
        </div><br>                                
        <button>Cargar</button>
    </form></center>
<footer>Ferreteria Curza &copy;</footer>
<style>

header, footer {
    padding: 1em;
    color: white;
    background-color: #4ea6ca;
    clear: left;
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
.button {
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