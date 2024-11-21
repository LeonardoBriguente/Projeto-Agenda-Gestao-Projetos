<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/553722128b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/exibirCliente.css">

    <title>Exibir Clientes</title>
    
</head>
<body>
    <?php require "header.php"; ?>

    <section class="area-tabela">
        <h1 class="titulo">Consulta de Cliente</h1>
        <form class="campo-busca" method="POST" action="">
            <input type="search" id="buscar-cliente" placeholder="Busque um Cliente (ID, Nome ou Telefone)">
            <span class="btn-send" type="submit" name="send" value="Enviar"> X </span>
        </form>
        <table class="tabela-exibicao">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Logradouro</th>
                <th>Número</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Telefone</th>
    
            </tr>
        </table>
    </section>