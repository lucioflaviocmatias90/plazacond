@extends('adminlte::page')

@section('title', ' | Comunicados')

@section('content_header')
<h1>Comunicados</h1>
@stop

@section('content')
<div class="box">
	<div class="box-header">
		<div class="row">
			<div class="col-md-3">
				<a href="{{ route('notice.create') }}" class="btn btn-sm btn-success" id="addMorador"><i class="fa fa-plus"></i> Comunicado</a>
			</div>
			<div class="col-md-5 pull-right">
				<form action="{{ route('notice.search') }}" method="POST">
					@csrf
					<div class="input-group">
						<input type="text" class="form-control" name="search" placeholder="Digite a data do comunicado ou BL/AP">
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
				@if(session('success'))
					<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-check"></i> {{ session('success') }}</h4>
					</div>
				@elseif(session('updated'))
					<div class="alert alert-warning alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-check"></i> {{ session('updated') }}</h4>
					</div>
				@elseif(session('deleted'))
					<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-check"></i> {{ session('deleted') }}</h4>
					</div>
				@endif
				@if($notices->count() > 0)
				<table id="tabela" class="table table-bordered table-hover dataTable">
					<thead>
						<tr>
							<th>Bl/Ap</th>
							<th>Título</th>
							<th>Descrição</th>
						</tr>
					</thead>
					<tbody>
						@foreach($notices as $notice)
							@if($notice->owner)
								<tr>
									<td>{{ $notice->owner->apartment->blap }}</td>
									<td>{{ $notice->title }}</td>
									<td>{{ $notice->description }}</td>
									<td>
										<a href="{{ route('notice.edit', ['notice'=>$notice->id]) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> editar</a>
										<form action="{{ route('notice.destroy', ['notice'=>$notice->id]) }}" method="POST" style="display: inline;">
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> excluir</button>
										</form>
									</td>
								</tr>
							@endif
				        @endforeach
					</tbody>
					<tfoot>
						<tr>
							<th>Bl/Ap</th>
							<th>Título</th>
							<th>Descrição</th>
						</tr>
					</tfoot>
				</table>
				@else
				<div class="callout callout-danger">
                    <h4>Nenhum comunicado cadastrado!</h4>
                </div>
                @endif
			</div>
		</div>
	</div>
	<!-- /.box-body -->

	@if($notices->count() > 0)
	<div class="box-footer">
		{{ $notices->links() }}
	</div>
	<!-- /.box-footer -->
	@endif
</div>
@stop

@section('css')
<!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('js')

	<script type="text/javascript" src="{{ asset('/js/style.js') }}"></script>

@stop