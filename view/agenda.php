<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/553722128b.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/javascript/agenda.js" defer></script>
    <link rel="stylesheet" type="text/css" href="/projetogp/view/assets/css/agenda.css">
    <title>Página Inicial</title>
</head>

<body>
    <?php require "header.php"; ?>

    <main class="calendar-conteiner">
        <section class="controll-calendar">
            <button id="prevMonth">Mês Anterior</button>
            <h2 id="month-title"></h2>
            <button id="nextMonth">Próximo Mês</button>
        </section>

        <section class="calendar">
            <div id="calendar">
                <table>
                    <thead>
                        <tr>
                            <!-- Dias da semana fixos no HTML -->
                            <th class="day-name">Dom</th>
                            <th class="day-name">Seg</th>
                            <th class="day-name">Ter</th>
                            <th class="day-name">Qua</th>
                            <th class="day-name">Qui</th>
                            <th class="day-name">Sex</th>
                            <th class="day-name">Sáb</th>
                        </tr>
                    </thead>
                    <tbody id="calendar-body">
                        <!-- Os dias serão inseridos aqui dinamicamente -->
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <section class="diario"></section>
</body>

</html>
