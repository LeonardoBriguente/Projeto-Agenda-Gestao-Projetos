<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stima Studio Beauty - Relatórios</title>

    
    <style>
        /* Estilos básicos para estrutura e layout */
        body { font-family: Arial, sans-serif; }
        .filter-section { display: flex; justify-content: space-between; margin-top: 20px; }
        .filter-section div { margin-right: 10px; }
        .report-table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        .report-table, .report-table th, .report-table td { border: 1px solid #ccc; text-align: center; padding: 8px; }
        .pdf-button { text-align: right; margin-top: 10px; }
    </style>

    <script>
        // Função para mostrar ou ocultar as opções de "Atendimentos" e "Calendário" quando o usuário clica nos botões
        function toggleOptions(selectId) {
            // Se o botão "Atendimentos" for clicado, mostra as opções de atendimentos e oculta as de calendário
            document.getElementById('opcoes-atendimentos').style.display = selectId === 'atendimentos' ? 'block' : 'none';
            // Se o botão "Calendário" for clicado, mostra as opções de calendário e oculta as de atendimentos
            document.getElementById('opcoes-calendario').style.display = selectId === 'calendario' ? 'block' : 'none';
        }
    </script>
</head>
<body>
    <?php require "header.php"; ?>

    

        <!-- Seção de Filtros -->
        <div class="filter-section">
            <!-- Filtro de Atendimentos -->
            <div>
                <!-- Botão para mostrar opções de atendimentos (Realizados ou Cancelados) -->
                <button onclick="toggleOptions('atendimentos')">Atendimentos</button>
                <div id="opcoes-atendimentos" style="display:none; margin-top: 5px;">
                    <!-- Opções de atendimentos (Realizados e Cancelados) como botões de seleção (radio buttons) -->
                    <label><input type="radio" name="atendimentos" value="realizados"> Realizados</label><br>
                    <label><input type="radio" name="atendimentos" value="cancelados"> Cancelados</label>
                </div>
            </div>

            <!-- Filtro de Calendário -->
            <div>
                <!-- Botão para mostrar opções de calendário (Ano, Mês, Dia) -->
                <button onclick="toggleOptions('calendario')">Calendário</button>
                <div id="opcoes-calendario" style="display:none; margin-top: 5px;">
                    <!-- Seleção de Ano -->
                    <select id="ano">
                        <option value="">Ano</option>
                        <option value="2024">2022</option>
                        <option value="2024">2023</option>
                        <option value="2024">2024</option>
                    
                    </select><br>
                    <!-- Seleção de Mês -->
                    <select id="mes">
                        <option value="">Mês</option>
                        <option value="01">Janeiro</option>
                        <option value="02">Fevereiro</option>
                        <option value="03">Março</option>
                        <option value="04">Abril</option>
                        <option value="05">Maio</option>
                        <option value="06">Junho</option>
                        <option value="07">Julho</option>
                        <option value="08">Agosto</option>
                        <option value="09">Setembro</option>
                        <option value="10">Outubro</option>
                        <option value="11">Novembro</option>
                        <option value="12">Dezembro</option>
                    </select><br>
                    <!-- Seleção de Dia -->
                    <select id="dia">
                        <option value="">Dia</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                </div>
            </div>

            <!-- Botão de Busca -->
            <div>
                <!-- Botão para buscar o relatório com os filtros selecionados -->
                <button onclick="buscarRelatorio()">Buscar</button>
            </div>
        </div>
        <!-- Tabela de Relatórios -->
        <!-- A tabela está inicialmente oculta e será exibida após o usuário clicar em "Buscar" -->
        <div id="relatorio-section" style="display: none;">
            <table class="report-table">
                <thead>
                    <tr>
                        <th>Total</th>
                        <th>Serviço</th>
                        <th>Dia</th>
                        <th>Mês</th>
                        <th>Ano</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody id="relatorio-body">
                    <!-- Linhas de relatório serão inseridas aqui via JavaScript após a busca -->
                </tbody>
            </table>

            <!-- Botão para Gerar PDF -->
            <div class="pdf-button">
                <!-- Este botão acionaria uma funcionalidade para gerar PDF (não implementada neste exemplo) -->
                <button onclick="gerarPDF()">PDF</button>
            </div>
        </div>
    </div>

    <script>
        // Função para buscar o relatório com base nos filtros
        function buscarRelatorio() {
            // Obtém os valores selecionados pelo usuário
            let atendimento = document.querySelector('input[name="atendimentos"]:checked'); // Verifica se "Realizados" ou "Cancelados" foi selecionado
            let ano = document.getElementById('ano').value;
            let mes = document.getElementById('mes').value;
            let dia = document.getElementById('dia').value;

            // Verifica se todos os filtros foram selecionados
            if (atendimento && ano && mes && dia) {
                // Exibe a seção do relatório se todos os filtros estiverem preenchidos
                document.getElementById('relatorio-section').style.display = 'block';

                // Insere uma linha de dados na tabela de relatório (exemplo de dados estáticos)
                let tbody = document.getElementById('relatorio-body');
                tbody.innerHTML = `
                    <tr>
                        <td>20</td>
                        <td>Progressiva</td>
                        <td>${dia}</td>
                        <td>${mes}</td>
                        <td>${ano}</td>
                        <td>220</td>
                    </tr>
                `;
            } else {
                // Alerta o usuário caso algum filtro esteja faltando
                alert("Por favor, selecione todos os filtros.");
            }
        }

        // Função para gerar PDF - apenas um alerta neste exemplo
        function gerarPDF() {
            alert("Funcionalidade de PDF não implementada neste exemplo.");
        }

    </script>

</body>
</html>