<?php include("db.php")?>

<?php include("includes/header.php")?>

<div class="container p-4">

    <div class="row">

        <div class="col-md-4">

         <?php if(isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
         <?php  session_unset(); }?> 
            <div class="card card-body">
              <form action="guardar.php" method="POST">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" 
                    placeholder="Numero Control" autofocus>
                </div>
                <div class="form-group">
                        <textarea name="description" rows="1" class="form-control" 
                        placeholder="Nombre"></textarea>
                </div>
                <input type="submit" class="btn btn-success btn-block" 
                name="save_task" value="Save">
              </form>
            </div>
    </div>   
        <div class="col-md-8">
                <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Numero Control</th>
                        <th>Nombre</th>
                        <th>Registrado el</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query = "SELECT *  FROM alumnos";
                    $result_alumnos = mysqli_query($conn, $query);
                    
                    while($row = mysqli_fetch_array($result_alumnos)){ ?>  
                        <tr>
                            <td><?php echo $row['Numero_Control'] ?> </td>
                            <td><?php echo $row['Nombre'] ?> </td>
                            <td><?php echo $row['Fecha_Alta'] ?> </td>
                            <td>
                                <a href="editar.php?id=<?php echo $row['ID']?>" class="btn btn-secondary"> 
                                <i class="fas fa-marker"></i>
                                </a>
                                <a href="eliminar.php?id=<?php echo $row['ID']?>" class="btn btn-danger"> 
                                <i class="far fa-trash-alt"></i>
                                </a>

                            </td>
                        </tr>

                    <?php  } ?> 
                </tbody>


                </table>

        </div>
    </div>

</div>

<?php include("includes/footer.php")?>
