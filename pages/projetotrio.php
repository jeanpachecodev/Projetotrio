<?php

echo "<h1> Dados Enviados </h1>";
echo "<p>Torcedor:  {$_POST['nome']} </p>";
echo "===================================================";

echo "<p>cpf: " .  $_POST['cpf'] . "</p>";

echo "<p>Frequenta o estadio?: " . $_POST['frequencia'] . "</p>";

 $socio = (isset($_POST['socio']) ? "sim" :'Não');
echo "<p>É socio totrcedor?: " . $_POST['socio'] . "</p>";

 $camisa = (isset($_POST['camisa']) ? "sim" :'Não');
echo "<p>Possui camisa oficial?: " . $_POST['camisa'] . "</p>";


echo "<p>Time do coração: " . $_POST['time'] . "</p>";


?>