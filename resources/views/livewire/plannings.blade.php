<div>
    <style>
        .fc-event-title{
            
        }
    </style>
    <div id='calendar-container flex flex-wrap p-6' wire:ignore>
        <div id='calendar'></div>
    </div>
    @push('scripts')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js'></script>
    <script>
        document.addEventListener('livewire:load', function () {
            const Calendar = FullCalendar.Calendar;
            const calendarEl = document.getElementById('calendar');
            const calendar = new Calendar(calendarEl,{
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth, timeGridWeek, timeGridDay, listWeek'
                },
                locale: '{{ config('app.locale') }}',
                events: JSON.parse(@this.plannings)
            });
            calendar.render();
        });
    </script>
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css' rel='stylesheet' />
    @endpush

</div>
