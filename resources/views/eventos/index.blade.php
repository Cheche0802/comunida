<x-app-layout>

    <script src="{{asset('fullcalendar/core/index.global.js')}}"></script>
    <script src="{{asset('fullcalendar/interaction/index.global.js')}}"></script>
    <script src="{{asset('fullcalendar/daygrid/index.global.js')}}"></script>
    <script src="{{asset('fullcalendar/google-calendar/index.global.js')}}"></script>
    <script src="{{asset('fullcalendar/icalendar/index.global.js')}}"></script>
    <script src="{{asset('fullcalendar/interaction/index.global.js')}}"></script>
    <script src="{{asset('fullcalendar/list/index.global.js')}}"></script>
    <script src="{{asset('fullcalendar/timegrid/index.global.js')}}"></script>
    <script>

        document.addEventListener('DOMContentLoaded', function() {
          var calendarEl = document.getElementById('calendar');
          var calendar = new FullCalendar.Calendar(calendarEl, {
            timeZone: 'local',
            initialView: 'dayGridMonth'
          });
          calendar.setOption('locale', 'Ve');
          calendar.render();
        });

      </script>

          <div class="mx-auto max-w-5xl px-2 sm:px-6 lg:px-8 py-8" id="calendar">Calendario... </div>



</x-app-layout>
