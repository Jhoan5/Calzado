<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calzado</title>
  <link rel="stylesheet" href="../style.css" />
</head>

<body>
  <main>
    <h1>Agregar cargo</h1>
    <form action="" method="post">
      <div>
        <label for="NOM_CARGO">Nombre del Cargo:</label>
        <select name="NOM_CARGO" id="NOM_CARGO">
          <option value="ADMINISTRADOR">Administrador</option>
          <option value="VENDEDOR">Vendedor</option>
        </select>
      </div>
      <div>
        <label for="UBICACION_CARGO">Ubicación del Cargo:</label>
        <input type="text" name="UBICACION_CARGO" id="UBICACION_CARGO" required />
      </div>
      <div>
        <label for="SALARIO_BASE">Salario Base:</label>
        <input type="text" name="SALARIO_BASE" id="SALARIO_BASE" pattern="[0-9]+" required />
      </div>
      <div>
        <button type="submit">Guardar</button>
      </div>
    </form>
    <?php
    include '../a-main.php'; # conexion() // err()

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nombre_cargo = $_POST['NOM_CARGO'];
      $ubicacion_cargo = $_POST['UBICACION_CARGO'];
      $salario_base = $_POST['SALARIO_BASE'];
      $conexion = conexion();
      $sql = "INSERT INTO cargos(NOM_CARGO,UBICACION_CARGO, SALARIO_BASE) VALUES ('$nombre_cargo','$ubicacion_cargo',$salario_base);";
      mysqli_query($conexion, $sql) or die(err($conexion));
      echo "<p>¡Cargo guardado correctamente!</p>";
    }
    ?>
  </main>
</body>

</html>