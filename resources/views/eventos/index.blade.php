<x-app-layout>

    <script src="{{ asset('fullcalendar/core/index.global.js') }}"></script>
    <script src="{{ asset('fullcalendar/interaction/index.global.js') }}"></script>
    <script src="{{ asset('fullcalendar/daygrid/index.global.js') }}"></script>
    <script src="{{ asset('fullcalendar/timegrid/index.global.js') }}"></script>
    <script src="{{ asset('fullcalendar/list/index.global.js') }}"></script>
    <script src="{{ asset('fullcalendar/google-calendar/index.global.js') }}"></script>
    <script src="{{ asset('fullcalendar/bootstrap/index.global.js') }}"></script>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <script>
        $(document).ready(function() {
            var events = [];
            var calendarEl = document.getElementById('calendar');
            var initialLocaleCode = 'Es';
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                contentHeight: 400,
                buttonText: {
                    prevYear: 'Anterior año',
                    nextYear: 'Siguiente año',
                    prev: 'Anterior',
                    next: 'Siguiente',
                    today: 'Hoy',
                    month: 'Mes',
                    week: 'Semana',
                    day: 'Día',
                    list: 'Lista'
                },
                headerToolbar: {
                    left: 'prevYear prev next nextYear today',
                    center: 'title',
                    right: 'dayGridMonth timeGridWeek timeGridDay listMonth'
                },
                locale: initialLocaleCode,
                buttonIcons: false,
                weekNumbers: true,
                navLinks: true,
                editable: true,
                dayMaxEvents: true,
                events: 'https://fullcalendar.io/api/demo-feeds/events.json?overload-day',
                events: function(info, successCallback, failureCallback) {
                    successCallback(events);
                }
            });

            function ShowCalendar() {
                calendar.render();
            }

            $("#addEvent").on("click", function() {
                events.push({
                    title: $("#eventName").val(),
                    start: $("#fromDate").val(),
                    end: $("#toDate").val()
                });

                calendar.refetchEvents();
            });

            calendar.render();
        });
    </script>



    </script>

    <div class="container">

        <div class="page-header text-center">
            <h1>Comunidad de Gracias</h1>
        </div>

        <hr>

        <form>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="fromDate">Event Name:</label>
                        <input type="text" class="form-control" placeholder="Enter event" id="eventName">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fromDate">From:</label>
                        <input type="date" class="form-control" placeholder="Enter from date" id="fromDate">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="toDate">To:</label>
                        <input type="date" class="form-control" id="toDate">
                    </div>
                </div>

            </div>

            <button type="button" class="btn btn-primary" id="addEvent">Add Event</button>

        </form>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <div id="calendar"></div>
            </div>
        </div>

    </div>




</x-app-layout>
