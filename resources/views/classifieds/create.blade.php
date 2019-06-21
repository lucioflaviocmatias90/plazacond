@extends('adminlte::page')

@section('title', ' | Classificados')

@section('content')
<div class="box">
	<div class="box-header">
		<h3 class="box-title">Novo Anúncio</h3>		
	</div>
	<!-- /.box-header -->
	<div class="box-body">    
		<!-- form start -->
        <form role="form" action="{{ route('classified.store') }}" method="POST" enctype="multipart/form-data">
        	@csrf
            <div class="box-body">
                <div class="col-md-12">  
                    <div class="row">
                        <div class="form-group col-md-7">
                            <label for="title">Título</label>
                            <input type="text" class="form-control" name="title">
                        </div> 
                        <div class="form-group col-md-3">
                            <label for="price">Preço</label>
                            <input type="text" class="form-control" name="price">
                        </div> 
                        <div class="form-group col-md-2">
                            <label for="owner_id">Bl/Ap</label>
                            <select class="form-control" name="owner_id" id="owner_id">
                                @foreach($owners as $owner)
                                <option value="{{ $owner->id }}" {{ $owner->id == session('owner_id') ? 'selected' : '' }}>{{ $owner->blap }}</option>
                                @endforeach
                            </select>
                        </div>                 
                    </div>
                    <div class="row">                    
                        <div class="form-group col-md-12">
                            <label for="photo_path">Foto</label>
                            <input type="file" name="photo_path[]">
                        </div>                  
                    </div>  
                    <div class="row">                    
                        <div class="form-group col-md-12">
                            <label for="description">Descrição</label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>                  
                    </div>               
                     
                </div> 
                <div class="btn-group pull-right">
                    <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>                              
            </div>
            <!-- /.box-body -->
        </form>
	</div>
	<!-- /.box-body -->
</div>
@stop

@section('css')
<!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('js')

	<script type="text/javascript" src="{{ asset('/js/style.js') }}"></script>

@stop