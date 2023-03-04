<?php
// Establecemos la conexión con la base de datos
$host = 'localhost';
$dbname = 'nombre_de_la_base_de_datos';
$user = 'nombre_de_usuario';
$pass = 'contraseña';
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

try {
  $pdo = new PDO($dsn, $user, $pass);
  // Seteamos para que PDO lance excepciones en caso de errores
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Error al conectar con la base de datos: " . $e->getMessage();
}

// Obtenemos los datos enviados por el formulario
$num_expediente = $_POST['num_expediente'];
$fecha_caratulacion = $_POST['fecha_caratulacion'];
$id_ciudadano = $_POST['id_ciudadano'];
$id_tramite = $_POST['id_tramite'];
$id_habilitacion = $_POST['id_habilitacion'];
$id_operador = $_POST['id_operador'];
$cuatrigrama_delta = $_POST['cuatrigrama_delta'];

// Insertamos los datos en la tabla expedientes
try {
  $stmt = $pdo->prepare("INSERT INTO expedientes (num_expediente, fecha_caratulacion, id_ciudadano, id_tramite, id_habilitacion, id_operador, cuatrigrama_delta)
                          VALUES (:num_expediente, :fecha_caratulacion, :id_ciudadano, :id_tramite, :id_habilitacion, :id_operador, :cuatrigrama_delta)");
  $stmt->bindParam(':num_expediente', $num_expediente);
  $stmt->bindParam(':fecha_caratulacion', $fecha_caratulacion);
  $stmt->bindParam(':id_ciudadano', $id_ciudadano);
  $stmt->bindParam(':id_tramite', $id_tramite);
  $stmt->bindParam(':id_habilitacion', $id_habilitacion);
  $stmt->bindParam(':id_operador', $id_operador);
  $stmt->bindParam(':cuatrigrama_delta', $cuatrigrama_delta);
  $stmt->execute();

  echo "Los datos se han guardado correctamente";
} catch (PDOException $e) {
  echo "Error al guardar los datos: " . $e->getMessage();
}

// Cerramos la conexión con la base de datos
$pdo = null;
?>
