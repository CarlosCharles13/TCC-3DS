<?php
	require_once 'lib/conn.php';

	setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	date_default_timezone_set('America/Sao_Paulo');
	$semana = date("D");
	$dia = date("d");
	function mes(){
		switch(mes("m")){
		case 1: return " Janeiro"; break;
		case 2: return " Fevereiro"; break;
		case 3: return " Março"; break;
		case 4: return " Abril"; break;
		case 5: return " Maio"; break;
		case 6: return " Junho"; break;
		case 7: return " Julho"; break;
		case 8: return " Agosto"; break;
		case 9: return " Setembro"; break;
		case 10: return " Outubro"; break;
		case 11: return " Novembro"; break;
		case 12: return " Dezembro"; break;
		default: return " Erro interno"; break;
		}
	}
	$ano = date("Y");
	$sql = "SELECT * FROM tbl_consulta INNER JOIN tbl_cliente ON tbl_consulta.id_cliente = tbl_cliente.id_cliente";
	$stmt = $conn->query($sql);
	$clientes = $stmt->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Agendamento</title>
	<link rel="shortcut icon" href="img/favicon.ico"/>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<script src="assets/js/jquery.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.js" type="text/javascript"></script>
	<link rel="stylesheet" href="assets/css/menu.css">
	<link rel="stylesheet" href="assets/css/fonts.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background: #1D858C; ">
		<a class="navbar-brand" href="#"><img src="assets/img/logo.png" style="width: 100%; height: 100px;" alt="Simbolo Psicologia"></a>
		
		<div style="color: #FFFFFF; margin: 0 auto ; text-align: center ; " class="navbar-expand "  >
			<h2 class="navbar navbar-justify-content center" > Maria Aparecida Ferreira Lima Evangelista </h2>
			<h4 >PSICÓLOGA </h4>
		</div>

		<div class="navbar-nav"  style="font-size: 32px; float:right;">
			<a href="cadastrar.php" class="nav-item nav-link"><i class="fas fa-plus-circle"></i></a>
			<a href="list_client.php" class= "nav-item nav-link" ><i class="fas fa-list"></i></a>
			<a href="#.php"  class="nav-item nav-link"><i class="fas fa-cog"></i></a>
		</div>
</nav>

	<div class="tabela">
	<table class="table table-bordered">
		<thead>
			<tr>
			<td scope="col" id="hoje">Hoje</td>
			<td scope="col">
			<?php
				echo strftime('%A, %d de %B de %Y', strtotime(('today')));
			?></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<?php
				foreach ($clientes as $cliente){
					?>
					<td><?= $cliente->hora_consulta ?></td>
					<td><?= $cliente->nome_cliente ?></td>
					<?php
				}
				?>
			</tr>
		</tbody>
	</table>
	</div>
    </body>
</html>