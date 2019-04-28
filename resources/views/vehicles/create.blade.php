@extends('adminlte::page')

@section('title', ' | Veículos')

@section('content')
<div class="box">
	<div class="box-header">
		<h3 class="box-title">Novo Veículo</h3>		
	</div>
	<!-- /.box-header -->
	<div class="box-body">    
		<!-- form start -->
        <form role="form" action="{{ route('vehicle.store') }}" method="POST">
        	@csrf
            <div class="box-body">
                <div class="col-md-12">  
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="type_vehicle">Tipo</label>
                            <select class="form-control" name="type_vehicle" id="myselect">
                                <option value="1">Selecione o tipo</option>
                                <option value="carros">Carro</option>
                                <option value="motos">Motocicleta</option>
                                <option value="caminhoes">Caminhão</option>
                            </select>
                        </div> 

                        <div class="form-group col-md-3">
                            <label for="brand">Marca</label>
                            <select class="form-control" id="brand" name="brand">
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="model">Modelo</label>
                            <select class="form-control" id="model" name="model">
                            </select>
                        </div>                        

                        <div class="form-group col-md-3">
                            <label for="owner_id">Bl/Ap</label>
                            <select class="form-control" name="owner_id" id="owner_id">
                                @foreach($owners as $owner)
                                <option value="{{ $owner->id }}" {{ $owner->id == session('owner_id') ? 'selected' : '' }}>{{ $owner->blap }}</option>
                                @endforeach
                            </select>
                        </div>                    
                    </div>  

                    <div class="row">                    
                        <div class="form-group col-md-3">
                            <label for="vehicle_color">Cor</label>
                            <select class="form-control" name="vehicle_color" id="myselect">
                                <option value="Prata">Prata</option>
                                <option value="Preto">Preto</option>
                                <option value="Cinza">Cinza</option>
                                <option value="Branco">Branco</option>
                                <option value="Vermelho">Vermelho</option>
                                <option value="Azul">Azul</option>
                                <option value="Verde">Verde</option>
                                <option value="Laranja">Laranja</option>
                                <option value="Amarelo">Amarelo</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="vehicle_plate">Placa</label>
                            <input type="text" class="form-control" id="vehicle_plate" name="vehicle_plate" placeholder="XXX-9999" max="8">
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="observation">Observação</label>
                            <span class="text-muted" style="margin-left: 10px">(Opcional)</span>
                            <input type="text" class="form-control" id="observation" name="observation" placeholder="Máximo 50 caracteres" max="50">
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

	<script>

        var mySelect = document.querySelector('#myselect');
        var myBrand = document.querySelector('#brand');
        var myModel = document.querySelector('#model');

        mySelect.addEventListener('change', function(ev){

            switch (mySelect.value) {

                case 'carros':
                    getBrandName('carros');
                    break;

                case 'motos':
                    getBrandName('motos');
                    break;

                case 'caminhoes':
                    getBrandName('caminhoes');
                    break;

                default:
                    console.log('Selecione o tipo');
                    break;
            }

        });

        myBrand.addEventListener('change', function(ev){

            getModelName(myBrand[myBrand.selectedIndex].id);

        });

        function getBrandName(veiculo) {
            
            $.get('http://fipeapi.appspot.com/api/1/' + veiculo + '/marcas.json', function(resp) {

                $("#brand").append("<option>Selecione a marca</option>");

                for (var i = 0; i < resp.length; i++) {
                    
                    $("#brand").append(`<option value="${resp[i].fipe_name}" id="${resp[i].id}">${resp[i].fipe_name}</option>`);
                }
                
            });
        }

        function getModelName(marca) {
            
            $.get('http://fipeapi.appspot.com/api/1/carros/veiculos/' + marca + '.json', function(resp) {

                $("#model").append("<option>Selecione o modelo</option>");

                for (var i = 0; i < resp.length; i++) {
                    
                    $("#model").append(`<option value="${resp[i].fipe_name}" id="${resp[i].id}">${resp[i].fipe_name}</option>`);
                }
                
            });
        }

    </script>

@stop