<?php session_start(); 
  if (!isset($_SESSION['usuario'])) {
    header("location:index.php");
  }
?>
<html>
<head>
  <title>Mi Cuenta</title>
  <link rel="stylesheet" href="public/css/inicio.css">
</head>
<body>
  <h1>Mi Cuenta</h1>
  <p>Nombre: <b><?php echo $_SESSION['usuario']; ?></b></p>
  <img src="https://www.asofiduciarias.org.co/wp-content/uploads/2018/06/sin-foto.png" alt="Mi Imagen">
  <p>Total de Reservas: <b>10</b></p>

  <h2>Mis Reservas</h2>
  <table>
  <tr>
      <th>ID</th>
      <th>Título</th>
      <th>Autor</th>
      <th>Editorial</th>
      <th>Año de publicación</th>
      <th>Categoría</th>
      <th>Accion</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Cien años de soledad</td>
      <td>Gabriel García Márquez</td>
      <td>Editorial Sudamericana</td>
      <td>1967</td>
      <td>Novela</td>
      <td><a href="#">Eliminar</a></td>
    </tr>
    <tr>
      <td>2</td>
      <td>El Quijote de la Mancha</td>
      <td>Miguel de Cervantes</td>
      <td>Editorial Santillana</td>
      <td>1605</td>
      <td>Novela</td>
      <td><a href="#">Eliminar</a></td>
    </tr>
  </table>
  <form action="reservas.php" method="post">
  <input type="submit" value="Ver Reservas">
</form>
</body>
</html>