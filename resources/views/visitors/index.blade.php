@extends('adminlte::page')

@section('title', ' | Visitantes')

@section('content_header')
<h1>Visitantes</h1>
@stop

@section('content')
<div class="box">
	<div class="box-header">
		<div class="row">
			<div class="col-md-3">
				<a href="{{ route('visitor.create') }}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Visitante</a>
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
                @if($visitors->count() > 0)
				<table id="tabela" class="table table-bordered table-hover dataTable">
					<thead>
						<tr>
							<th>Nome Completo</th>
							<th>RG</th>
							<th>Telefone</th>
							<th>Opção</th>                            
						</tr>
					</thead>
					<tbody>
						@foreach($visitors as $visitor)
						<tr>
							<td><a href="{{ route('visitor.show', ['visitor'=>$visitor->id]) }}">{{ $visitor->fullname }}</a></td>
							<td>{{ $visitor->rg }}</td>
					        <td>{{ $visitor->phone }}</td>
					        <td>
								<a href="{{ route('visitor.edit', ['visitor'=>$visitor->id]) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> editar</a>
								<form action="{{ route('visitor.destroy', ['visitor'=>$visitor->id]) }}" method="POST" style="display: inline;">
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"> apagar</i></button>
								</form>
					        </td>
				        </tr>
				        @endforeach
					</tbody>
					<tfoot>
						<tr>
							<th>Nome Completo</th>
							<th>RG</th>
							<th>Telefone</th>
							<th>Opção</th>
						</tr>
					</tfoot>
				</table>
                @else
                <div class="callout callout-danger">
                    <h4>Nenhum visitante cadastrado!</h4>
                </div>
                @endif
			</div>
		</div>
	</div>
	<!-- /.box-body -->

	<div class="box-footer">
		{{ $visitors->links() }}
	</div>
	<!-- /.box-footer -->
</div>
@stop

@section('css')
<!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('js')

@stop