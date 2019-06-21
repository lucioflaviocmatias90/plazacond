@extends('adminlte::page')

@section('title', ' | Residentes')

@section('content_header')
@stop

@section('content')
<div class="box">
	<div class="box-body">
        <div class="col-md-2">
            <img class="img-responsive img-circle" src="{{ $resident->photo_path == '' ? '/img/profile.png' : str_replace(['["', '"]', '\\'], ['', '', ''], $resident->photo_path) }}" alt="User profile picture">

            <p class="text-muted text-center">Residente - {{ $resident->owner->apartment->blap }}</p>
        </div>
        <div class="col-md-10">

            <div class="row">
                <div class="form-group col-md-9">
                    <label for="fullname">Nome Completo</label>
                    <p class="form-control">{{ $resident->fullname }}</p>
                </div>

                <div class="form-group col-md-3">
                    <label for="resident_type">Tipo Morador</label>
                    <p class="form-control">{{ $resident->owner->apartment->blap }}</p>
                </div>
            </div>

            <div class="row">

                <div class="form-group col-md-3">
                    <label for="gender">Sexo</label>
                    <p class="form-control">{{ $resident->gender }}</p>
                </div>

                <!-- Date dd/mm/yyyy -->
                <div class="form-group col-md-4">
                    <label>Data Nascimento:</label><span class="text-muted" style="margin-left: 10px">(Opcional)</span>

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <p class="form-control">{{ $resident->birthday }}</p>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group col-md-3">
                    <label for="phone">Telefone</label>
                    <p class="form-control">{{ $resident->phone }}</p>
                </div>

                <div class="form-group col-md-2">
                    <label for="owner_id">Bl/Ap</label>
                    <p class="form-control">{{ $resident->owner->apartment->blap }}</p>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="rg">RG</label><span class="text-muted" style="margin-left: 10px">(Opcional)</span>
                    <p class="form-control">{{ $resident->rg }}</p>
                </div>

                <div class="form-group col-md-6">
                    <label for="cpf">CPF</label><span class="text-muted" style="margin-left: 10px">(Opcional)</span>
                    <p class="form-control">{{ $resident->cpf }}</p>
                </div>
            </div>

        </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <a href="{{ url()->previous() }}" class="btn btn-default btn-lg pull-right">Voltar</a>
    </div>
    <!-- box-footer -->
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
        $("#birthday").datepicker({
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