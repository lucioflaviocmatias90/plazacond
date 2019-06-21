@extends('adminlte::page')

@section('title', ' | Residentes')

@section('content_header')
    <h1>Residentes</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{ route('resident.create') }}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>
                        Residente</a>
                </div>
                <div class="col-md-5 pull-right">
                    <form action="{{ route('resident.search') }}" method="POST">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" name="search"
                                   placeholder="Digite o nome do residente">
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
                    @if($residents->count() > 0)
                        <table id="tabela" class="table table-bordered table-hover dataTable">
                            <thead>
                            <tr>
                                <th>Bl/Ap</th>
                                <th>Nome Completo</th>
                                <th>Telefone</th>
                                <th>Sexo</th>
                                <th>Opção</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($residents as $resident)
                                @if($resident->owner)
                                    <tr>
                                        <td>{{ $resident->owner->apartment->blap }}</td>
                                        <td>
                                            <a href="{{ route('resident.show', ['resident'=>$resident->id]) }}">{{ $resident->fullname }}</a>
                                        </td>
                                        <td>{{ $resident->phone }}</td>
                                        <td>{{ $resident->gender }}</td>
                                        <td>
                                            <a href="{{ route('resident.edit', ['resident'=>$resident->id]) }}"
                                                   class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i>
                                                    editar</a>
                                            <form action="{{ route('resident.destroy', ['resident'=>$resident->id]) }}"
                                                  method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-xs btn-danger"><i
                                                            class="fa fa-trash"></i> apagar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Bl/Ap</th>
                                <th>Nome Completo</th>
                                <th>Telefone</th>
                                <th>Sexo</th>
                                <th>Opção</th>
                            </tr>
                            </tfoot>
                        </table>
                    @else
                        <div class="callout callout-danger">
                            <h4>Nenhum residente cadastrado!</h4>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- /.box-body -->

        @if($residents->count() > 0)
            <div class="box-footer">
                {{ $residents->links() }}
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