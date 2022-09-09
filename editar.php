<?php 
    include("db.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM alumnos WHERE id = $id";
        $result =  mysqli_query($conn, $query);
        if(mysqli_num_rows($result) ==  1 ) {
           $row = mysqli_fetch_array($result);
           $numero = $row['Numero_Control'];
           $nombre = $row['Nombre'];
        }
     
    }
    if(isset($_POST['update'])){
    $id = $_GET['id'];
    $numero = $_POST['Numero_Control'];
    $nombre = $_POST['Nombre'];
    echo $id;
    echo $numero;
    echo $nombre;
}

?>

<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="numero" value="<?php echo $numero; ?>" 
                        class="form-control" placeholder="Upadate Numero">
                    </div>
                    <div class="form-group">
                        <textarea name="nombre" rows="1" class="form-control" placeholder="Update Nombre"> <?php echo $nombre; ?></textarea>
                    </div>
                    <button class="btn btn-success" name="update">
                        Update
                    </button>
                </form>
            </div>

        </div>

    </div>

</div>

<?php include("includes/footer.php") ?>