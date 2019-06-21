@extends('adminlte::page')

@section('title', ' | Proprietários')

@section('content_header')
    <h1>Proprietários</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{ route('owner.create') }}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>
                        Proprietário</a>
                </div>
                <div class="col-md-5 pull-right">
                    <form action="{{ route('owner.search') }}" method="POST">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" name="search"
                                   placeholder="Digite o nome do Proprietário">
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
                    @if($owners->count() > 0)
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
                            @foreach($owners as $ow)
                                <tr>
                                    <td>{{ $ow->apartment->blap }}</td>
                                    <td>
                                        <a href="{{ route('owner.show', ['owner'=>$ow->id]) }}">{{ $ow->fullname }}</a>
                                    </td>
                                    <td>
                                        @switch($ow->apartment->condition)

                                            @case('vazio')
                                            <span class="label label-default">{{ $ow->apartment->condition }}</span>
                                            @break;

                                            @case('alugado')
                                            <span class="label label-primary">{{ $ow->apartment->condition }}</span>
                                            @break;

                                            @case('residindo')
                                            <span class="label label-success">{{ $ow->apartment->condition }}</span>
                                            @break;

                                            @case('vende-se')
                                            <span class="label label-danger">{{ $ow->apartment->condition }}</span>
                                            @break;

                                            @case('aluga-se')
                                            <span class="label label-warning">{{ $ow->apartment->condition }}</span>
                                            @break;

                                        @endswitch
                                    </td>
                                    <td>{{ $ow->phone ?? '--' }}</td>
                                    <td>
                                        <a href="{{ route('owner.edit', ['owner'=>$ow->id]) }}"
                                               class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> editar</a>
                                        <form action="{{ route('owner.destroy', ['owner'=>$ow->id]) }}"
                                              method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-xs"><i
                                                        class="fa fa-trash"></i> apagar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
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
                    @else
                        <div class="callout callout-danger">
                            <h4>Nenhum proprietário cadastrado!</h4>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            {{ $owners->links() }}
        </div>
        <!-- /.box-footer -->
    </div>

    <!-- Modal -->
    <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Editar Proprietário</h4>
                </div>
                <div class="modal-body">
                    <!-- form start -->
                    <form role="form" enctype="multipart/form-data">

                        <div class="box-body">

                            <div class="col-md-3">
                                <img class="profile-user-img img-responsive img-circle" src=""
                                     alt="User profile picture">
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
                                        <input type="text" class="form-control" id="fullname" name="fullname"
                                               placeholder="Digite o seu nome completo sem abreviar" required=""
                                               value="">
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
                                        <label>Data Nascimento:</label><span class="text-muted"
                                                                             style="margin-left: 10px">(Opcional)</span>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" id="birthday" name="birthday"
                                                   placeholder="xx/xx/xxxx">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->

                                    <div class="form-group col-md-4">
                                        <label for="phone">Telefone</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                               placeholder="(xx) xxxxx-xxxx" required="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="rg">RG</label><span class="text-muted" style="margin-left: 10px">(Opcional)</span>
                                        <input type="text" class="form-control" id="rg" name="rg"
                                               placeholder="xx.xxx.xxx-x">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="cpf">CPF</label><span class="text-muted" style="margin-left: 10px">(Opcional)</span>
                                        <input type="text" class="form-control" id="cpf" name="cpf"
                                               placeholder="xxx.xxx.xxx-xx">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label><span class="text-muted"
                                                                              style="margin-left: 10px">(Opcional)</span>
                                        <input type="text" class="form-control" id="email" name="email"
                                               placeholder="xx.xxx.xxx-x">
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

@stop