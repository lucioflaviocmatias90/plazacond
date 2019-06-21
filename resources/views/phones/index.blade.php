@extends('adminlte::page')

@section('title', ' | Telefones Úteis')

@section('content_header')
    <h1>Telefones Úteis</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{ route('owner.create') }}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>
                        Telefone</a>
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
                    @if($phones->count() > 0)
                        <table id="tabela" class="table table-bordered table-hover dataTable">
                            <thead>
                            <tr>
                                <th>Título</th>
                                <th>Telefone</th>
                                <th>Opção</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($phones as $phone)
                                <tr>
                                    <td>{{ $phone->name }}</td>
                                    <td>{{ $phone->number }}</td>
                                    <td>
                                        <a href="{{ route('owner.edit', ['owner'=>$phone->id]) }}"
                                               class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> editar</a>
                                        <form action="{{ route('owner.destroy', ['owner'=>$phone->id]) }}"
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
                                <th>Título</th>
                                <th>Telefone</th>
                                <th>Opção</th>
                            </tr>
                            </tfoot>
                        </table>
                    @else
                        <div class="callout callout-danger">
                            <h4>Nenhum telefone cadastrado!</h4>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            {{ $phones->links() }}
        </div>
        <!-- /.box-footer -->
    </div>
@stop

@section('css')
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('js')

@stop