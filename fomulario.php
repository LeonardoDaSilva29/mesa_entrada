<!DOCTYPE html>
<html>
<head>
	<title>Formulario de inserción</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<h1>Formulario de inserción</h1>
	<form action="guardar.php" method="POST">
		<h2>Datos del Expediente</h2>
		<label for="num_expediente">Número de expediente:</label>
		<input type="text" id="num_expediente" name="num_expediente" required>
		<label for="fecha_caratulacion">Fecha de caratulación:</label>
		<input type="date" id="fecha_caratulacion" name="fecha_caratulacion" required>
		<label for="cuatrigrama_delta">Cuatrigrama de la dependencia:</label>
		<input type="text" id="cuatrigrama_delta" name="cuatrigrama_delta" required>
		<h2>Datos del Ciudadano</h2>
		<label for="apellidos">Apellidos:</label>
		<input type="text" id="apellidos" name="apellidos" required>
		<label for="nombres">Nombres:</label>
		<input type="text" id="nombres" name="nombres" required>
		<label for="dni">DNI:</label>
		<input type="text" id="dni" name="dni" required>
		<h2>Datos del Trámite</h2>
		<label for="tipo_tramite">Tipo de trámite:</label>
		<input type="text" id="tipo_tramite" name="tipo_tramite" required>
		<h2>Datos de la Habilitación</h2>
		<label for="tipo_habilitacion">Tipo de habilitación:</label>
		<input type="text" id="tipo_habilitacion" name="tipo_habilitacion" required>
		<h2>Datos del Operador</h2>
		<label for="nombre_operador">Nombre del operador:</label>
		<input type="text" id="nombre_operador" name="nombre_operador" required>
		<h2>Datos de la Mesa</h2>
		<label for="nombre_mesa">Nombre de la mesa:</label>
		<input type="text" id="nombre_mesa" name="nombre_mesa" required><br><br><br>
		<input type="submit" value="Guardar">
	</form>
</body>
</html>
