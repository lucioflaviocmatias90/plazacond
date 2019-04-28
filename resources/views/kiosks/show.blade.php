@extends('adminlte::page')

@section('title', ' | Quíosque')

@section('content_header')
@stop

@section('content')
<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">Evento #{{ $kiosk->id }}</h3>
		<div class="box-tools pull-right">
		<!-- /.box-tools -->
	</div>
	<!-- /.box-header -->
    <form action="{{ route('kiosk.update', ['kiosk'=>$kiosk->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="box-body">
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="status">Nome Evento</label>
                        <input type="text" class="form-control" id="status" name="status" value="{{ $kiosk->status }}">
                    </div>

                    <!-- DATA RESERVADA -->
                    <div class="form-group col-md-3">
                        <label for="date_marked">Data Reservada:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control" id="date_marked" name="date_marked" placeholder="yyyy-mm-dd" value="{{ $kiosk->date_marked }}">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- DATA ENTREGA -->
                    <div class="form-group col-md-3">
                        <label for="date_delivery">Data Entrega:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control" id="date_delivery" name="date_delivery" placeholder="yyyy-mm-dd" value="{{ $kiosk->date_delivery }}">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- BL/AP -->
                    <div class="form-group col-md-2">
                        <label for="owner_id">Bl/Ap</label>
                        <select class="form-control" name="owner_id" id="owner_id">
                            @foreach($owners as $owner)
                                <option value="{{ $owner->id }}" {{ $owner->id == $kiosk->owner_id ? 'selected' : ''}}>{{ $owner->blap }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="observation">Observação</label><span class="text-muted" style="margin-left: 10px">(Opcional)</span>
                        <textarea class="form-control" id="observation" name="observation">{{ $kiosk->observation }}</textarea>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <div class="btn-group pull-right">
                <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </div>
        <!-- box-footer -->
    </form>

</div>
<!-- /.box -->
@stop

@section('css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
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
@stop