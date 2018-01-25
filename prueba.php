<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

	  <?php
	  require_once('tools/mypathdb.php');
	
	//====================Buscar en la tabla citas================= 
	$consulta_mysql=("SELECT * FROM citas WHERE ID_Dr='".$ID."'");  
	$resultado_consulta_mysql=mysql_query($consulta_mysql,$dbConn);
	while($fila=mysql_fetch_array($resultado_consulta_mysql))
	{
	$IDcita= $fila['ID'];
	$nombre_Paciente= $fila['nombre_Paciente'];
	$apellido_Paciente= $fila['apellido_Paciente'];
	$email= $fila['email'];
	$celular= $fila['celular'];
	$motivo= $fila['motivo'];
	$fecha= $fila['fecha'];
	$hora= $fila['hora'];
	$dia= $fila['dia'];
	$tipo= $fila['tipo'];
	$confirmada= $fila['confirmada'];
	$realizada= $fila['realizada'];
	}
?>
</body>
</html>