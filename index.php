<!DOCTYPE html>
<html>
<head>
	<title>Proyecto 1</title>
</head>
<style>
	table{
		border: solid;
		font-family: sans-serif;
		padding: 5px;
	}
</style>
<body>
	<header>
		<h1>Probando</h1>
	</header>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "proyecto1");
	$sql = "SELECT * FROM personas";
	$result = mysqli_query($conn, $sql);
	while($fila = mysqli_fetch_assoc($result)){
		echo "<table><thead><tr><th>Id</th><th>Nombre</th></tr></thead>".
		"<tbody><tr><td>".$fila['id']."</td><td>".$fila['nombre']."</td></tr></tbody></table>";
	}
	mysqli_close($conn);
	?>
</body>
</html>