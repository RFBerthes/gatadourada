<?php
	
	include("../conexao/bd.php");
	$idCliente = $_POST['idCliente'];
	$dataNasc0 = $_POST["dataNasc"];
	//explode DataNasc
	$dataNasc2 = explode("/", $dataNasc0);
	$ano = $dataNasc2[2];
	$mes = $dataNasc2[1];
	$dia = $dataNasc2[0];
	$dataNasc = "$ano"."-"."$mes"."-"."$dia";

	//data atual
	$anoAtual   = date("Y");
    $mesAtual   = date("m");
    $diaAtual   = date("d");

	//Calculo idade
    $idade      = $anoAtual - $ano;
    if ($mesAtual < $mes){
        $idade -= 1;
    } elseif ( ($mesAtual == $mes) && ($diaAtual <= $dia) ){
        $idade -= 1;
    }

	$nomeCliente = $_POST["nomeCliente"];
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
	$transpiracaoDesc = $_POST["transpiracaoDesc"];
	$depilacao = $_POST["depilacao"];
	$depilacaoDesc = $_POST["depilacaoDesc"];
	$vitiligo = $_POST["vitiligo"];
	$vitiligoDesc = $_POST["vitiligoDesc"];
	$psoriase = $_POST["psoriase"];
	$autorizacao = $_POST["autorizacao"];

	$query = "UPDATE `clientes` SET 
	`nomeCliente` = '$nomeCliente',
	`dataNasc` = '$dataNasc',
	`idade` = '$idade',
	`dataAlt` = CURRENT_TIMESTAMP,
	`genero` = '$genero',
	`numero` = '$numero',
	`email` = '$email',
	`profissao` = '$profissao',
	`fototipo` = '$fototipo',
	`bronzeAntes` = '$bronzeAntes',
	`pele` = '$pele',
	`respiratorio` = '$respiratorio',
	`respiratorioDesc` = '$respiratorioDesc',
	`hipertensao` = '$hipertensao',
	`degenerativa` = '$degenerativa',
	`alergia` = '$alergia',
	`alergiaDesc` = '$alergiaDesc',
	`ferimentoTatuagem` = '$ferimentoTatuagem',
	`ferimentoTatuagemDesc` = '$ferimentoTatuagemDesc',
	`hematoma` = '$hematoma',
	`hematomaDesc` = '$hematomaDesc',
	`medicacao` = '$medicacao',
	`medicacaoDesc` = '$medicacaoDesc',
	`transpiracao` = '$transpiracao',
	`transpiracaoDesc` = '$transpiracaoDesc',
	`depilacao` = '$depilacao',
	`depilacaoDesc` = '$depilacaoDesc',
	`vitiligo` = '$vitiligo',
	`vitiligoDesc` = '$vitiligoDesc',
	`psoriase` = '$psoriase',
	`autorizacao` = '$autorizacao'
	WHERE `idCliente`='$idCliente'";

	if($mysqli->query($query)){
		echo "Atualizou";
		header ("location: ../clientes");
	}else{
		echo '<script type="text/javascript">
			alert("Não foi possível editar o cliente!");
			window.location.href="../clientes";
			</script>';

		
	}
