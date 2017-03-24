<html>
	<head>
		<meta charset="utf-8">
	<head>
	<body>
		<div style="text-align:center;background-color:black;color:white;padding:10px;">
		<h1 style="color:green;">Cálculo de IMC</h1>
		<form action="imc.php" method="POST">
			Nome:<br><input type="textarea" name="nome"><br><br>
			Masculino <input type="radio" name="sexo" value="M"><br>
			Feminino <input type="radio" name="sexo" value="F"><br><br>	
			Peso:<br><input type="textarea" name="peso"><br><br>
			Altura:(em metros e separada por ponto)<br><input type="textarea" name="altura"><br><br>
			<input type="submit" name="calcular" value="Calcular">
		</form>
		<center>
		<?php
			if(isset($_POST["nome"])){
				$imc = ($_POST["peso"]) / ($_POST["altura"] * $_POST["altura"] );
				$imc = number_format($imc,1);
				if($_POST["sexo"]=="F"){
					if($imc>39){
						echo $_POST["nome"]."<br>";
						echo "Obesidade mórbida";
						
					}elseif($imc>=29 && $imc<=38.9){
						echo $_POST["nome"]."<br>";
						echo "Obesidade Moderada";
						
					}elseif($imc>=24 && $imc<=28.9){
						echo $_POST["nome"]."<br>";	
						echo "Obesidade leve";
						
					}elseif($imc>=19 && $imc<=23.9){
						echo $_POST["nome"]."<br>";		
						echo "Normal";
						
					}elseif($imc<19){
						echo $_POST["nome"]."<br>";				
						echo "Abaixo do normal";
						
					}
				}elseif($_POST["sexo"]=="M"){
					if($imc>43){
						echo $_POST["nome"]."<br>";			
						echo "Obesidade mórbida";
						
					}elseif($imc>=30 && $imc<=39.9){
						echo $_POST["nome"]."<br>";			
						echo "Obesidade Moderada";
						
					}elseif($imc>=25 && $imc<=29.9){
						echo $_POST["nome"]."<br>";			
						echo "Obesidade leve";
						
					}elseif($imc>=20 && $imc<=24.9){
						echo $_POST["nome"]."<br>";			
						echo "Normal";
						
					}elseif($imc<20){
						echo $_POST["nome"]."<br>";			
						echo "Abaixo do normal";
						
					}
					
				}
				
			}
		?>
		</center>
	</body>
</html>