<?php include("../template/cabecera.php");?>

<?php 
$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$txtPrecio=(isset($_POST['txtPrecio']))?$_POST['txtPrecio']:"";
$txtDescripcion=(isset($_POST['txtDescripcion']))?$_POST['txtDescripcion']:"";
$txtCategoria=(isset($_POST['txtCategoria']))?$_POST['txtCategoria']:"";
$txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include("../config/bd.php");

switch($accion){
    case "Agregar":
        $sentenciaSQL=$conexion->prepare("INSERT INTO libros ( Nombre, Precio, Descripcion, Categoria, imagen) VALUES ( :nombre, :precio, :descripcion, :categoria, :imagen);");
        $sentenciaSQL->bindParam(':nombre',$txtNombre);
        $sentenciaSQL->bindParam(':precio',$txtPrecio);
        $sentenciaSQL->bindParam(':descripcion',$txtDescripcion);
        $sentenciaSQL->bindParam(':categoria',$txtCategoria);

        $fecha= new DateTime();
        $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";

        $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

        if($tmpImagen!=""){
            move_uploaded_file($tmpImagen,"../../img/".$nombreArchivo);
        }

        $sentenciaSQL->bindParam(':imagen',$nombreArchivo);
        $sentenciaSQL->execute();

        header("location:productos.php");
        break;
    case "Modificar":
        $sentenciaSQL=$conexion->prepare("UPDATE libros SET nombre = :nombre, Descripcion = :descripcion, Categoria = :categoria WHERE libros.id =:id");
        $sentenciaSQL->bindParam(':nombre',$txtNombre);
        $sentenciaSQL->bindParam(':precio',$txtPrecio);
        $sentenciaSQL->bindParam(':descripcion',$txtDescripcion);
        $sentenciaSQL->bindParam(':categoria',$txtCategoria);
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();


        if($txtImagen!=""){

        $fecha= new DateTime();
        $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
        $tmpImagen=$_FILES["txtImagen"]["tmp_name"];


        move_uploaded_file($tmpImagen,"../../img/".$nombreArchivo);

        $sentenciaSQL=$conexion->prepare("SELECT imagen FROM libros WHERE id =:id");
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();
        $libro=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

        if(isset($libro["imagen"]) &&($libro["imagen"]!="imagen.jpg") ){

            if (file_exists("../../img/".$libro["imagen"])){

                unlink("../../img/".$libro["imagen"]);
            }

        }



            $sentenciaSQL=$conexion->prepare("UPDATE libros SET imagen = :imagen WHERE id =:id");
            $sentenciaSQL->bindParam(':imagen',$txtImagen);
            $sentenciaSQL->bindParam(':id',$txtID);
            $sentenciaSQL->execute();
        }
        header("location:productos.php");

        break;
    case "Cancelar":
            header("location:productos.php");
        break;
    case "Seleccionar":
        $sentenciaSQL=$conexion->prepare("SELECT * FROM libros WHERE id =:id");
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();
        $libro=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

        $txtNombre=$libro['Nombre'];
        $txtPrecio=$libro['Precio'];
        $txtDescripcion=$libro['Descripcion'];
        $txtCategoria=$libro['Categoria'];
        $txtImagen=$libro['imagen'];

        break;
    case "Borrar":

        $sentenciaSQL=$conexion->prepare("SELECT imagen FROM libros WHERE id =:id");
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();
        $libro=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

        if(isset($libro["imagen"]) &&($libro["imagen"]!="imagen.jpg") ){

            if (file_exists("../../img/".$libro["imagen"])){

                unlink("../../img/".$libro["imagen"]);
            }

        }
            $sentenciaSQL=$conexion->prepare("DELETE  FROM libros WHERE id =:id");
            $sentenciaSQL->bindParam(':id',$txtID);
            $sentenciaSQL->execute();
            header("location:productos.php");
        break;
}

$sentenciaSQL=$conexion->prepare("SELECT * FROM libros");
$sentenciaSQL->execute();
$listaLibros=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


?>

<div class="col-md-5">
    <div class="card">
        <div class="card-header">
            Datos de Libro
        </div>


        <div class="card-body">

            <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="txtID">ID</label>
                    <input type="text" Required readonly class="form-control" value="<?php echo $txtID;?>" name="txtID"
                        id="txtID" placeholder="ID">
                </div>

                <div class="form-group">
                    <label for="txtNombre">Nombre</label>
                    <input type="text" Required class="form-control" value="<?php echo $txtNombre;?>" name="txtNombre"
                        id="txtNombre" placeholder="Nombre">
                </div>

                <div class="form-group">
                    <label for="txtPrecio">Precio</label>
                    <input type="text" Required class="form-control" value="<?php echo $txtPrecio;?>" name="txtPrecio"
                        id="txtPrecio" placeholder="Precio">
                </div>

                <div class="form-group">
                    <label for="txtDescripcion">Descripcion</label>
                    <input type="text" Required class="form-control" value="<?php echo $txtDescripcion;?>"
                        name="txtDescripcion" id="txtDescripcion" placeholder="Descripcion">
                </div>

                <div class="form-group">
                    <!--<label for="txtCategoria">Categoria</label>
                    <input type="text" Required class="form-control" value="<?php echo $txtCategoria;?>" name="txtCategoria"
                        id="txtCategoria" placeholder="Categoria">-->

                    <select id="txtCategoria" name="txtCategoria">
                        <option value="Seleccionar">Seleccionar</option>
                        <option value="Verduras">Verduras</option>
                        <option value="Frutas">Frutas</option>
                        <option value="Snack">Snack</option>
                        <option value="Abarrotes">Abarrotes</option>
                        <option value="Comida">Comida</option>
                        <option value="Postres">Postres</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="txtImagen">Imagen</label>

                    <?php if ($txtImagen!="") { ?>

                    <img class="img-thumbnail rounded" src="../../img/<?php echo $txtImagen ?>" width="80" alt="">

                    <?php  }?>

                    <input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="ID">
                </div>

                <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="accion" <?php echo ($accion=="Seleccionar")?"disabled":""; ?>
                        value="Agregar" class="btn btn-success">Agregar</button>
                    <button type="submit" name="accion" <?php echo ($accion!="Seleccionar")?"disabled":""; ?>
                        value="Modificar" class="btn btn-warning">Modificar</button>
                    <button type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
                </div>

            </form>
        </div>

    </div>




</div>
<div class="col-md-7">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th>Categoria</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listaLibros as $libro){ ?>
            <tr>
                <td><?php echo $libro['id']; ?></td>
                <td><?php echo $libro['Nombre']; ?></td>
                <td><?php echo $libro['Precio']; ?></td>
                <td><?php echo $libro['Descripcion']; ?></td>
                <td><?php echo $libro['Categoria']; ?></td>
                <td>

                    <img class="img-thumbnail rounded" src="../../img/<?php echo $libro['imagen']; ?>" width="80"
                        alt="">

                </td>

                <td>

                    <form method="post">

                        <input type="hidden" name="txtID" id="txtID" value="<?php echo $libro['id']; ?>">

                        <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary" />

                        <input type="submit" name="accion" value="Borrar" class="btn btn-danger" />

                    </form>

                </td>

            </tr>
            <?php } ?>
        </tbody>
    </table>

</div>

<?php include("../template/pie.php");?>