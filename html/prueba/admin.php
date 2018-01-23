<?php
	if(!empty($_POST['carro']))
	{
		$name = "./carro/".$_POST['carro_file'];
		$text = $_POST['carro'];
		addToFile($name, $text);
	}

	if(!empty($_POST['persona']))
	{
		$name = "./persona/".$_POST['persona_file'];
		$text = $_POST['persona'];
		addToFile($name, $text);
	}

	if(!empty($_POST['computadora']))
	{
		$name = "./computadora/".$_POST['computadora_file'];
		$text = $_POST['computadora'];
		addToFile($name, $text);
	}

	if(!empty($_POST['search']))
	{
		$search = $_POST['search'];
		if(file_exists("./carro/".$search))
		{
			echo file_get_contents("./carro/".$search);
		}
		elseif(file_exists("./persona/".$search))
		{
			echo file_get_contents("./persona/".$search);
		}
		elseif(file_exists("./computadora/".$search))
		{
			echo file_get_contents("./computadora/".$search);
		}
		else
		{
			echo "ARCHIVO NO ENCONTRADO";
		}
	}
	function addToFile($name, $text)
	{
		$myfile = fopen($name, "w") or die("NO SE PUDO ENCONTRAR EL ARCHIVO");
		fwrite($myfile, $text);
		fclose($myfile);
		echo "SE GUARDO EL TEXTO";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Carro, Persona y Computadora</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
	<!-- BUSCADOR -->
	<div class="col-sm-12">
	<div class="col-sm-12">
	<h2>Buscador</h2>
		<form name="search" method="POST" action="./admin.php" class="form-inline">
			<div class="form-group">
				<label>Nombre del Archivo:</label>
				<input type="search" name="search" placeholder="carro.txt" class="form-control"><br>
			</div><br><br>
			<button>Guardar</button>
		</form><br>
	</div>
	<!-- BUSCADOR -->
	<!-- FORMULARIO DE CARRO -->
	<div class="col-sm-4">
	<h2>Formulario de Carro</h2>
	<form name="carro" method="POST" action="./admin.php" class="form-inline">
		<div class="form-group">
			<label>Nombre del Archivo:</label>
			<input type="text" name="carro_file" placeholder="carro.txt)" class="form-control"><br><br>
		</div>
		<div class="form-group">
			<label>Texto de Carro:</label><br>
			<textarea name="carro" class="form-control"></textarea><br>
		</div><br><br>
		<button>Guardar</button>
	</form><br>
	</div>
	<!-- FORMULARIO DE CARRO -->

	<!-- FORMULARIO DE PERSONA -->
	<div class="col-sm-4">
	<h2>Formulario de Persona</h2>
	<form name="persona" method="POST" action="./admin.php" class="form-inline">
		<div class="form-group">
			<label>Nombre del Archivo:</label>
			<input type="text" name="persona_file" placeholder="persona.txt)" class="form-control"><br><br>
		</div>
		<div class="form-group">
			<label>Texto de Carro:</label><br>
			<textarea name="persona" class="form-control"></textarea><br>
		</div><br><br>
		<button>Guardar</button>
	</form><br>
	</div>
	<!-- FORMULARIO DE PERSONA -->

	<!-- FORMULARIO DE COMPUTADORA -->
	<div class="col-sm-4">
	<h2>Formulario de Computadora</h2>
	<form name="computadora" method="POST" action="./admin.php" class="form-inline">
		<div class="form-group">
			<label>Nombre del Archivo:</label>
			<input type="text" name="computadora_file" placeholder="computadora.txt)" class="form-control"><br><br>
		</div>
		<div class="form-group">
			<label>Texto de Carro:</label><br>
			<textarea name="computadora" class="form-control"></textarea><br>
		</div><br><br>
		<button>Guardar</button>
	</form>
	</div>
	<!-- FORMULARIO DE COMPUTADORA -->
	</div>
	</div>
</div>
</body>
</html>