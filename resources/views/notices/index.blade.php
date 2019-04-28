@extends('adminlte::page')

@section('title', ' | Comunicados')

@section('content_header')
<h1>Comunicados</h1>
@stop

@section('content')
<div class="box">
	<div class="box-header">
		<form>
			<div class="input-group" id="search">
				<input type="text" class="form-control" placeholder="Digite o nome do proprietário">
				<span class="input-group-btn">
					<button type="button" class="btn btn-default" type="button"><i class="fa fa-search"></i>  Pesquisar</button>
				</span>
			</div>
		</form>
	</div>
	<!-- /.box-header -->
	<div class="box-body">    
		<div class="row">
			<div class="col-sm-12">
				<table id="tabela" class="table table-bordered table-hover dataTable">
					<thead>
						<tr>
							<th>Bl/Ap</th>
							<th>Proprietários</th>
							<th>Condição</th>
							<th>Telefone</th>
							<th>Opção</th>                            
						</tr>
					</thead>
					<tbody>

					</tbody>
					<tfoot>
						<tr>
							<th>Bl/Ap</th>
							<th>Proprietários</th>
							<th>Condição</th>
							<th>Telefone</th>
							<th>Opção</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
	<!-- /.box-body -->

	<div class="box-footer">
		<nav id="paginator">
            <ul class="pagination">
            </ul>
        </nav>
	</div>
	<!-- /.box-footer -->
</div>

<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Editar Proprietário</h4>
			</div>
			<div class="modal-body">
				<!-- form start -->
				<form role="form" enctype="multipart/form-data">
					
					<div class="box-body">

						<div class="col-md-3">
							<img class="profile-user-img img-responsive img-circle" src="" alt="User profile picture">
							<p class="text-muted text-center" id="blap">Proprietário - A/12</p>

							<div class="form-group">
								<label for="photo_path">Selecione uma foto</label>
								<span class="text-muted" style="margin-left: 10px">(Opcional)</span>
								<input type="file" id="photo_path" name="photo_path">
							</div>
						</div>
						<div class="col-md-9">                

							<div class="row">
								<div class="form-group col-md-9">
									<label for="fullname">Nome Completo</label>
									<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Digite o seu nome completo sem abreviar" required="" value="">
								</div>

								<div class="form-group col-md-3">
									<label for="condition">Condição</label>
									<select class="form-control" id="condition" name="condition">
										<option value="alugado">alugado</option>
										<option value="residindo">residindo</option>
										<option value="aluga-se">aluga-se</option>
										<option value="vende-se">vende-se</option>
										<option value="vazio">vazio</option>
									</select>
								</div>                     
							</div>  

							<div class="row">

								<div class="form-group col-md-4">
									<label for="gender">Sexo</label>
									<select class="form-control" id="gender" name="gender">
										<option value="masculino">masculino</option>
										<option value="feminino">feminino</option>
									</select>
								</div>

								<!-- Date dd/mm/yyyy -->
								<div class="form-group col-md-4">
									<label>Data Nascimento:</label><span class="text-muted" style="margin-left: 10px">(Opcional)</span>

									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="text" class="form-control" id="birthday" name="birthday" placeholder="xx/xx/xxxx">
									</div>
									<!-- /.input group -->
								</div>
								<!-- /.form group -->

								<div class="form-group col-md-4">
									<label for="phone">Telefone</label>
									<input type="text" class="form-control" id="phone" name="phone" placeholder="(xx) xxxxx-xxxx" required="">
								</div>
							</div>              

							<div class="row">
								<div class="form-group col-md-3">
									<label for="rg">RG</label><span class="text-muted" style="margin-left: 10px">(Opcional)</span>
									<input type="text" class="form-control" id="rg" name="rg" placeholder="xx.xxx.xxx-x">
								</div>

								<div class="form-group col-md-3">
									<label for="cpf">CPF</label><span class="text-muted" style="margin-left: 10px">(Opcional)</span>
									<input type="text" class="form-control" id="cpf" name="cpf" placeholder="xxx.xxx.xxx-xx">
								</div>

								<div class="form-group col-md-6">
									<label for="email">Email</label><span class="text-muted" style="margin-left: 10px">(Opcional)</span>
									<input type="text" class="form-control" id="email" name="email" placeholder="xx.xxx.xxx-x">
								</div>
							</div>                

						</div>                               
					</div>
					<!-- /.box-body -->
				</form>
			</div>
			<div class="modal-footer">
				<div class="btn-group">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					<button type="button" class="btn btn-primary">Salvar</button>
				</div>
			</div>
		</div>
	</div>
</div>
@stop

@section('css')
<!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('js')

<script type="text/javascript" src="{{ asset('/js/style.js') }}"></script>

<script>	

    function carregarClientes(pagina) {

        $.getJSON('/api/owner', {page: pagina}, function(resp) {

            montarPaginator(resp);

            montarTabela(resp);
        });
    }

    // buscar proprietários
    document.querySelector('#search>span>button').addEventListener('click', function(ev){

    	buscar = document.querySelector('#search>input').value;

    	$.getJSON(`/api/owner/search/${buscar}`, function(resp) {

	  		montarTabela(resp);

	  		montarPaginator(resp);
		});
	});           

    $(function() {

        $.getJSON('/api/owner', function(resp) {

            carregarClientes(resp.current_page);
        });
    });

</script>
@stop