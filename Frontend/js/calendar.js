document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            start: 'prev,next',
            center: 'title',
            end: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        initialView: 'dayGridMonth',
        locale: 'es',
        selectable: true,
        selectMirror: true,
        themeSystem: 'standard',

        dateClick: function(info) {
            abrirModal(info);
            document.getElementById('fecha').value = info.dateStr;
        },

        events: '../../../../BackEnd/Gestion%20de%20Usuarios/listarClasesCalendario.php'
        
    });

    calendar.render();

    const modal = document.getElementById('eventModal');
    const closeBtn = modal.querySelector('.custom-close');
    const eventForm = document.getElementById('eventForm');

    function abrirModal(event) {
        modal.classList.remove('custom-hidden');
    }

    function cerrarModal() {
        modal.classList.add('custom-hidden');
    }

    closeBtn.addEventListener('click', cerrarModal);

    eventForm.addEventListener('submit', function(event) {
        event.preventDefault();
        
        const fecha = document.getElementById('fecha').value;
        const hora = document.getElementById('hora').value;
        
        $.ajax({
            url: '../../../../BackEnd/Gestion%20de%20Usuarios/calendarioFechas.php',
            method: 'POST',
            data: {
                fecha: fecha,
                hora: hora
            },
            success: function(response) {
                calendar.addEvent({
                    title: 'Clase agendada',
                    start: `${fecha}T${hora}:00`,
                    allDay: false,
                    color: 'green'
                });
                cerrarModal();
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
                alert('Error al guardar la clase. Por favor, intente nuevamente.');
            }
        });
    });

    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            cerrarModal();
        }
    });
});