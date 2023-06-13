@extends('adminlte::page')

@section('title', 'Comunidad de Gracia')

@section('content_header')
    <h1>Calendario</h1>
@stop

@section('content')
    <!-- Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Título</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" id="title">
                    <span id="titleError" class="text-danger"></span>
                </div>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Descripción</h5>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" id="description">
                    <span id="descriptionError" class="text-danger"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" id="saveBtn" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div id="calendar"></div>
        </div>
    </div>
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css" />
    <link rel="stylesheet" href="{{ asset('css/admin_custom.css') }}">
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/locale/es.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var booking = @json($events);

            $('#calendar').fullCalendar({
                header: {
                    left: 'prevYear prev, next nextYear today',
                    center: 'title',
                    right: 'month, agendaWeek, agendaDay',
                },

                buttonText: {
                    prev: 'Anterior',
                    next: 'Siguiente',
                    today: 'Hoy',
                    month: 'Mes',
                    week: 'Semana',
                    day: 'Día',
                    list: 'Lista'
                },
                events: booking,
                selectable: true,
                selectHelper: true,
                select: function(start, end, allDays) {
                    $('#bookingModal').modal('toggle');

                    $('#saveBtn').click(function() {
                        var title = $('#title').val();
                        var description = $('#description').val();
                        var start_date = moment(start).format('YYYY-MM-DD');
                        var end_date = moment(end).format('YYYY-MM-DD');

                        $.ajax({
                            url: "{{ route('calendar.store') }}",
                            type: "POST",
                            dataType: 'json',
                            data: {
                                title,
                                description,
                                start_date,
                                end_date
                            },
                            success: function(response) {
                                $('#bookingModal').modal('hide')
                                $('#calendar').fullCalendar('renderEvent', {
                                    'title': response.title,
                                    'description': response.description,
                                    'start': response.start,
                                    'end': response.end,
                                    'color': response.color
                                });
                            },
                            error: function(error) {
                                if (error.responseJSON.errors) {
                                    $('#titleError').html(error.responseJSON.errors
                                        .title);
                                    $('#descriptionError').html(error.responseJSON
                                        .errors.description);
                                }
                            },
                        });
                    });
                },
                editable: true,
                eventDrop: function(event) {
                    var id = event.id;
                    var start_date = moment(event.start).format('YYYY-MM-DD');
                    var end_date = moment(event.end).format('YYYY-MM-DD');

                    $.ajax({
                        url: "{{ route('calendar.update', '') }}" + '/' + id,
                        type: "PATCH",
                        dataType: 'json',
                        data: {
                            start_date,
                            end_date
                        },
                        success: function(response) {
                            swal("¡Buen trabajo!", "Evento actualizado", "success");
                        },
                        error: function(error) {
                            console.log(error)
                        },
                    });
                },
                eventClick: function(event) {
                    var id = event.id;

                    if (confirm('¿Deseas eliminar este evento?')) {
                        $.ajax({
                            url: "{{ route('calendar.destroy', '') }}" + '/' + id,
                            type: "DELETE",
                            dataType: 'json',
                            success: function(response) {
                                $('#calendar').fullCalendar('removeEvents', {
                                    'title': response.title,
                                    'description': response.description,
                                });
                            },
                            error: function(error) {
                                console.log(error)
                            },
                        });
                    }
                },
                selectAllow: function(event) {
                    return moment(event.start).utcOffset(false).isSame(moment(event.end).subtract(1,
                        'second').utcOffset(false), 'day');
                },
                locale: 'es',
            });

            $("#bookingModal").on("hidden.bs.modal", function() {
                $('#saveBtn').unbind();
            });

            $('.fc-event').css('font-size', '13px');
            $('.fc-event').css('width', '20px');
            $('.fc-event').css('border-radius', '50%');
        });
    </script>
@stop
