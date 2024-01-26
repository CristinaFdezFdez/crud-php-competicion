<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motos Turing- Modifica cliente</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="icons/font/bootstrap-icons.min.css">
    <style>
        .aire {
            padding: 10px 60px 10px 60px;
        }
        a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <?php
    $CodEquipo = $_POST["CodEquipo"];
    $NomEquipo = $_POST["NomEquipo"];
    $PaisEquipo = $_POST["PaisEquipo"];
    $AnnoFundacion = $_POST["AnnoFundacion"];
    ?>
    <div class="container">
        <div class="card">
            <h1 class="text-center">Motos Turing - Modifica cliente</h1>
            <form action="index.php" method="post">
                    <input type="hidden" name="accion" value="modificar">
                    <input type="hidden" name="CodEquipo" value="<?= $CodEquipo ?>">
                    <input type="hidden" name="CodEquipoAntiguo" value="<?= $CodEquipo ?>">
                    <div class="mb-3 aire">
                        <label for="CodEquipo" class="form-label">Código</label>
                        <input type="text" class="form-control" id="CodEquipo" name="CodEquipo" value="<?= $CodEquipo ?>" size="10">
                    </div> 
                    <div class="mb-3 aire">
                        <label for="NomEquipo" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="NomEquipo" name="NomEquipo" value="<?= $NomEquipo ?>">
                    </div>
                    <div class="mb-3 aire">
                        <label for="PaisEquipo" class="form-label">País</label>
                        <input type="text" class="form-control" id="PaisEquipo" name="PaisEquipo" value="<?= $PaisEquipo ?>">
                    </div>
                    <div class="mb-3 aire">
                        <label for="AnnoFundacion" class="form-label">Año fundación</label>
                        <input type="number"  min="1900" class="form-control" id="AnnoFundacion" name="AnnoFundacion" value="<?= $AnnoFundacion ?>">
                    </div>
                    <div class="mb-3 aire">
                        <button type="submit" class="btn btn-success">Aceptar</button>
                    </div>
                    <div class="mb-3 aire">
                            <button class="btn btn-danger"><a href="index.php">Cancelar</a></button>
                    </div>
                </form>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>