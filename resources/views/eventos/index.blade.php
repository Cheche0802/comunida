<x-app-layout>

    <script src="{{ asset('fullcalendar/core/index.global.js') }}"></script>
    <script src="{{ asset('fullcalendar/interaction/index.global.js') }}"></script>
    <script src="{{ asset('fullcalendar/daygrid/index.global.js') }}"></script>
    <script src="{{ asset('fullcalendar/timegrid/index.global.js') }}"></script>
    <script src="{{ asset('fullcalendar/list/index.global.js') }}"></script>
    <script src="{{ asset('fullcalendar/google-calendar/index.global.js') }}"></script>
    <script src="{{ asset('fullcalendar/icalendar/index.global.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var initialLocaleCode = 'Es';
            var localeSelectorEl = document.getElementById('locale-selector');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today addEventButton',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },
                locale: initialLocaleCode,
                buttonIcons: false,
                weekNumbers: true,
                navLinks: true,
                editable: true,
                dayMaxEvents: true,
                events: 'https://fullcalendar.io/api/demo-feeds/events.json?overload-day',
                customButtons: {
                    addEventButton: {
                        text: 'add event...',
                        click: function() {
                            var dateStr = prompt('Enter a date in YYYY-MM-DD format');
                            var date = new Date(dateStr + 'T00:00:00'); // will be in local time

                            if (!isNaN(date.valueOf())) { // valid?
                                calendar.addEvent({
                                    title: 'dynamic event',
                                    start: date,
                                    allDay: true
                                });
                                alert('Great. Now, update your database...');
                            } else {
                                alert('Invalid date.');
                            }
                        }
                    }
                }
            });

            calendar.render();
        });
    </script>

    <div class="container ">
        <div class="row">
            <div class="col"></div>
            <div class="col-8">
                <div id="calendar"></div>
            </div>
            <div class="col"></div>
        </div>
    </div>



</x-app-layout>
