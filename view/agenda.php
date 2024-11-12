<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/553722128b.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/javascript/agenda.js" defer></script>
    <link rel="stylesheet" type="text/css" href="/projetogp/view/assets/css/agenda.css">

    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js'></script>
    <title>Página Inicial</title>
</head>

<body>
    <?php require "header.php"; ?>


    <main class="calendar-conteiner">
        <section class="controll-calendar">
            <!-- Botões de seleção do mês -->
        </section>

        <section class="calendar">
            <div id="calendar"></div>
        </section>
        <!-- IDEIA: Estruturar a aegdan dentro da Main, ela focara ao lado esquerdo do visor -->
    </main>

    <section class="diario">
        <!-- IDEIA: Seção onde os atendimentos do dia selecionado serão exibidos com clareza -->
    </section>
    <!-- Elaborar a agenda utilizando html e css para o calendário. JS pode ser usando para interação com a agenda. Estudar sobre a classe Date do JS-->
</body>

</html>