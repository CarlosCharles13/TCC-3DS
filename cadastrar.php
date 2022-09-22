<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="assets/css/css_cadastrar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
    crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/css/fonts.css">
</head>
<body style="background-color: #ADD9D1;">
    <h1 style="float: left;">Cadastrar</h1>
    <a href="menu.php" style="font-size: 37px; color:#FFF; display: flex; justify-content:end; text-decoration: none;"><i class="far fa-arrow-alt-circle-left"></i></a>
    <form class="form-control" id="form">
        <div>
        <label for="nome">Nome</label><br>
        <input type="text" name="nome" id="nome" placeholder="Nome" class="form-control">
        <br>
        </div>
        <div>
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" placeholder="user@email.com" class="form-control">
        <br>
        </div>
        <div>
        <label for="telefone">Telefone</label><br>
        <input type="tel" name="telefone" id="telefone" placeholder="(15) 99999-9999" class="form-control">
        <br>
        </div>
        <div>
        <label for="endereco">Endereço</label><br>
        <input type="text" name="endereco" id="endereco" placeholder="Rua ..." class="form-control">
        <br>
        </div>
        <div>
        <label for="data_nasc">Data de Nascimento</label><br>
        <input type="date" name="data_nasc" id="data_nasc" class="form-control">
        </div>
        <div>
        <br>
        <div class="botoes">
            <button type="submit" class="cadastrar">Cadastrar</button>
            <button type="reset" class="cancelar">Cancelar</button>
        </div>
        </div>
    </form>
</body>
</html>