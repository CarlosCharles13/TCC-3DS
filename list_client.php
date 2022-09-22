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
  <link rel="stylesheet" href="assets/css/fonts.css">
</head>
<style>
	body{
		background-color: #ADD9D1;
	}
</style>

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

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          
        <div class="mx-auto" style="color: #FFF">
            <div class="d-flex justify-content-between">
              
            <h1>Cliente</h1>
              <a href="menu.php" style="font-size: 32px; color:#FFF"><i class="far fa-arrow-alt-circle-left"></i></a>
            </div>

            <table class="table table-striped table-light"  style="color: #000; text-align: center">
                <thead class="table table-striped ">
                    <tr>
                        <td scope="col">#</td>
                        <td scope="col">Nome</td>
                        <td scope="col">CPF</td>
                        <td scope="col">Idade</td>
                        <td scope="col">Endereço</td>
                        <td scope="col">Email</td>
                        <td scope="col">Telefone</td>
                        <th scope="col">Editar</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                  
                  <?php
                    require_once 'lib/conn.php';


                    $sql = "SELECT * FROM tbl_cliente INNER JOIN tbl_endereco ON tbl_cliente.id_endereco = tbl_endereco.id_endereco";
                    $buscaCliente = $conn->query($sql);
                    $cliente = $buscaCliente->fetchAll(PDO::FETCH_OBJ);
                    foreach ($cliente as $tbl_cliente) {
                  ?>
                      <tr>
                        <td><?= $tbl_cliente->id_cliente?></td>
                        <td><?= $tbl_cliente->nome_cliente ?></td>
                        <td><?= $tbl_cliente->cpf_cliente ?></td>                     
                        <td><?=$tbl_cliente->data_nasc?></td>

                        <td><?= "$tbl_cliente->cep_endereco "?><br><?= "$tbl_cliente->logradouro_endereco-N° $tbl_cliente->numero_endereco "?><br><?= " $tbl_cliente->bairro_endereco - $tbl_cliente->cidade_endereco-$tbl_cliente->estado_endereco"?></td>
                        
                        <td>
                        <a href="https://api.outlook.com/send?email=<?= $tbl_cliente->email_cliente?>"
                            class ="btn btn-outline-primary"
                            target="_blanck">
                            <i class="far fa-envelope"></i>
                            <?=$tbl_cliente->email_cliente?>

                        </td>
                        
                        <td>                        
                            <a 
                              href="https://api.whatsapp.com/send?phone=55<?= $tbl_cliente->ddd_cliente.$tbl_cliente->telefone_cliente ?>" 
                              class="btn btn-outline-success"
                              target="_blank">
                            <i class="fab fa-whatsapp"></i> <?="($tbl_cliente->ddd_cliente) $tbl_cliente->telefone_cliente" ?>
                            </a>
                          </td>

                        <td>
                        <a href="Edit_client.php?id_cliente=<?= $tbl_cliente->id_cliente ?>" 
                        class="btn btn-outline-dark">
                        <i class="far fa-edit"></i></td>
 
                        <td> 
                          <a href="delete_cliente.php?id_cliente=<?= $tbl_cliente->id_cliente ?>" 
                          class="btn btn-outline-dark">
                            <i class="far fa-trash-alt"></i> 
                        </td>

                    </tr>
                  <?php
                    }
                  ?>
                </tbody>
            </table>
          </div>
      </div>
    </div>
  </div>
</body>
</html>