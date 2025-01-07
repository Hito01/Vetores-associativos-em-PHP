<?php
$timestamp = time();
$diasemana = array();
$mesano = array();
//Dias da semana
$diasemana[0] = "Domingo";
$diasemana[1] = "Segunda-feira";
$diasemana[2] = "Terça-feira";
$diasemana[3] = "Quarta-feira";
$diasemana[4] = "Quinta-feira";
$diasemana[5] = "Sexta-feira";
$diasemana[6] = "Sábado";
//Meses do ano
$mesano[1] = "Janeiro";
$mesano[2] = "Fevereiro";
$mesano[3] = "Março";
$mesano[4] = "Abril";
$mesano[5] = "Maio";
$mesano[6] = "Junho";
$mesano[7] = "Julho";
$mesano[8] = "Agosto";
$mesano[9] = "Setembro";
$mesano[10] = "Outubro";
$mesano[11] = "Novembro";
$mesano[12] ="Dezembro";
//Criar a variável que vai conter as informações da data
$dataActual = getdate();
$diaS = $dataActual["wday"];
$mes = $dataActual["mon"];
$ano = $dataActual["year"];
?>

<html lang="pt-pt">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Treinando a função data e hora</title>
 </head>
 <body>
<p><?php echo "Hoje é $diasemana[$diaS] de $mesano[$mes] de $ano";?></p>
</body>
</html>