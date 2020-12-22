
<?php 

    $idNombre = $datos[0]['id_nombre'];
    $nombre = $datos[0]['nombre'];
    $paterno = $datos[0]['paterno'];
    $materno = $datos[0]['materno']; 
 ?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Actualiza un nombre</title>
</head>
<body>

    <div class="container">
        <h1>CRUD con Codeigniter 4</h1>

        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/actualizar' ?>">
                    <input type="text" id="idNombre" name="idNombre" hidden="" 
                    value="<?php echo $idNombre ?>">

                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" 
                    value="<?php echo $nombre ?>">

                    <label for="paterno">Apellido paterno</label>
                    <input type="text" name="paterno" id="paterno" class="form-control" 
                    value="<?php echo $paterno ?>">

                    <label for="materno">Apellido materno</label>
                    <input type="text" name="materno" id="materno" class="form-control" 
                    value="<?php echo $materno ?>">
                    <br>
                    <button class="btn btn-warning">Guardar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>