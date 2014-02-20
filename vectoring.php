<?php
// O '0+' foi utilizado para converter o valor coletado para inteiro.

//E aí? O seu?
//eu fui falar com bruno e ele disse que nós nos bas.... pelo q ele mandou, diz o q é e explica como o codigo funciona e utiliza imagens, diferentes das que tem la, para 
$x1=0+$_GET["x"]; 
$y1=0+$_GET["y"];
$z1 =0+$_GET["z"];

$p = 1;

for ($i=0;$i<=11;$i++){

	if ($y1>=0){
		$x2=$x1+$y1/$p;
		$y2=$y1-$x1/$p;
		$z2=$z1+atan(1/($p));
		
	}
	else{
		$x2=$x1-$y1/$p;
		$y2=$y1+$x1/$p;
		$z2=$z1-atan(1/($p)); // atan(1/($p)): Utilizado para indicar o cálculo do arco tangente.
	}
	$z1 = $z2;
	$x1 = $x2;
	$y1 = $y2;	
	$p *= 2;
}
//Problema no arco tangente
$x1 = $x1/1.6467;
//$z1 = $z1-1;
?>
<html>
<head>
<title> CORDIC Vectoring </title>
<style type="text/css">
#container{
	width:600px;
	height: 500px;
	margin:auto;
	box-shadow:2px 0 3px #000, -2px 0 3px #000;
	border-radius:10px;
}
#center{
	width:84%;
	height: 350px;
}
#caixas{
	width: 400px;
	height: 325px;
	background-color:#EFEFEF;
	float: right;
	border-radius:10px;
	margin-top: 90px;
}
#select{
	position: absolute;
	margin: 50px;
}
a{
	text-decoration:none;
	color:#000000;
}
#rodape{
	background: black;
	width: 600px;
	height: 20px;
	clear:both;
	color:#FFFFFF;
	position: absolute;
	margin-top:130px;
	border-radius: 0 0 10px 10px;
}		
</style>
</head>
<body>
<div id="container">
	<div id="center">
		<div id="caixas">
				<h3>CORDIC Vectoring</h3>
			<div id="select">
			<?php
				echo "O valor da raiz quadrada de x² +  y² eh :".$x1."</br>";
				echo "O Y convergiu ate :".$y1."</br>";
				echo "O valor da atan(y/x) eh: ".$z1."</br>";
			?>
				</br>
				<a href="index.html"> Voltar </a>
				</form>
			</div>
		</div>
	</div>
	<div id="rodape">
		Developed by Aline Alves e Jaíne Chianca
	</div>
</div>
</body>
</html>
<?php
?>
		
		
		
		
