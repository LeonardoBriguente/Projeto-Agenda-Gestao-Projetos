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
            <button type="button" class="btn-buscar">Buscar cliente</button>
            <div class="div-grid">
                <div>
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="input-nome" placeholder="Informe o nome" required>
                </div>
                <div>
                    <label for="telefone">Telefone</label>
                    <input type="tel" id="telefone" name="input-telefone" placeholder="(xx) xxxxx-xxxx" required>
                </div>
                <div>
                    <label for="inicio">Início</label>
                    <input type="time" id="inicio" name="input-inicio" required>
                </div>
                <div>
                    <label for="termino">Término</label>
                    <input type="time" id="termino" name="input-termino" required>
                </div>    
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
                    <option value="" disabled selected>Selecione o(s) serviço(s)</option>
                    <!-- Adicione as opções de serviços aqui -->
                    <!-- Acho melhor colocar multiple required aqui, pois o agendamento pode ter mais de um tipo de serviço incluso -->
                </select>
            </div>
            <div>
                <label for="observacoes">Observações</label>
                <textarea id="observacoes" name="observacoes" rows="4" placeholder="Escreva observações"></textarea>
            </div>
            <button class="btn-agendamento" type="submit">Realizar agendamento</button>
        </form>
    </div>
</body>

</html>