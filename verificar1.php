<?php
$puntos = 0;
$nombre = $_POST["usuario"];
$email = $_POST["correo"];
$edad = $_POST["edad"];
echo "<head><link rel='stylesheet' type='text/css' href='pruebasC.css'>";
echo "<title>Pruebas</title></head><body background='fondo.jpg'>";
echo "<div>";
for($i = 1;$i <= 20;$i++){
	if(($pregunta = $_POST["numero".$i])== null || $pregunta == ""){
		echo "<h3>Responde la pregunta ".$i."</h3>";
		break;
	}else{
		$pregunta = $_POST["numero".$i];
		if($pregunta == "1"){
			$puntos++;
		}
		if($pregunta == "2"){
			$puntos=$puntos+2;
		}
		if($pregunta == "3"){
			$puntos=$puntos+3;
		}
		if($pregunta == "4"){
			$puntos=$puntos+4;
		}
		if($pregunta == "5"){
			$puntos=$puntos+5;
		}
		if($i==20){
			if($puntos<=33){
				echo "<p id='result'>Felicidades ".$nombre.", obtuviste ".$puntos." de 100 puntos, No eres adicto.</p><br>";
			}
			if($puntos>33&&$puntos<=66){
				echo "<p id='result'>Muy bien ".$nombre.", obtuviste ".$puntos." de 100 puntos, Casi adicto a internet.</p><br>";
			}
			if($puntos>66&&$puntos<=100){
				echo "<p id='result'>Oh No! ".$nombre.", obtuviste ".$puntos." de 100 puntos,Eres Adicto a internet.</p><br>";
			}
		}		
	}
}
echo "<br><p>Correo: ".$email."</p><p>Edad: ".$edad."</p>";
echo "</div>";
?>