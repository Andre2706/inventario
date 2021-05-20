<?php
include ("conexion.php"); 


$Numero_de_inventario=$_POST['Numero_de_inventario'];
$Unidad_de_negocio=$_POST['Unidad_de_negocio'];
$Clase=$_POST['Clase'];
$Descripcion_de_la_clase=$_POST['Descripcion_de_la_clase'];
$Complemento_de_la_descripcion=$_POST['Complemento_de_la_descripcion'];
$Id_articulo=$_POST['Id_articulo'];
$Descripcion_del_articulo=$_POST['Descripcion_del_articulo'];
$Marca=$_POST['Marca'];
$Id_serie=$_POST['Id_serie'];
$Modelo=$_POST['Modelo'];
$Categoria=$_POST['Categoria'];
$Comentario_del_NNI=$_POST['Comentario_del_NNI'];
$Unidad_operativa=$_POST['Unidad_operativa'];
$Unidad_de_informacion=$_POST['Unidad_de_informacion'];
$Estado_fecha_de_informacion=$_POST['Estado_fecha_de_informacion'];
$Centros_de_costos=$_POST['Centros_de_costos'];
$Estado_fecha_centro_de_costos=$_POST['Estado_fecha_centro_de_costos'];
$Combinancion=$_POST['Combinancion'];
$Divsion=$_POST['Divsion'];
$Subdivision=$_POST['Subdivision'];
$Codigo_de_ubicacion=$_POST['Codigo_de_ubicacion'];
$Ramo_de_seguro=$_POST['Ramo_de_seguro'];
$Numero_de_acta=$_POST['Numero_de_acta'];
$Nombre_RCAB=$_POST['Nombre_RCAB'];
$Costo=$_POST['Costo'];
$Fecha_de_adquisicion=$_POST['Fecha_de_adquisicion'];
$Numero_alta=$_POST['Numero_alta'];
$Contrato=$_POST['Contrato'];
$Fecha_ultimo_movimiento=$_POST['Fecha_ultimo_movimiento'];
$Numero_noticia_movimiento=$_POST['Numero_noticia_movimiento'];
$Matricula=$_POST['Matricula'];
$Nombre_usuario=$_POST['Nombre_usuario'];

$query="insert into imam(Numero_de_inventario, Unidad_de_negocio, Clase, Descripcion_de_la_clase, Complemento_de_la_descripcion, 
Id_articulo, Descripcion_del_articulo, Marca, Id_serie, Modelo, Categoria, Comentario_del_NNI, Unidad_operativa, 
Unidad_de_informacion, Estado_fecha_de_informacion, Centros_de_costos, Estado_fecha_centro_de_costos, Combinancion, Divsion, Subdivision, 
Codigo_de_ubicacion, Ramo_de_seguro, Numero_de_acta, Nombre_RCAB, Costo, Fecha_de_adquisicion, Numero_alta, Contrato, Fecha_ultimo_movimiento, 
Numero_noticia_movimiento, Matricula, Nombre_usuario ) 
VALUES('$Numero_de_inventario','$Unidad_de_negocio','$Clase','$Descripcion_de_la_clase','$Complemento_de_la_descripcion','$Id_articulo',
'$Descripcion_del_articulo','$Marca','$Id_serie','$Modelo','$Categoria','$Comentario_del_NNI','$Unidad_operativa',
'$Unidad_de_informacion','$Estado_fecha_de_informacion','$Centros_de_costos','$Estado_fecha_centro_de_costos','$Combinancion','$Divsion',
'$Subdivision','$Codigo_de_ubicacion','$Ramo_de_seguro','$Numero_de_acta','$Nombre_RCAB','$Costo','$Fecha_de_adquisicion','$Numero_alta',
'$Contrato','$Fecha_ultimo_movimiento','$Numero_noticia_movimiento','$Matricula','$Nombre_usuario')";

$resultado=mysqli_query($cnn,$query);
if($resultado)
{
$msg="tipo de producto agregado";
}
else
{
    $msg="no se agrego";
}
header ("location:inventario.html?msg=$msg"); 
?>