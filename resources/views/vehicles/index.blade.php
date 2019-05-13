@extends('adminlte::page')

@section('title', ' | Veículos')

@section('content_header')
<h1>Veículos</h1>
@stop

@section('content')
<div class="box">
	<div class="box-header">
		<div class="row">
			<div class="col-md-3">
				<a href="{{ route('vehicle.create') }}" class="btn btn-sm btn-success" id="addMorador"><i class="fa fa-plus"></i> Veículo</a>
			</div>
			<div class="col-md-5 pull-right">
				<form action="{{ route('vehicle.search') }}" method="POST">
					@csrf
					<div class="input-group">
						<input type="text" class="form-control" name="search" placeholder="Digite a placa ou modelo do veículo">
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
				@if($vehicles->count() > 0)
				<table id="tabela" class="table table-bordered table-hover dataTable">
					<thead>
						<tr>
							<th>Bl/Ap</th>
							<th>Marca</th>
							<th>Modelo</th>
							<th>Tipo</th>
							<th>Cor</th>
							<th>Placa</th>
							<th>Opção</th>                            
						</tr>
					</thead>
					<tbody>
						@foreach($vehicles as $vehicle)
						<tr>
				        	<td>{{ $vehicle->owner->apartment->blap }}</td>
					        <td>{{ $vehicle->brand }}</td>
					        <td>{{ $vehicle->model }}</td>
					        <td>{{ $vehicle->type_vehicle }}</td>
					        <td>{{ $vehicle->vehicle_color }}</td>
					        <td>{{ $vehicle->vehicle_plate }}</td>
					        <td>
						        <div class="btn-group">
							        <a href="{{ route('vehicle.edit', ['vehicle'=>$vehicle->id]) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> editar</a>
							        <form action="{{ route('vehicle.destroy', ['vehicle'=>$vehicle->id]) }}" method="POST" style="display: inline;">
							        	@csrf
							        	@method('DELETE')
							        	<button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> excluir</button>
							        </form>
						        </div>
					        </td>
				        </tr>
				        @endforeach
					</tbody>
					<tfoot>
						<tr>
							<th>Bl/Ap</th>
							<th>Marca</th>
							<th>Modelo</th>
							<th>Tipo</th>
							<th>Cor</th>
							<th>Placa</th>
							<th>Opção</th>
						</tr>
					</tfoot>
				</table>
				@else
				<div class="callout callout-danger">
                    <h4>Nenhum veículo cadastrado!</h4>
                </div>
                @endif
			</div>
		</div>
	</div>
	<!-- /.box-body -->

	@if($vehicles->count() > 0)
	<div class="box-footer">
		{{ $vehicles->links() }}
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