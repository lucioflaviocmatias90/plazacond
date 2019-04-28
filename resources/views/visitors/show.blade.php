@extends('adminlte::page')

@section('title', ' | Visitantes')

@section('content_header')
@stop

@section('content')
<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">Visitante</h3>
	</div>
	<!-- /.box-header -->
    <div class="box-body">
        <div class="col-md-2">
            <img class="img-responsive img-circle" src="/img/profile.png" alt="User profile picture">
        </div>
        <div class="col-md-10">

            <div class="row">
                <div class="form-group col-md-9">
                    <label for="fullname">Nome Completo</label>
                    <p class="form-control">{{ $visitor->fullname }}</p>
                </div>

                <div class="form-group col-md-3">
                    <label for="visitor_type">Tipo</label>
                    <p class="form-control">{{ $visitor->visitor_type }}</p>
                </div>
            </div>

            <div class="row">

                <div class="form-group col-md-4">
                    <label for="gender">Sexo</label>
                    <p class="form-control">{{ $visitor->gender }}</p>
                </div>

                <!-- Date dd/mm/yyyy -->
                <div class="form-group col-md-4">
                    <label>Data Nascimento:</label>

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <p class="form-control">{{ $visitor->birthday }}</p>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group col-md-4">
                    <label for="phone">Telefone</label>
                    <p class="form-control">{{ $visitor->phone }}</p>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="rg">RG</label>
                    <p class="form-control">{{ $visitor->rg }}</p>
                </div>

                <div class="form-group col-md-6">
                    <label for="cpf">CPF</label>
                    <p class="form-control">{{ $visitor->cpf }}</p>
                </div>
            </div>

        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

<div class="box">
    <div class="box-header">
        <div class="row">
            <div class="col-md-3">
                <a href="{{ url()->previous() }}" class="btn btn-sm btn-default"><i class="fa fa-arrow-left"></i> Voltar</a>
                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus"></i> Visita</button>
            </div>
            <div class="col-md-5 pull-right">
                <form action="{{ route('visitor.search') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Digite o nome do visitante">
                        <span class="input-group-btn">
							<button type="submit" class="btn btn-default" type="button"><i class="fa fa-search"></i>  Pesquisar</button>
						</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">
                @if($visits->owner->count() > 0)
                    <table id="tabela" class="table table-bordered table-hover dataTable">
                        <thead>
                        <tr>
                            <th>Bl/Ap</th>
                            <th>Data Entrada</th>
                            <th>Hora</th>
                            <th>Data Saída</th>
                            <th>Hora</th>
                            <th>Observação</th>
                            <th>Opção</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($visits->owner as $visit)
                            <tr>
                                <td>{{ $visit->blap }}</td>
                                <td>{{ $visit->pivot->entry_date }}</td>
                                <td>{{ $visit->pivot->departure_date }}</td>
                                <td>{{ $visit->pivot->entry_hour }}</td>
                                <td>{{ $visit->pivot->departure_hour }}</td>
                                <td>{{ $visit->pivot->observation }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('visit.edit', ['visit'=>$visit->pivot->id]) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> editar</a>
                                        <form action="{{ route('visit.destroy', ['visit'=>$visit->pivot->id]) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"> apagar</i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Bl/Ap</th>
                            <th>Data Entrada</th>
                            <th>Hora</th>
                            <th>Data Saída</th>
                            <th>Hora</th>
                            <th>Observação</th>
                            <th>Opção</th>
                        </tr>
                        </tfoot>
                    </table>
                @else
                    <div class="callout callout-danger">
                        <h4>Nenhuma visita cadastrada!</h4>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
        {{--{{ $visits->owner->links() }}--}}
    </div>
    <!-- /.box-footer -->
</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('visit.store', ['visit'=>$visitor->id]) }}" method="POST">
                @csrf
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Cadastrar Visita</h4>
                </div>
                <div class="modal-body">
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
                        <input type="text" id="entry_date" name="entry_date" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="entry_hour">Hora</label>
                        <input type="text" class="form-control" id="entry_hour" name="entry_hour">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="departure_date">Data Saída</label>
                        <input type="text" id="departure_date" name="departure_date" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="departure_hour">Hora</label>
                        <input type="text" class="form-control" id="departure_hour" name="departure_hour">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="observation">Observação</label>
                        <textarea id="observation" name="observation" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
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