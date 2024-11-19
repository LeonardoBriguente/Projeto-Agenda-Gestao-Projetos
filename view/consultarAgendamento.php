<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/553722128b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/consultarAgendamento.css">

    <title>Consultar Agendamento</title>
</head>
<body>
    <?php require "./header.php"?>
    <div class="area-agendamento">
        <h1 class="titulo">Agendamento</h1>
        <form class="form-agendamento" action="">
            <div class="grupo-agendamento">
                <div class="item-agendamento">
                    <label for="output-nomeAgenda">Nome</label>
                    <input type="text" id="output-nomeAgenda" name="output-nomeAgenda" placeholder="Nome do cliente" readonly>
                </div>
                <div class="item-agendamento">
                    <label for="output-telefoneAgenda">Telefone</label>
                    <input type="text" id="output-telefoneAgenda" name="output-telefoneAgenda" placeholder="(XX) XXXXX-XXXX" readonly>
                </div>
            </div>
            <div class="grupo-agendamento">
                <div class="item-agendamento">
                    <label for="output-inicioAgenda">Início</label>
                    <input type="text" class="output-horario" id="output-inicioAgenda" name="output-inicioAgenda" placeholder="00:00" readonly>
                </div>
                <div class="item-agendamento">
                    <label for="output-terminoAgenda">Término</label>
                    <input type="text" class="output-horario" id="output-terminoAgenda" name="output-terminoAgenda" placeholder="00:00" readonly>
                </div>
            </div>
            <label for="output-profissionalAgenda">Profissional</label>
            <input type="text" id="output-profissionalAgenda" name="output-profissionalAgenda" placeholder="Profissional responsável" readonly>
            <label for="output-servicoAgenda">Serviço</label>
            <input type="text" class="caixa-texto" id="output-servicoAgenda" name="output-servicoAgenda" placeholder="Serviços prestados" readonly>
            <label for="output-observacaoAgenda">Observação</label>
            <input type="text" class="caixa-texto" id="output-observacaoAgenda" name="output-observacaoAgenda" placeholder="Observação do serviço" readonly>
        </form>
    </div>
</body>
</html>