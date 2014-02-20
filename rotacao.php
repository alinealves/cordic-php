<?php
$x1 = 0+$_GET["x"];
$y1 = 0+$_GET["y"];
$z1 = eval("return ".$_GET["z"].";");
$p = 1;

for ($i = 0;$i <= 11;$i++){
	if ($z1 >= 0) {
		$x2 = $x1-$y1/$p;
		$y2 = $y1+$x1/$p;
		$z2 = $z1-atan(1/$p);
	} 
	else{ 
		$x2 = $x1+$y1/$p;
		$y2 = $y1-$x1/$p;
		$z2 = $z1+atan(1/$p);
	}
	
	$z1 = $z2;
	$x1 = $x2;
	$y1 = $y2;
	$p *= 2;
}	
//Acontecendo problema no de 180
$x1 = $x1/1.6467;
$y1 = $y1/1.6467;
if ($z1 >= 0) {
?>
<html>
<head>
<title> CORDIC Rotation</title>
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
				<h3>CORDIC Rotation</h3>
			<div id="select">
			<?php

	echo "O cosseno do angulo eh ".$x1."</br>";
	echo "O seno do angulo eh ".$y1."</br>";
	echo "O angulo convergiu ate: ".$z1."</br>";
	?>
	
		</br>
		<a href="index.html"> Voltar </a>
			</div>
		</div>
	</div>
</div>	
<?php
}
else{
?>
<div id="container">
	<div id="center">
		<div id="caixas">
				<h3>CORDIC Rotation</h3>
			<div id="select">
			<?php
	echo "O seno do angulo eh ".$x1."</br>";
	echo "O cosseno do angulo eh ".$y1."</br>";
	echo "O angulo convergiu ate: ".$z1."</br>";
	}
?>
	<div id="rodape">
		Developed by Aline Alves e Jaíne Chianca
	</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php
?>

