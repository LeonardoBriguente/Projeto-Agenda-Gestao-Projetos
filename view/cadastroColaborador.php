<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/553722128b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/formColaborador.css">
    <title>Cadastrar Colaborador</title>
</head>

<body>
    <?php require "../view/header.php"; ?>    
    <div class="form">
        <h1>Cadastro de Colaborador</h1>
        <form class="box-form" method="post" action="">
                <section class="form-group">
                    <label for="input-nomecolab">Nome</label>
                    <input type="text" id="input-nomecolab" name="input-nomecolab" placeholder="Digite seu nome completo" required>
                    <label for="input-telefonecolab">Telefone</label>
                    <input type="text" id="input-telefonecolab" name="input-telefonecolab" placeholder="(XX)XXXXX-XXXX" required>
                    <label for="input-datanascimentocolab">Data de Nascimento</label>
                    <input type="date" id="input-datanascimentocolab" name="input-datanascimentocolab" required>
                    <label for="input-cpfcolab">CPF</label>
                    <input type="text" id="input-cpfcolab" name="input-cpfcolab" placeholder="XXX.XXX.XXX-XX" required>
                    <label for="input-emailcolab">E-Mail</label>
                    <input type="text" id="input-emailcolab" name="input-emailcolab" placeholder="Digite seu endereço de e-mail" required>          
                </section>
                <section class="form-group">
                    <section class="form-itens">
                        <div class="form-item">
                            <label for="input-logradourocolab">Logradouro</label>
                            <input type="text" id="input-logradourocolab" name="input-logradourocolab" placeholder="Digite seu endereço" required>
                        </div>
                        <div class="form-item" style="width: 10vw; margin-left: 7px">
                            <label for="input-numerocolab">Número</label>
                            <input type="text" id="input-numerocolab" name="input-numerocolab" placeholder="Nº do logradouro" required>
                        </div>
                    </section>
                    <label for="input-Bairro">Bairro</label>
                    <input type="text" id="input-Bairro" name="input-Bairro" placeholder="Digite seu bairro" required>
                    <label for="input-cidadecolab">Cidade</label>
                    <input type="text" id="input-cidadecolab" name="input-cidadecolab" placeholder="Digite sua cidade" required>
                    <label for="input-complementocolab">Complemento</label>
                    <input type="text" id="input-complementocolab" name="input-complementocolab" placeholder="Informe um complemento">
                    <label for="input-funcaocolab">Função</label>
                    <input type="text" id="input-funcaocolab" name="input-funcaocolab" placeholder="Informe sua função" required>
                </section>
            </form>
            <input class="btn-send" type="submit" name="send" value="Enviar">
    </div>
        
</body>

</html>