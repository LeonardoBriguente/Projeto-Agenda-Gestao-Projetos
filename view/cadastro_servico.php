<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/553722128b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type ="text/css" href="assets/css/form-servicos.css">
    <title>Página Inicial</title>
</head>

<body>
    <?php require "header.php"; ?>

    <div class="box-form">
        <h1>Cadastro de Serviço</h1>
        <form action="POST">
            <label>Serviço</label>
            <input type="text" placeholder="Digite o nome do serviço" name="input-nomeservico">
            <label >Categoria</label>
            <select name="opcion">
                <option value="1">Serviços de Unhas</option>
                <option value="2">Serviços de Cabelo</option>
                <option value="3">Serviços Estéticos</option>
                <option value="4">Embelezamento</option>
            </select>
            <input class="botao-enviar" type="submit" value="Enviar">            
        </form>
    </div>
</body>

</html>