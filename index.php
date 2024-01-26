<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moto Turing</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="icons/font/bootstrap-icons.min.css">
</head>

<body>
    <?php
    $conexion = mysqli_connect( "xxxxxxx", "xxxxxxx");

    if (!isset($_POST["accion"])) {
        $_POST["accion"] = "";
    }

    // Código para equipos
    if ($_POST["accion"] == "eliminar_equipo") {
        $borra = "DELETE FROM equipo WHERE CodEquipo=\"$_POST[CodEquipo]\"";
        mysqli_query($conexion, $borra);
    }

    if ($_POST["accion"] == "insertar_equipo") {
        $inserta = "INSERT INTO equipo (NomEquipo, PaisEquipo, AnnoFundacion) VALUES ('$_POST[NomEquipo]', '$_POST[PaisEquipo]', '$_POST[AnnoFundacion]')";
        mysqli_query($conexion, $inserta);
    }

    if ($_POST["accion"] == "modificar_equipo") {
        $modifica = "UPDATE equipo SET CodEquipo='$_POST[CodEquipo]', NomEquipo='$_POST[NomEquipo]', PaisEquipo='$_POST[PaisEquipo]', AnnoFundacion='$_POST[AnnoFundacion]' WHERE CodEquipo='$_POST[CodEquipoAntiguo]'";
        mysqli_query($conexion, $modifica);
    }

    $consulta_equipo = mysqli_query($conexion, "SELECT * FROM equipo");

    // Código para motos
    if ($_POST["accion"] == "eliminar_moto") {
        $borra_moto = "DELETE FROM moto WHERE CodMoto=\"$_POST[CodMoto]\"";
        mysqli_query($conexion, $borra_moto);
    }

    if ($_POST["accion"] == "insertar_moto") {
        $inserta_moto = "INSERT INTO moto (Cilindrada, Marca, Modelo, Fabricante) VALUES ('$_POST[Cilindrada]', '$_POST[Marca]', '$_POST[Modelo]', '$_POST[Fabricante]')";
        mysqli_query($conexion, $inserta_moto);
    }

    if ($_POST["accion"] == "modificar_moto") {
        $modifica_moto = "UPDATE moto SET Cilindrada='$_POST[Cilindrada]', Marca='$_POST[Marca]', Modelo='$_POST[Modelo]', Fabricante='$_POST[Fabricante]' WHERE CodMoto='$_POST[CodMotoAntiguo]'";
        mysqli_query($conexion, $modifica_moto);
    }

    $consulta_moto = mysqli_query($conexion, "SELECT * FROM moto");
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Moto Turing</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="icons/font/bootstrap-icons.min.css">
    </head>

    <body>
        <br>
        <div class="container">
            <div class="card">
                <h1 class="text-center">Moto Turing</h1>

                <!-- Tabla para "equipo" -->
                <h1 class="text-center">Equipos</h1>
                <table class="table table-striped">
                    <tr>
                        <th>Nombre</th>
                        <th>País</th>
                        <th>Año de fundación</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php
                    while ($registro = mysqli_fetch_array($consulta_equipo)) {
                    ?>
                        <tr>
                            <td><?= $registro['NomEquipo'] ?></td>
                            <td><?= $registro['PaisEquipo'] ?></td>
                            <td><?= $registro['AnnoFundacion'] ?></td>
                            <!-- Botones para "equipo" -->
                            <td>
                                <form action="index.php" method="post">
                                    <input type="hidden" name="accion" value="eliminar_equipo">
                                    <input type="hidden" name="CodEquipo" value="<?= $registro['CodEquipo'] ?>">
                                    <button type="submit" class="btn btn-danger">
                                        <span class="bi bi-trash3"></span>
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="modifica-cliente.php" method="post">
                                    <input type="hidden" name="CodEquipo" value="<?= $registro['CodEquipo'] ?>">
                                    <input type="hidden" name="NomEquipo" value="<?= $registro['NomEquipo'] ?>">
                                    <input type="hidden" name="PaisEquipo" value="<?= $registro['PaisEquipo'] ?>">
                                    <input type="hidden" name="AnnoFundacion" value="<?= $registro['AnnoFundacion'] ?>">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="bi bi-pencil"></span>
                                        Modificar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    <form action="index.php" method="post">
                        <input type="hidden" name="accion" value="insertar_equipo">
                        <tr>
                            <td><input type="text" name="NomEquipo"></td>
                            <td><input type="text" name="PaisEquipo"></td>
                            <td><input type="number" min="1900" name="AnnoFundacion" size="10"></td>
                            <td>
                                <button type="submit" class="btn btn-success">
                                    <span class="bi bi-floppy"></span>
                                    Añadir
                                </button>
                            </td>
                            <td></td>
                        </tr>
                    </form>
                </table>

                <!-- Tabla para "moto" -->
                <h1 class="text-center">Motos</h1>
                <table class="table table-striped">
                    <tr>
                        <th>Cilindrada</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Fabricante</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php
                    while ($registro = mysqli_fetch_array($consulta_moto)) {
                    ?>
                        <tr>
                            <td><?= $registro['Cilindrada'] ?></td>
                            <td><?= $registro['Marca'] ?></td>
                            <td><?= $registro['Modelo'] ?></td>
                            <td><?= $registro['Fabricante'] ?></td>
                            <!-- Botones para "moto" -->
                            <td>
                                <form action="index.php" method="post">
                                    <input type="hidden" name="accion" value="eliminar_moto">
                                    <input type="hidden" name="CodMoto" value="<?= $registro['CodMoto'] ?>">
                                    <button type="submit" class="btn btn-danger">
                                        <span class="bi bi-trash3"></span>
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="modifica-cliente2.php" method="post">
                                    <input type="hidden" name="CodMoto" value="<?= $registro['CodMoto'] ?>">
                                    <input type="hidden" name="Cilindrada" value="<?= $registro['Cilindrada'] ?>">
                                    <input type="hidden" name="Marca" value="<?= $registro['Marca'] ?>">
                                    <input type="hidden" name="Modelo" value="<?= $registro['Modelo'] ?>">
                                    <input type="hidden" name="Fabricante" value="<?= $registro['Fabricante'] ?>">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="bi bi-pencil"></span>
                                        Modificar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    <form action="index.php" method="post">
                        <input type="hidden" name="accion" value="insertar_moto">
                        <tr>
                            <td><input type="text" name="Cilindrada"></td>
                            <td><input type="text" name="Marca"></td>
                            <td><input type="text" name="Modelo"></td>
                            <td><input type="text" name="Fabricante"></td>
                            <td>
                                <button type="submit" class="btn btn-success">
                                    <span class="bi bi-floppy"></span>
                                    Añadir
                                </button>
                            </td>
                            <td></td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
        <script src="js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

    </html>
