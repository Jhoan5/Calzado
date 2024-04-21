<!DOCTYPE html>
<html lang='es'>

<head>
  <meta charset='UTF-8' />
  <meta name='viewport' content='width=device-width, initial-scale=1.0' />
  <title>Calzado</title>
  <link rel='stylesheet' href='../style.css'>
</head>

<body>
  <?php
  include '../a-main.php'; // Archivo que contiene la función conexion() y err()
  $conexion = conexion();
  $codigo = $_GET["cod"];
  $sql = "SELECT * FROM nomina WHERE cod_nomina = $codigo";
  $registros = mysqli_query($conexion, $sql) or die(err($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    $codigo_empleado = $reg['COD_EMPLEADO'];
    $salario = $reg['SALARIO'];
    $dias_trabajados = $reg['DIAS_TRABAJADOS'];
    $salario_base = $reg['SALARIO_BASE'];
    $tipo_horas_extras = $reg['TIPO_HORAS_EXTRAS'];
    $cantidad_horas_extra = $reg['CANTIDAD_HORAS_EXTRA'];
    $valor_horas_extras = $reg['VALOR_HORAS_EXTRAS'];
    $comisiones = $reg['COMISIONES'];
    $auxilio_transporte = $reg['AUXILIO_TRANSPORTE'];
    $total_devengado = $reg['TOTAL_DEVENGADO'];
    $salud = $reg['SALUD'];
    $pension = $reg['PENSION'];
    $prestamos = $reg['PRESTAMOS'];
    $total_deducido = $reg['TOTAL_DEDUCIDO'];
    $neto_pagar = $reg['NETO_PAGAR'];
  ?>
    <main>
      <form action="" method="post">
        <div>
          <label for="COD_EMPLEADO">Código de Empleado:</label>
          <input type="text" name="COD_EMPLEADO" id="COD_EMPLEADO" value="<?php echo $codigo_empleado; ?>" required />
        </div>
        <div>
          <label for="SALARIO">Salario:</label>
          <input type="text" name="SALARIO" id="SALARIO" value="<?php echo $salario; ?>" required />
        </div>
        <div>
          <label for="DIAS_TRABAJADOS">Días Trabajados:</label>
          <input type="text" name="DIAS_TRABAJADOS" id="DIAS_TRABAJADOS" value="<?php echo $dias_trabajados; ?>" pattern="[0-9]+" required />
        </div>
        <div>
          <label for="SALARIO_BASE">Salario Base:</label>
          <input type="text" name="SALARIO_BASE" id="SALARIO_BASE" value="<?php echo $salario_base; ?>" pattern="[0-9]+" required />
        </div>
        <div>
          <label for="TIPO_HORAS_EXTRAS">Tipo de Horas Extras:</label>
          <select name="TIPO_HORAS_EXTRAS" id="TIPO_HORAS_EXTRAS">
            <option value="DIURNAS" <?php if ($tipo_horas_extras == 'DIURNAS') echo 'selected'; ?>>Diurnas</option>
            <option value="NOCTURNAS" <?php if ($tipo_horas_extras == 'NOCTURNAS') echo 'selected'; ?>>Nocturnas</option>
            <option value="FESTIVAS" <?php if ($tipo_horas_extras == 'FESTIVAS') echo 'selected'; ?>>Festivas</option>
            <option value="RECARGO_NOCTURNO" <?php if ($tipo_horas_extras == 'RECARGO_NOCTURNO') echo 'selected'; ?>>Recargo Nocturno</option>
          </select>
        </div>
        <div>
          <label for="CANTIDAD_HORAS_EXTRA">Cantidad de Horas Extras:</label>
          <input type="text" name="CANTIDAD_HORAS_EXTRA" id="CANTIDAD_HORAS_EXTRA" value="<?php echo $cantidad_horas_extra; ?>" pattern="[0-9]+" required />
        </div>
        <div>
          <label for="VALOR_HORAS_EXTRAS">Valor de Horas Extras:</label>
          <select name="VALOR_HORAS_EXTRAS" id="VALOR_HORAS_EXTRAS">
            <option value="DIURNAS" <?php if ($valor_horas_extras == 'DIURNAS') echo 'selected'; ?>>Diurnas</option>
            <option value="NOCTURNAS" <?php if ($valor_horas_extras == 'NOCTURNAS') echo 'selected'; ?>>Nocturnas</option>
            <option value="FESTIVAS" <?php if ($valor_horas_extras == 'FESTIVAS') echo 'selected'; ?>>Festivas</option>
            <option value="RECARGO_NOCTURNO" <?php if ($valor_horas_extras == 'RECARGO_NOCTURNO') echo 'selected'; ?>>Recargo Nocturno</option>
          </select>
        </div>
        <div>
          <label for="COMISIONES">Comisiones:</label>
          <input type="text" name="COMISIONES" id="COMISIONES" value="<?php echo $comisiones; ?>" pattern="[0-9]+" required />
        </div>
        <div>
          <label for="AUXILIO_TRANSPORTE">Auxilio de Transporte:</label>
          <input type="text" name="AUXILIO_TRANSPORTE" id="AUXILIO_TRANSPORTE" value="<?php echo $auxilio_transporte; ?>" required />
        </div>
        <div>
          <label for="TOTAL_DEVENGADO">Total Devengado:</label>
          <input type="text" name="TOTAL_DEVENGADO" id="TOTAL_DEVENGADO" value="<?php echo $total_devengado; ?>" required />
        </div>
        <div>
          <label for="SALUD">Salud:</label>
          <input type="text" name="SALUD" id="SALUD" value="<?php echo $salud; ?>" required />
        </div>
        <div>
          <label for="PENSION">Pensión:</label>
          <input type="text" name="PENSION" id="PENSION" value="<?php echo $pension; ?>" required />
        </div>
        <div>
          <label for="PRESTAMOS">Préstamos:</label>
          <input type="text" name="PRESTAMOS" id="PRESTAMOS" value="<?php echo $prestamos; ?>" required />
        </div>
        <div>
          <label for="TOTAL_DEDUCIDO">Total Deducido:</label>
          <input type="text" name="TOTAL_DEDUCIDO" id="TOTAL_DEDUCIDO" value="<?php echo $total_deducido; ?>" required />
        </div>
        <div>
          <label for="NETO_PAGAR">Neto a Pagar:</label>
          <input type="text" name="NETO_PAGAR" id="NETO_PAGAR" value="<?php echo $neto_pagar; ?>" required />
        </div>
        <div>
          <button type="submit">Guardar</button>
        </div>
      </form>
    </main>
  <?php
  }
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
    // Update
    $codigo = $_GET["cod"];
    $sql = "UPDATE nomina SET salario = $salario,dias_trabajados = $dias_trabajados,salario_base = $salario_base,tipo_horas_extras = '$tipo_horas_extras',cantidad_horas_extra = $cantidad_horas_extra,valor_horas_extras = '$valor_horas_extras',comisiones = $comisiones, auxilio_transporte = $auxilio_transporte, total_devengado = $total_devengado, salud = $salud, pension = $pension,          prestamos = $prestamos, total_deducido = $total_deducido,neto_pagar = $neto_pagar WHERE cod_nomina = $codigo;";
    mysqli_query($conexion, $sql) or die(err($conexion));
    echo "<p>¡Nomina actualizado correctamente!</p>";
  }
  ?>
</body>

</html>