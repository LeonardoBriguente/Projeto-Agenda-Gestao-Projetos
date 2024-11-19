<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/553722128b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type ="text/css" href="assets/css/formAgendamentos.css">
    <title>Página Inicial</title>
</head>

<body>
    <?php require "header.php"; ?>

    <div class="form-container">
        <h1>Agendamento</h1>
        <form action="#" method="POST">
            <div class="div-grid">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Informe o nome" required>
                <button type="button" class="btn-buscar">Buscar cliente</button>
            
            
                <label for="telefone">Telefone</label>
                <input type="tel" id="telefone" name="telefone" placeholder="(xx) xxxxx-xxxx" required>
           
            
                <label for="inicio">Início</label>
                <input type="time" id="inicio" name="inicio" required>
           
                <label for="termino">Término</label>
                <input type="time" id="termino" name="termino" required>
            </div>
            <div>
                <label for="profissional">Profissional</label>
                <select id="profissional" name="profissional" required>
                    <option value="" disabled selected>Selecione o profissional</option>
                    <!-- Adicione as opções dos profissionais aqui -->
                </select>
            </div>
            <div>
                <label for="servicos">Serviços</label>
                <select id="servicos" name="servicos[]" multiple required>
                    <option value="" disabled>Selecione o(s) serviço(s)</option>
                    <!-- Adicione as opções de serviços aqui -->
                </select>
            </div>
            <div>
                <label for="observacoes">Observações</label>
                <textarea id="observacoes" name="observacoes" rows="4" placeholder="Escreva observações"></textarea>
            </div>
            <button type="submit">Realizar agendamento</button>
        </form>
    </div>
</body>

</html>