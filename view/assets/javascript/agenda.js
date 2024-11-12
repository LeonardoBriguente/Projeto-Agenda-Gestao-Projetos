class Agenda {
    constructor() {
        this.today = new Date();
        this.month = this.today.getMonth();
        this.year = this.today.getFullYear();
        this.generateCalendar(this.month, this.year);
        this.updateMonthTitle(this.month, this.year);  // Atualiza o título do mês
        this.setupEventListeners();
    }

    // Função para gerar o calendário
    generateCalendar(month, year) {
        const daysOfWeek = ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"];
        const firstDay = new Date(year, month, 1); // Primeiro dia do mês
        const lastDay = new Date(year, month + 1, 0); // Último dia do mês
        const numDays = lastDay.getDate(); // Número de dias no mês

        // Obter o último dia do mês anterior
        const lastDayPrevMonth = new Date(year, month, 0);
        const numPrevMonthDays = lastDayPrevMonth.getDate();

        let calendarHTML = '<table>';
        calendarHTML += '<tr>';
        // Cabeçalho com os dias da semana
        daysOfWeek.forEach(day => {
            calendarHTML += `<th>${day}</th>`;
        });
        calendarHTML += '</tr><tr>';

        // Preencher os dias em branco antes do primeiro dia do mês
        const startingDay = firstDay.getDay();
        const prevMonthStartDay = numPrevMonthDays - startingDay + 1; // Dias do mês anterior

        // Preencher os dias do mês anterior
        for (let i = prevMonthStartDay; i <= numPrevMonthDays; i++) {
            calendarHTML += `<td class="other-month">${i}</td>`;
        }

        // Preencher os dias do mês atual
        for (let day = 1; day <= numDays; day++) {
            if ((startingDay + day - 1) % 7 === 0 && day !== 1) {
                calendarHTML += '</tr><tr>';
            }
            calendarHTML += `<td>${day}</td>`;
        }

        // Verificar se precisamos preencher os dias do próximo mês
        const nextMonthStartDay = (startingDay + numDays) % 7;
        if (nextMonthStartDay !== 0) { // Verifica se o mês não terminou no sábado
            for (let i = 1; nextMonthStartDay + i <= 6; i++) {
                calendarHTML += `<td class="other-month">${i}</td>`;
            }
        }

        // Fechar a tabela
        calendarHTML += '</tr></table>';
        document.getElementById('calendar').innerHTML = calendarHTML;
    }

    // Função para atualizar o título do mês
    updateMonthTitle(month, year) {
        const monthNames = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
        const monthName = monthNames[month];
        document.getElementById('month-title').innerText = `${monthName} ${year}`;
    }

    // Função para configurar os botões de navegação
    setupEventListeners() {
        document.getElementById("prevMonth").addEventListener("click", () => this.changeMonth(-1));
        document.getElementById("nextMonth").addEventListener("click", () => this.changeMonth(1));
    }

    // Função para alterar o mês
    changeMonth(direction) {
        this.month += direction;
        if (this.month < 0) {
            this.month = 11;
            this.year--;
        } else if (this.month > 11) {
            this.month = 0;
            this.year++;
        }
        this.generateCalendar(this.month, this.year);
        this.updateMonthTitle(this.month, this.year);  // Atualiza o título do mês
    }
}

document.addEventListener("DOMContentLoaded", () => {
    let agenda = new Agenda();
});
