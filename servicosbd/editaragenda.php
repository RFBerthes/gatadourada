<?php

include("../conexao/bd.php");

//recupera id cliente incial
$idClienteAltera = $_POST['idClienteAltera'];
echo $idClienteAltera;
//recupera id agendamento para alteração
$idAgendamento = $_POST["idAgendamento"];
echo $idAgendamento;

//verifica se teve alteração de cliente
$idCliente = $_POST["idCliente"];
if ($idCliente != $idClienteAltera) {
	$idCliente = $idClienteAltera;
};

//Recuperando nome do Cliente selecionado
$queryNome = "SELECT `nomeCliente` FROM clientes WHERE `idCliente` = '$idCliente'";
$result = $mysqli->query($queryNome);
$row = $result->fetch_assoc();
$nomeCliente = $row['nomeCliente'];


$start = $_POST["start"];
$dt_fim = $_POST["dt_fim"];
$hr_inicio = $_POST["hr_inicio"];
$hr_fim = $_POST["hr_fim"];
$id_servico = $_POST["servico"];
$id_adicional = $_POST["adicional"];
$observacao = $_POST["observacao"];
$status = 1;
$valor = $_POST["valor"];
$forma_pagamento = $_POST["forma_pagamento"];


//usa explode pra explodir o que tem na variavel
$dt_inicio = explode("/", $start);
//pega as pocicoes e colocam dentro de suas respectiveis variaveis
$ano = $dt_inicio[2];
$mes = $dt_inicio[1];
$dia = $dt_inicio[0];
//acrescenta :00 (segundos) no valor de horas
$hr_inicio = "$hr_inicio" . ":00";
$hr_fim = "$hr_fim" . ":00";
//concatena a data no novo estilo com traços mais a hora virando datetime
$start = "$ano" . "-" . "$mes" . "-" . "$dia" . " " . "$hr_inicio";
$end = "$ano" . "-" . "$mes" . "-" . "$dia" . " " . "$hr_fim";

$query = "UPDATE `agenda` SET 
`title`='$nomeCliente', 
`start`='$start', 
`end`='$end', 
`status`='$status', 
`observacao`='$observacao', 
`valor`='$valor', 
`forma_pagamento`='$forma_pagamento', 
`clientes_id`='$idCliente', 
`servicos_idServico`='$id_servico', 
`adicionais_idAdicionais`='$id_adicional' WHERE `idAgendamento`='$idAgendamento'";


if ($mysqli->query($query)) {
	echo "Atualizou";
} else {
	echo "Erro";
	mysqli_error($mysqli);
}
mysqli_close($mysqli);
header("location: ../agenda");
