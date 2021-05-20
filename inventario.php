<?php 
include_once("conexion.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"/>
    
    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container-fluid">
    <h1>Productos en inventario</h1>
     <table class="table table-responsive" id="inventario">
        <thead>
            <tr>
            <th scope="col">Acción</th>
            
            <th scope="col">Numero de Inventario</th>
            <th scope="col">Unidad de negocio</th>
            <th scope="col">Clase</th>
            <th scope="col">Descripción de la clase</th>
            <th scope="col">Complemento de la descripción</th>
            <th scope="col">Id_articulo</th>
            <th scope="col">Descripcion_del_articulo</th>
            <th scope="col">Marca</th>
            <th scope="col">Id Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Categoria</th>
            <th scope="col">Comentario del NNI</th>
            <th scope="col">Unidad Operativa</th>
            <th scope="col">Unidad de Informacion</th>
            <th scope="col">Estado de Fecha de Informacion</th>
            <th scope="col">Centros de Costos</th>
            <th scope="col">Estados de Fechas de Centros de Costos</th>
            <th scope="col">Combinacion</th>
            <th scope="col">Division</th>
            <th scope="col">Subdivision</th>
            <th scope="col">Codigo de Ubicacion</th>
            <th scope="col">Ramo de Seguro</th>
            <th scope="col">Numero de Acta</th>
            <th scope="col">Nombre RCAB</th>
            <th scope="col">Costo</th>
            <th scope="col">Fecha de Adquisicion</th>
            <th scope="col">Numero de Alta</th>
            <th scope="col">Contrato</th>
            <th scope="col">Fecha de Ultimo Movimiento</th>
            <th scope="col">Numero de Noicias de Movimientos</th>
            <th scope="col">Matricula</th>
            <th scope="col">Nombre de Usuario</th>
            </tr>
        </thead>
        <tbody>
        <?php 
                              $sql = "SELECT * FROM imam  ";
                              $resultado = mysqli_query($cnn,$sql);
                              $total =mysqli_num_rows($resultado);
                              while ($fila = mysqli_fetch_assoc($resultado)) {
                                 echo "<tr>";
                                 echo "<td><button class='btn btn-danger'>Baja</button></td>";



                                  echo "<td>".$fila['Numero_de_inventario']."</td>";
                                  echo "<td>".$fila['Unidad_de_negocio']."</td>";
                                  echo "<td> ".$fila['Clase']."</td>";
                                  echo "<td>".$fila['Descripcion_de_la_clase']."</td>";
                                  echo "<td>".$fila['Complemento_de_la_descripcion']."</td>";
                                  echo "<td>".$fila['Id_articulo']."</td>";
                                  echo "<td>".$fila['Descripcion_del_articulo']."</td>";
                                  echo "<td>".$fila['Marca']."</td>";
                                  echo "<td>".$fila['Id_serie']."</td>";
                                  echo "<td>".$fila['Modelo']."</td>";
                                  echo "<td>".$fila['Categoria']."</td>";
                                  echo "<td>".$fila['Comentario_del_NNI']."</td>";
                                  echo "<td>".$fila['Unidad_operativa']."</td>";
                                  echo "<td>".$fila['Unidad_de_informacion']."</td>";
                                  echo "<td>".$fila['Estado_fecha_de_informacion']."</td>";
                                  echo "<td>".$fila['Centros_de_costos']."</td>";
                                  echo "<td>".$fila['Estado_fecha_centro_de_costos']."</td>";
                                  echo "<td>".$fila['Combinancion']."</td>";
                                  echo "<td>".$fila['Divsion']."</td>";
                                  echo "<td>".$fila['Subdivision']."</td>";
                                  echo "<td>".$fila['Codigo_de_ubicacion']."</td>";
                                  echo "<td>".$fila['Ramo_de_seguro']."</td>";
                                  echo "<td>".$fila['Numero_de_acta']."</td>";
                                  echo "<td>".$fila['Nombre_RCAB']."</td>";
                                  echo "<td>".$fila['Costo']."</td>";
                                  echo "<td>".$fila['Fecha_de_adquisicion']."</td>";
                                  echo "<td>".$fila['Numero_alta']."</td>";
                                  echo "<td>".$fila['Contrato']."</td>";
                                  echo "<td>".$fila['Fecha_ultimo_movimiento']."</td>";
                                  echo "<td>".$fila['Numero_noticia_movimiento']."</td>";
                                  echo "<td>".$fila['Matricula']."</td>";
                                  echo "<td>".$fila['Nombre_usuario']."</td>";




                                  
                                  echo "</tr>" ;
                              
                              }
                          ?>
                        </tbody>
                        
                            <tfoot>
                            <tr>
                              
            <th scope="col">Acción</th>
            <th scope="col">Numero de Inventario</th>
            <th scope="col">Unidad de negocio</th>
            <th scope="col">Clase</th>
            <th scope="col">Descripción de la clase</th>
            <th scope="col">Complemento de la descripción</th>
            <th scope="col">Id_articulo</th>
            <th scope="col">Descripcion_del_articulo</th>
            <th scope="col">Marca</th>
            <th scope="col">Id Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Categoria</th>
            <th scope="col">Comentario del NNI</th>
            <th scope="col">Unidad Operativa</th>
            <th scope="col">Unidad de Informacion</th>
            <th scope="col">Estado de Fecha de Informacion</th>
            <th scope="col">Centros de Costos</th>
            <th scope="col">Estados de Fechas de Centros de Costos</th>
            <th scope="col">Combinacion</th>
            <th scope="col">Division</th>
            <th scope="col">Subdivision</th>
            <th scope="col">Codigo de Ubicacion</th>
            <th scope="col">Ramo de Seguro</th>
            <th scope="col">Numero de Acta</th>
            <th scope="col">Nombre RCAB</th>
            <th scope="col">Costo</th>
            <th scope="col">Fecha de Adquisicion</th>
            <th scope="col">Numero de Alta</th>
            <th scope="col">Contrato</th>
            <th scope="col">Fecha de Ultimo Movimiento</th>
            <th scope="col">Numero de Noicias de Movimientos</th>
            <th scope="col">Matricula</th>
            <th scope="col">Nombre de Usuario</th>







            </tr>
                            </tfoot>
        </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>   
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>       
                      
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
                            </div>
                        <script>
                            $(document).ready(function() {
                                $('#inventario').DataTable();
                            } );
                         </script>
  </body>
</html>