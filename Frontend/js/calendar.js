document.addEventListener('DOMContentLoaded', function () {

    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            start: 'prev,next',
            center: '',
            end: 'title'
        },
        initialView: 'dayGridMonth',
        locale: 'es',
        selectable: true,
        selectMirror: true,
        dayMaxEvents: true,

        dateClick: function (info) {
            abrirModal(info); // Abrir modal al hacer clic en una fecha
            document.getElementById('eventDate').value = info.dateStr;
        },
        eventClick: function (info) {
            abrirModal(info.event); // Abrir modal al hacer clic en un evento
        },
        eventDrop: function (info) {
            console.log(info);
        },
        events: 'listCalendarEvents.php', // Cargar eventos desde el archivo PHP
    });

    calendar.render();

    const modal = document.getElementById('eventModal');
    const closeBtn = modal.querySelector('.close');
    const eventForm = document.getElementById('eventForm');

    function abrirModal(event) {
        modal.classList.remove('hidden');
    }

    function cerrarModal() {
        modal.classList.add("hidden");
    }

    closeBtn.addEventListener("click", cerrarModal);

    eventForm.addEventListener('submit', guardarEvento);

    function guardarEvento(event) {
        event.preventDefault(); // Evita que se recargue la página

        // Obtener los valores del formulario
        const eventDate = document.getElementById('eventDate').value;
        const eventTime = document.getElementById('eventTime').value;

		$.ajax({
			url: '../../../../BackEnd/Gestion de Usuarios/calendarioFechas.php',
			method: 'POST',
			data: {
                usuario: $_SESSION['usuario'],
				fecha: eventDate, 
                hora: eventTime,
			},
			success: function (respuesta) {
				console.log(respuesta);
			},
			error: function (respuesta) {
				console.log(respuesta);
			},
		});
	
        // Crear un nuevo evento
        calendar.addEvent({
            title: 'Nuevo Evento',
            start: `${eventDate}T${eventTime}:00`,
            allDay: false
        });

        // Cerrar el modal
        cerrarModal();
    }

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            cerrarModal();
        }
    });
});