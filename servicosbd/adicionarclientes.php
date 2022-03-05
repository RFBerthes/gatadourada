<?php
	
	include("../conexao/bd.php");

	$dataNasc0 = $_POST["dataNasc"];

	$dataNasc2 = explode("/", $dataNasc0);
	$ano = $dataNasc2[2];
	$mes = $dataNasc2[1];
	$dia = $dataNasc2[0];
	$dataNasc = "$ano"."-"."$mes"."-"."$dia";

	$nomeCliente = $_POST["nomeCliente"];
	$idade = $_POST["idade"];
	$genero = $_POST["genero"];
	$numero = $_POST["numero"];
	$email = $_POST["email"];
	$profissao = $_POST["profissao"];
	$fototipo = $_POST["fototipo"];
	$bronzeAntes = $_POST["bronzeAntes"];
	$pele = $_POST["pele"];
	$respiratorio = $_POST["respiratorio"];
	$respiratorioDesc = $_POST["respiratorioDesc"];
	$hipertensao = $_POST["hipertensao"];
	$degenerativa = $_POST["degenerativa"];
	$alergia = $_POST["alergia"];
	$alergiaDesc = $_POST["alergiaDesc"];
	$ferimentoTatuagem = $_POST["ferimentoTatuagem"];
	$ferimentoTatuagemDesc = $_POST["ferimentoTatuagemDesc"];
	$hematoma = $_POST["hematoma"];
	$hematomaDesc = $_POST["hematomaDesc"];
	$medicacao = $_POST["medicacao"];
	$medicacaoDesc = $_POST["medicacaoDesc"];
	$transpiracao = $_POST["transpiracao"];
	$transpiraçãoDesc = $_POST["transpiraçãoDesc"];
	$depilacao = $_POST["depilacao"];
	$depilacaoDesc = $_POST["depilacaoDesc"];
	$vitiligo = $_POST["vitiligo"];
	$vitiligoDesc = $_POST["vitiligoDesc"];
	$psoriase = $_POST["psoriase"];
	$autorizacao = $_POST["autorizacao"];

	$query = "INSERT INTO `clientes`(IdCliente,
	`nomeCliente`, 
	`dataNasc`, 
	`idade`, 
	`dataAlt`,
	`genero`, 
	`numero`, 
	`email`, 
	`profissao`, 
	`fototipo`, 
	`bronzeAntes`, 
	`pele`, 
	`respiratorio`,
	`respiratorioDesc`, 
	`hipertensao`, 
	`degenerativa`, 
	`alergia`, 
	`alergiaDesc`, 
	`ferimentoTatuagem`, 
	`ferimentoTatuagemDesc`, 
	`hematoma`, 
	`hematomaDesc`, 
	`medicacao`, 
	`medicacaoDesc`, 
	`transpiracao`, 
	`transpiraçãoDesc`, 
	`depilacao`, 
	`depilacaoDesc`, 
	`vitiligo`, 
	`vitiligoDesc`, 
	`psoriase`, 
	`autorizacao`) VALUES (NULL,
	'$nomeCliente',
	'$dataNasc',
	'$idade',
	'',
	'$genero',
	'$numero',
	'$email',
	'$profissao',
	'$fototipo',
	'$bronzeAntes',
	'$pele',
	'$respiratorio',
	'$respiratorioDesc',
	'$hipertensao',
	'$degenerativa',
	'$alergia',
	'$alergiaDesc',
	'$ferimentoTatuagem',
	'$ferimentoTatuagemDesc',
	'$hematoma',
	'$hematomaDesc',
	'$medicacao',
	'$medicacaoDesc',
	'$transpiracao',
	'$transpiraçãoDesc',
	'$depilacao',
	'$depilacaoDesc',
	'$vitiligo',
	'$vitiligoDesc',
	'$psoriase',
	'$autorizacao'";

	if($mysqli->query($query)){
		echo "Registrou";
		header ("location: ../clientes");
	}else{
		echo '<script type="text/javascript">
			alert("Não foi possível adicionar o usuário! Tente novamente!");
			window.location.href="../clientes";
			</script>';

		
	}
?>