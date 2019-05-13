@extends('adminlte::page')

@section('title', ' | Quíosque')

@section('content')

    <div class="row">
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Novo Evento</h3>
                </div>
                <div class="box-body">
                    <form action="{{ route('kiosk.store') }}" method="post">
                        @csrf
                        <label for="owner_id">Bl/Ap</label>
                        <select class="form-control" name="owner_id" id="owner_id">
                            @foreach($owners as $owner)
                                <option value="{{ $owner->id }}">{{ $owner->blap }}</option>
                            @endforeach
                        </select>
                        {{--STATUS--}}
                        <div class="form-group">
                            <label for="status">Nome Evento</label>
                            <input type="text" class="form-control" name="status">
                        </div>
                        {{--DATE MARKED--}}
                        <div class="form-group">
                            <label for="date_marked">Data Reservada</label>
                            <input type="text" class="form-control" id="date_marked" name="date_marked">
                        </div>
                        {{--DATE DELIVERY--}}
                        <div class="form-group">
                            <label for="date_delivery">Data Entrega</label>
                            <input type="text" class="form-control" id="date_delivery" name="date_delivery">
                        </div>
                        {{--OBSERVATION--}}
                        <div class="form-group">
                            <label for="observation">Observação</label>
                            <textarea class="form-control" name="observation"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-flat pull-right"><i
                                    class="fa fa-plus"></i> Adicionar
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="box box-primary">
                <div class="box-body no-padding">
                    <!-- THE CALENDAR -->
                    <div id='calendar'></div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /. box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@stop

@section('css')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link href='/packages/core/main.css' rel='stylesheet' />
    <link href='/packages/daygrid/main.css' rel='stylesheet' />
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        console.log('Hi!');
        //Date picker
        $(function() {
            $("#date_marked").datepicker({
                dateFormat: 'yy-mm-dd',
                dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
                dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
                changeMonth: true,
                changeYear: true
            });

            $("#date_delivery").datepicker({
                dateFormat: 'yy-mm-dd',
                dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
                dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
                changeMonth: true,
                changeYear: true
            });
        });
    </script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src='/packages/core/main.js'></script>
    <script src='/packages/core/locales/pt-br.js'></script>
    <script src='/packages/interaction/main.js'></script>
    <script src='/packages/daygrid/main.js'></script>
    <script>

        axios.get('/api/kiosk').then(response => {

            var eventsKiosk = response.data.map(res=>{

                console.log(res);

                return {title: `${res.owner.apartment.blap} - ${res.status}`, start: res.date_marked, end: res.date_delivery, url: `/kiosk/${res.id}`}
            });

            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'pt-br',
                plugins: [ 'interaction', 'dayGrid' ],
                header: {
                    left: 'prevYear,prev,next,nextYear today',
                    center: 'title',
                    right: 'dayGridMonth,dayGridWeek,dayGridDay'
                },
                defaultDate: '2019-04-12',
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: eventsKiosk
            });

            // console.log(eventsKiosk)

            calendar.render();

        }).catch(error => {

            console.log(error);
        })

    </script>
@stop