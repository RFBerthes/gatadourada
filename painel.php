<?php
// session_start();
include("servicosbd/verifica_login.php");
include("conexao/bd.php");
define("raiz", "/gatadourada/");
?>
<!DOCTYPE html>

<html lang="pt-BR">

<head>
	<meta charset="utf-8" />
	<meta name="description" content="Titulo" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Gata Dourada 1.0</title>
	<link rel="stylesheet" href="<?php echo raiz ?>bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo raiz ?>bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" href="<?php echo raiz ?>media/css/style.css">
	<link rel="stylesheet" href="<?php echo raiz ?>media/css/lateral.css">
	<link rel="stylesheet" href="<?php echo raiz ?>media/css/jquery.autocomplete.css">
	<!-- <link rel="icon" type="image/ico" href="<?php echo raiz ?>media/imagens/LOGO.ico" />  -->
	<link rel="stylesheet" href="<?php echo raiz ?>font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo raiz ?>media/css/jquery-ui-1.10.1.custom.css">
	<link rel="stylesheet" href="<?php echo raiz ?>media/css/fullcalendar.css">
</head>

<body style="background: none">
	<script type="text/javascript" src="<?php echo raiz ?>media/js/jquery-1.11.2.js"></script>
	<script type="text/javascript" src="<?php echo raiz ?>media/js/jquery-ui.js"></script>
	<script type="text/javascript" src="<?php echo raiz ?>media/js/fullcalendar.min.js"></script>
	<script type="text/javascript" src="<?php echo raiz ?>media/js/jquery.maskedinput.js"></script>

	<script type='text/javascript'>
		$(function() {
			$('#agenda').fullCalendar({
				defaultView: 'month',
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay'

				},
				//editable: true,

				events: "<?php echo raiz ?>conexao/events.php"
			});
		});
	</script>
	<script type='text/javascript'>
		$(function() {
			$('#calendario').fullCalendar({

				defaultView: 'agendaDay',

				//editable: true,

				events: "<?php echo raiz ?>conexao/events.php"
			});
		});
	</script>
	<script>
		$(document).ready(function() {
			$(".date").datepicker({
				dateFormat: 'dd/mm/yy',
				dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
				dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
				dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
				monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
				monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
				nextText: 'Próximo',
				prevText: 'Anterior'
			});
		});
	</script>
	<script>
		jQuery(function($) {
			$(".data").mask("99/99/9999");
			//$(".telefone").mask("(99)9999-9999");
			$(".hora").mask("99:99");
		});
	</script>
	<script type='text/javascript'>
		//<![CDATA[ 
		$(function() {
			var maskBehavior = function(val) {
					return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
				},
				options = {
					onKeyPress: function(val, e, field, options) {
						field.mask(maskBehavior.apply({}, arguments), options);
					}
				};

			$('.telefone').mask(maskBehavior, options);
		}); //]]>  
	</script>

	<script src="<?php echo raiz ?>bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo raiz ?>bootstrap/js/bootstrap.js"></script>

	<?php

				include("lateral.php");
	?>
				
				<div id="conteudo" class="col-md-12">

				<?php
            //Menu do cabeçalho
            $menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] : "home";
            switch ($menuop) {
                case 'home':
                    include("paginas/home.php");
                    break;
                case 'clientes':
                    include("paginas/clientes.php");
                    break;
                case 'agenda':
                    include("paginas/agenda.php");
                    break;
                case 'financeiro':
                    include("paginas/financeiro.php");
                    break;

                default:
                    include("../painel.php");
                    break;
            }
            ?>
				</div>


</body>

</html>