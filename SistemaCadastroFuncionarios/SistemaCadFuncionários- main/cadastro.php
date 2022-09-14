<link rel="stylesheet" href="style.css">
<?php
	extract($_POST);
	$arq = "$id.txt";
	$refFile = fopen("Dados\ $arq", 'w+');

	$dados = "ID: $id \r\n 
			Nome: $nome \r\n 
			Cargo: $cargo \r\n 
			Salário: $salario \r\n 
			Dependentes: $dependentes \r\n";

	fwrite($refFile,$dados);
	fclose($refFile); 
	
	$file = scandir("Dados");

	for($i = 0; $i < count($file); $i++){
		if($file[$i] == "." || $file[$i] == ".."){
			echo "";
		}else{
			$di = trim($file[$i]);
			echo "<li> 
					<a href='readInfo.php?id=$di'> $file[$i] </a> 
				 </li>";
		}
	}

	echo "<br> <a href='index.php'> <button> CADASTRAR NOVAMENTE </button> </a>";

 