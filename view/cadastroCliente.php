<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/553722128b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type ="text/css" href="assets/css/formCliente.css">
    <title>Cadastro de Cliente</title>
</head>

<body>
    <?php require "header.php"; ?>

    <div class="box-form">
        <h1>Cadastro de Cliente</h1>
        <form action="POST">

            <label>Nome</label>
            <input type="text" placeholder="Digite o nome completo" name="input-nomeCliente">

            <section class="form-box-line">
                <div class="form-line1">
                    <label>Logradouro</label>
                    <input type="text" placeholder="Digite o Endereço" name="input-endereçoCliente">
                </div>
                

                <div class="form-line2">
                    <label>Numero</label>
                    <input type="text" placeholder="Número" name="input-numeroEnderecoCliente">
                </div>
            
            </section>
            

            <label>Bairro</label>
            <input type="text" placeholder="Digite o bairro" name="input-bairroCliente">

            <label>Cidade</label>
            <input type="text" placeholder="Digite a cidade" name="input-cidadeCliente">

            <label>Telefone</label>
            <input type="text" placeholder="(XX) XXXXX-XXXX" name="input-telefoneCliente">

            <input class="botao-enviar" type="submit" value="Enviar">            
        </form>
    </div>
</body>

</html>