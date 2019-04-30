@extends('adminlte::page')

@section('title', ' | Proprietário')

@section('content_header')
@stop

@section('content')
<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">Editar Proprietário</h3>
		<div class="box-tools pull-right">
		<!-- /.box-tools -->
	</div>
	<!-- /.box-header -->

	<!-- form start -->
    <form role="form" action="{{ route('owner.update', ['owner'=>$owner->id]) }}"
              method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="box-body">
            <div class="col-md-3">
                <img class="profile-user-img img-responsive img-circle" src="{{ $owner->photo_path == '' ? '/img/profile.png' : '/storage/'.$owner->photo_path }}" alt="User profile picture">
                <p class="text-muted text-center">Proprietário - {{ $owner->blap }}</p>

                <div class="form-group">
                    <label for="photo_path">Selecione uma foto</label>
                    <span class="text-muted" style="margin-left: 10px">(Opcional)</span>
                    <input type="file" id="photo_path" name="photo_path" class="form-control">
                </div>
            </div>
            <div class="col-md-9">

                <div class="row">
                    <div class="form-group col-md-9">
                        <label for="fullname">Nome Completo</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Digite o seu nome completo sem abreviar" required="" value="{{ $owner->fullname }}">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="condition">Condição</label>
                        <select class="form-control" id="condition" name="condition">
                            <option value="alugado" {{ $owner->condition == 'alugado' ? 'selected' : ''}}>alugado</option>
                            <option value="residindo" {{ $owner->condition == 'residindo' ? 'selected' : ''}}>residindo</option>
                            <option value="aluga-se" {{ $owner->condition == 'aluga-se' ? 'selected' : ''}}>aluga-se</option>
                            <option value="vende-se" {{ $owner->condition == 'vende-se' ? 'selected' : ''}}>vende-se</option>
                            <option value="vazio" {{ $owner->condition == 'vazio' ? 'selected' : ''}}>vazio</option>
                        </select>
                    </div>
                </div>

                <div class="row">

                    <div class="form-group col-md-4">
                        <label for="gender">Sexo</label>
                        <select class="form-control" id="gender" name="gender">
                            <option value="masculino" {{ $owner->gender == 'masculino' ? 'selected' : ''}}>masculino</option>
                            <option value="feminino" {{ $owner->gender == 'feminino' ? 'selected' : ''}}>feminino</option>
                        </select>
                    </div>

                    <!-- Date dd/mm/yyyy -->
                    <div class="form-group col-md-4">
                        <label>Data Nascimento:</label><span class="text-muted" style="margin-left: 10px">(Opcional)</span>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control" id="birthday" name="birthday" placeholder="xx/xx/xxxx" value="{{ $owner->birthday }}">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group col-md-4">
                        <label for="phone">Telefone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="(xx) xxxxx-xxxx" required="" value="{{ $owner->phone }}">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="rg">RG</label><span class="text-muted" style="margin-left: 10px">(Opcional)</span>
                        <input type="text" class="form-control" id="rg" name="rg" placeholder="xx.xxx.xxx-x" value="{{ $owner->rg }}">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="cpf">CPF</label><span class="text-muted" style="margin-left: 10px">(Opcional)</span>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="xxx.xxx.xxx-xx" value="{{ $owner->cpf }}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="email">Email</label><span class="text-muted" style="margin-left: 10px">(Opcional)</span>
                        <input type="text" class="form-control" id="email" name="email" placeholder="xx.xxx.xxx-x" value="{{ $owner->email }}">
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