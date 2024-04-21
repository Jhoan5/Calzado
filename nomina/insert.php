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
    <h2>Insertar nomina</h2>
    <form action="" method="post">
      <div>
        <label for="COD_EMPLEADO">Código de Empleado:</label>
        <input type="text" name="COD_EMPLEADO" id="COD_EMPLEADO" required />
      </div>
      <div>
        <label for="SALARIO">Salario:</label>
        <input type="text" name="SALARIO" id="SALARIO" required />
      </div>
      <div>
        <label for="DIAS_TRABAJADOS">Días Trabajados:</label>
        <input type="text" name="DIAS_TRABAJADOS" id="DIAS_TRABAJADOS" pattern="[0-9]+" required />
      </div>
      <div>
        <label for="SALARIO_BASE">Salario Base:</label>
        <input type="text" name="SALARIO_BASE" id="SALARIO_BASE" pattern="[0-9]+" required />
      </div>
      <div>
        <label for="TIPO_HORAS_EXTRAS">Tipo de Horas Extras:</label>
        <select name="TIPO_HORAS_EXTRAS" id="TIPO_HORAS_EXTRAS">
          <option value="DIURNAS">Diurnas</option>
          <option value="NOCTURNAS">Nocturnas</option>
          <option value="FESTIVAS">Festivas</option>
          <option value="RECARGO_NOCTURNO">Recargo Nocturno</option>
        </select>
      </div>
      <div>
        <label for="CANTIDAD_HORAS_EXTRA">Cantidad de Horas Extras:</label>
        <input type="text" name="CANTIDAD_HORAS_EXTRA" id="CANTIDAD_HORAS_EXTRA" pattern="[0-9]+" required />
      </div>
      <div>
        <label for="VALOR_HORAS_EXTRAS">Valor de Horas Extras:</label>
        <select name="VALOR_HORAS_EXTRAS" id="VALOR_HORAS_EXTRAS">
          <option value="DIURNAS">Diurnas</option>
          <option value="NOCTURNAS">Nocturnas</option>
          <option value="FESTIVAS">Festivas</option>
          <option value="RECARGO_NOCTURNO">Recargo Nocturno</option>
        </select>
      </div>
      <div>
        <label for="COMISIONES">Comisiones:</label>
        <input type="text" name="COMISIONES" id="COMISIONES" pattern="[0-9]+" required />
      </div>
      <div>
        <label for="AUXILIO_TRANSPORTE">Auxilio de Transporte:</label>
        <input type="text" name="AUXILIO_TRANSPORTE" id="AUXILIO_TRANSPORTE" required />
      </div>
      <div>
        <label for="TOTAL_DEVENGADO">Total Devengado:</label>
        <input type="text" name="TOTAL_DEVENGADO" id="TOTAL_DEVENGADO" required />
      </div>
      <div>
        <label for="SALUD">Salud:</label>
        <input type="text" name="SALUD" id="SALUD" required />
      </div>
      <div>
        <label for="PENSION">Pensión:</label>
        <input type="text" name="PENSION" id="PENSION" required />
      </div>
      <div>
        <label for="PRESTAMOS">Préstamos:</label>
        <input type="text" name="PRESTAMOS" id="PRESTAMOS" required />
      </div>
      <div>
        <label for="TOTAL_DEDUCIDO">Total Deducido:</label>
        <input type="text" name="TOTAL_DEDUCIDO" id="TOTAL_DEDUCIDO" required />
      </div>
      <div>
        <label for="NETO_PAGAR">Neto a Pagar:</label>
        <input type="text" name="NETO_PAGAR" id="NETO_PAGAR" required />
      </div>
      <div>
        <button type="submit">Guardar</button>
      </div>
    </form>
    <?php
    include '../a-main.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $codigo_empleado = $_POST['COD_EMPLEADO'];
      $salario = $_POST['SALARIO'];
      $dias_trabajados = $_POST['DIAS_TRABAJADOS'];
      $salario_base = $_POST['SALARIO_BASE'];
      $tipo_horas_extras = $_POST['TIPO_HORAS_EXTRAS'];
      $cantidad_horas_extra = $_POST['CANTIDAD_HORAS_EXTRA'];
      $valor_horas_extras = $_POST['VALOR_HORAS_EXTRAS'];
      $comisiones = $_POST['COMISIONES'];
      $auxilio_transporte = $_POST['AUXILIO_TRANSPORTE'];
      $total_devengado = $_POST['TOTAL_DEVENGADO'];
      $salud = $_POST['SALUD'];
      $pension = $_POST['PENSION'];
      $prestamos = $_POST['PRESTAMOS'];
      $total_deducido = $_POST['TOTAL_DEDUCIDO'];
      $neto_pagar = $_POST['NETO_PAGAR'];
      $conexion = conexion();
      $sql = "INSERT INTO nomina (COD_EMPLEADO, SALARIO, DIAS_TRABAJADOS, SALARIO_BASE, TIPO_HORAS_EXTRAS, CANTIDAD_HORAS_EXTRA, VALOR_HORAS_EXTRAS, COMISIONES, AUXILIO_TRANSPORTE, TOTAL_DEVENGADO, SALUD, PENSION, PRESTAMOS, TOTAL_DEDUCIDO, NETO_PAGAR)
            VALUES ($codigo_empleado, $salario, $dias_trabajados, $salario_base, '$tipo_horas_extras', $cantidad_horas_extra, '$valor_horas_extras', $comisiones, $auxilio_transporte, $total_devengado, $salud, $pension, $prestamos, $total_deducido, $neto_pagar)";
      mysqli_query($conexion, $sql) or die(err($conexion));
      echo "<p>nomina guardado correctamente!</p>";
      mysqli_close($conexion);
    }
    ?>
  </main>
</body>

</html>