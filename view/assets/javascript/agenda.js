class Agenda {
    constructor() {
        this.today = new Date();
        this.month = this.today.getMonth();
        this.year = this.today.getFullYear();
        this.generateCalendar(this.month, this.year);
        this.updateMonthTitle(this.month, this.year);
        this.setupEventListeners();
    }

    generateCalendar(month, year) {
        const daysOfWeek = ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"];
        const firstDay = new Date(year, month, 1);
        const lastDay = new Date(year, month + 1, 0);
        const numDays = lastDay.getDate();
    
        const lastDayPrevMonth = new Date(year, month, 0);
        const numPrevMonthDays = lastDayPrevMonth.getDate();
    
        let calendarHTML = '<table>';
        calendarHTML += '<thead><tr>';
        
        daysOfWeek.forEach(day => {
            calendarHTML += `<th class="day-name">${day}</th>`;
        });
        calendarHTML += '</tr></thead><tbody>';
    
        const startingDay = firstDay.getDay();
        const prevMonthStartDay = numPrevMonthDays - startingDay + 1; 
    
        for (let i = prevMonthStartDay; i <= numPrevMonthDays; i++) {
            calendarHTML += `<td class="other-month">
                                <div class="day-number">${i}</div>
                                <div class="agenda-container"></div>
                              </td>`;
        }
    
        for (let day = 1; day <= numDays; day++) {
            if ((startingDay + day - 1) % 7 === 0 && day !== 1) {
                calendarHTML += '</tr><tr>';
            }
    
            calendarHTML += `<td>
                                <div class="day-number">${day}</div>
                                <div class="agenda-container"></div>
                              </td>`;
        }
    
        const nextMonthStartDay = (startingDay + numDays) % 7;
        if (nextMonthStartDay !== 0) {
            for (let i = 1; nextMonthStartDay + i <= 6; i++) {
                calendarHTML += `<td class="other-month">
                                    <div class="day-number">${i}</div>
                                    <div class="agenda-container"></div>
                                  </td>`;
            }
        }
    
        calendarHTML += '</tr></tbody></table>';
        document.getElementById('calendar').innerHTML = calendarHTML;
    }

    updateMonthTitle(month, year) {
        const monthNames = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
        const monthName = monthNames[month];
        document.getElementById('month-title').innerText = `${monthName} ${year}`;
    }

    setupEventListeners() {
        document.getElementById("prevMonth").addEventListener("click", () => this.changeMonth(-1));
        document.getElementById("nextMonth").addEventListener("click", () => this.changeMonth(1));
    }

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
        this.updateMonthTitle(this.month, this.year); 
    }
}

document.addEventListener("DOMContentLoaded", () => {
    let agenda = new Agenda();
});
