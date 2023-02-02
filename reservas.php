<html>
<head>
  <title>Lista de Libros</title>
  <link rel="stylesheet" href="public/css/reservas.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Información del libro</h4>
      </div>
      <div class="modal-body">
        <p>Informacion del libro</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
  <h1>Lista de Libros</h1>
  <form action="" method="get">
    <label for="categoria">Categoría:</label>
    <select id="categoria" name="categoria">
      <option value="">Todos</option>
      <option value="Novela">Novela</option>
      <option value="Distopía">Distopía</option>
    </select>
    <input type="submit" value="Filtrar">
  </form>
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
      <td><a href="#myModal" data-toggle="modal">Reservar</a></td>
    </tr>
    <tr>
      <td>2</td>
      <td>El Quijote de la Mancha</td>
      <td>Miguel de Cervantes</td>
      <td>Editorial Santillana</td>
      <td>1605</td>
      <td>Novela</td>
      <td><a href="#myModal" data-toggle="modal">Reservar</a></td>
    </tr>
    <tr>
      <td>3</td>
      <td>1984</td>
      <td>George Orwell</td>
      <td>Editorial Seix Barral</td>
      <td>1949</td>
      <td>Distopía</td>
      <td><a href="#myModal" data-toggle="modal">Reservar</a></td>
    </tr>
    <tr>
      <td>4</td>
      <td>Matar a un ruiseñor</td>
      <td>Harper Lee</td>
      <td>Editorial Lumen</td>
      <td>1960</td>
      <td>Novela</td>
      <td><a href="#myModal" data-toggle="modal">Reservar</a></td>
    </tr>
  </table>
</body>
</html>
