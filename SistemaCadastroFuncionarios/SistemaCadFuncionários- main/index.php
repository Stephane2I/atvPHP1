<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> FORMULÁRIO </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cadastro"> 
    	<center> <h1> CADASTRO DE FUNCIONÁRIOS </h1> </center> 
    </div>

	<section>
		<form method="post" action="cadastro.php">
            <p> ID: <input type="number" name="id"></p>
			<p> Nome: <input type="text" name="nome"></p>
			<p> Cargo: <input type="text" name="cargo"></p>
			<p> Salário: <input type="text" name="salario"></p>
			<p> Dependentes: <input type="number" name="dependentes"></p>
			
			<div>
				<button type="submit"> FINALIZAR CADASTRO </button>
			</div>
		</form>
	</section>
</body>
</html>