class Agenda {
    constructor() {
        this.initCalendar();
    }

    initCalendar() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'pt-br'
        });
        calendar.render();
    }
}

document.addEventListener("DOMContentLoaded", () => {
    let start = new Agenda();
});
