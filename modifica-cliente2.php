<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motos Turing - Modifica Moto</title>
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
    $CodMoto = $_POST["CodMoto"];
    $Cilindrada = $_POST["Cilindrada"];
    $Marca = $_POST["Marca"];
    $Modelo = $_POST["Modelo"];
    $Fabricante = $_POST["Fabricante"];
    ?>
    <div class="container">
        <div class="card">
            <h1 class="text-center">Motos Turing - Modifica Moto</h1>
            <form action="index.php" method="post">
                    <input type="hidden" name="accion" value="modificar_moto">
                    <input type="hidden" name="CodMoto" value="<?= $CodMoto ?>">
                    <input type="hidden" name="CodMotoAntiguo" value="<?= $CodMoto ?>">
                    <div class="mb-3 aire">
                        <label for="CodMoto" class="form-label">Código</label>
                        <input type="text" class="form-control" id="CodMoto" name="CodMoto" value="<?= $CodMoto ?>" size="10">
                    </div> 
                    <div class="mb-3 aire">
                        <label for="Cilindrada" class="form-label">Cilindrada</label>
                        <input type="text" class="form-control" id="Cilindrada" name="Cilindrada" value="<?= $Cilindrada ?>">
                    </div>
                    <div class="mb-3 aire">
                        <label for="Marca" class="form-label">Marca</label>
                        <input type="text" class="form-control" id="Marca" name="Marca" value="<?= $Marca ?>">
                    </div>
                    <div class="mb-3 aire">
                        <label for="Modelo" class="form-label">Modelo</label>
                        <input type="text" class="form-control" id="Modelo" name="Modelo" value="<?= $Modelo ?>">
                    </div>
                    <div class="mb-3 aire">
                        <label for="Fabricante" class="form-label">Fabricante</label>
                        <input type="text" class="form-control" id="Fabricante" name="Fabricante" value="<?= $Fabricante ?>">
                    </div>
                    <div class="mb-3 aire">
                        <button type="submit" class="btn btn-success">Aceptar</button>
                    </div>
                    <div class="mb-3 aire">
                            <button class="btn btn-danger"><a href="index.php">Cancelar</a></button>
                    </div>
                </form>
        </div>

    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>
