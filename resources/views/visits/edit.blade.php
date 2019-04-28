@extends('adminlte::page')

@section('title', ' | Visita')

@section('content_header')
@stop

@section('content')
<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">Editar Visita</h3>
	</div>
	<!-- /.box-header -->

	<!-- form start -->
    <form role="form" action="{{ route('visit.update', ['visit'=>$visit->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="box-body">
            <div class="form-group col-md-2">
                <label for="owner_id">Bl/Ap</label>
                <select class="form-control" name="owner_id" id="owner_id">
                    @foreach($owners as $owner)
                        <option value="{{ $owner->id }}" {{ $owner->id == session('owner_id') ? 'selected' : '' }}>{{ $owner->blap }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="entry_date">Data Entrada</label>
                <input type="text" id="entry_date" name="entry_date" class="form-control" value="{{ $visit->entry_date }}">
            </div>
            <div class="form-group col-md-2">
                <label for="entry_hour">Hora</label>
                <input type="text" class="form-control" id="entry_hour" name="entry_hour" value="{{ $visit->entry_hour }}">
            </div>
            <div class="form-group col-md-3">
                <label for="departure_date">Data Saída</label>
                <input type="text" id="departure_date" name="departure_date" class="form-control" value="{{ $visit->departure_date }}">
            </div>
            <div class="form-group col-md-2">
                <label for="departure_hour">Hora</label>
                <input type="text" class="form-control" id="departure_hour" name="departure_hour" value="{{ $visit->departure_hour }}">
            </div>
            <div class="form-group col-md-12">
                <label for="observation">Observação</label>
                <textarea id="observation" name="observation" class="form-control">{{ $visit->observation }}</textarea>
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
        $("#entry_date").datepicker({
            dateFormat: 'yy-mm-dd',
            dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
            dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
            dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
            monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
            monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
            changeMonth: true,
            changeYear: true
        });
        $("#departure_date").datepicker({
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