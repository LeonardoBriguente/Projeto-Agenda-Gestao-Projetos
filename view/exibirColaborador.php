<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/553722128b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/exibirColaborador.css">

    <title>Exibir Colaborador</title>
</head>
<body>
    <?php require "../view/header.php"?>
    <section class="area-tabela">
        <h1 class="titulo">Consulta de Colaborador</h1>
        <form class="campo-busca" method="post" action="">
            <input type="search" id="busca-colaborador" placeholder="Busque um colaborador">
            <input class="btn-send" type="submit" name="send" value="Enviar">
        </form>
        <table class="tabela-exibicao">
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Data de Nascimento</th>
                <th>CPF</th>
                <th>E-Mail</th>
                <th>Logradouro</th>
                <th>Nº</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Complemento</th>
                <th>Função</th>
            </tr>
        </table>
    </section>
    

</body>
</html>