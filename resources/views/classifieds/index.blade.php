@extends('adminlte::page')

@section('title', ' | Classificados')

@section('content_header')
    <h1>Classificados</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{ route('classified.create') }}" class="btn btn-sm btn-success" id="addMorador"><i
                                class="fa fa-plus"></i> Anúncio</a>
                </div>
                <div class="col-md-5 pull-right">
                    <form action="/classified/search" method="POST">
                        <div class="input-group" id="search">
                            <input type="text" class="form-control" placeholder="Buscar Anúncios">
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
                    @if($classifieds->count() > 0)
                        <div class="row">
                            @foreach($classifieds as $classified)
                                {{--<div class="col-sm-3">--}}
                                {{--<div class="panel panel-default">--}}
                                {{--<div class="panel-body">--}}
                                {{--<img alt="Anilhas e halteres" aria-hidden="true" class="img-responsive" src="https://scontent.fsjp1-1.fna.fbcdn.net/v/t1.0-0/c0.139.540.540a/s370x247/56598185_2098036063617564_5193124032236486656_n.jpg?_nc_cat=103&amp;_nc_ht=scontent.fsjp1-1.fna&amp;oh=3697741cfaec9324ff81211cc5f8b22d&amp;oe=5D496717"  title="Anilhas e halteres">--}}
                                {{--</div>--}}
                                {{--<div id="list-example" class="list-group">--}}
                                {{--<a class="list-group-item list-group-item-action" href="#list-item-1">{{ $classified->title }}</a>--}}
                                {{--<a class="list-group-item list-group-item-action" href="#list-item-2">{{ $classified->price }}</a>--}}
                                {{--<a class="list-group-item list-group-item-action" href="#list-item-3">{{ $classified->owner->blap }}</a>--}}
                                {{--<a class="list-group-item list-group-item-action" href="#list-item-3">{{ $classified->description }}</a>--}}
                                {{--</div>--}}
                                {{--<div class="panel-footer">--}}
                                {{--<div class="btn-group">--}}
                                {{--<a href="{{ route('classified.edit', ['classified'=>$classified->id]) }}" class="btn btn-warning btn-sm">editar</a>--}}
                                {{--<form action="{{ route('classified.destroy', ['classified'=>$classified->id]) }}" method="POST" style="display: inline;">--}}
                                {{--@csrf--}}
                                {{--@method('DELETE')--}}
                                {{--<button type="submit" class="btn btn-danger btn-sm">apagar</button>--}}
                                {{--</form>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                <div class="_7yc _3ogd col-md-3">
                                    <a class="_1oem" data-testid="marketplace_feed_item"
                                       href="{{ route('classified.show', ['classified'=>$classified->id]) }}" title="{{ $classified->title }}">
                                        <div class="_7yc _4e36">
                                            <section class="_7yd _4e37" style="height: 245px;">
                                                <div>
                                                    <div class="_f3l _3fcx _4x3g">R$&nbsp;{{ $classified->price }}</div>
                                                    <img alt="{{ $classified->title }}" aria-hidden="true" class="_7ye img imagem"
                                                         src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fmarketingdeconteudo.com%2Fwp-content%2Fuploads%2F2016%2F08%2Fimagens-gratis-6.jpg&f=1"
                                                         title="{{ $classified->title }}">
                                                </div>
                                            </section>
                                            <section class="_2_8o _2ms_" style="padding: 5px;">
                                                <div id="marketplace-modal-dialog-title" categoryid="686977074745292"
                                                     lines="1" title="{{ $classified->title }}" class=" _50f4 _50f7">
                                                    <p class="_2tux _214v" data-testid="marketplace_pdp_title">
                                                        {{ $classified->title }}
                                                    </p>
                                                </div>
                                                <div class="_uc9 _3fcj _214v fsm fwn fcg" style="font-size: 12px;">
                                                    {{ $classified->description }}
                                                </div>
                                                <span class="_3m-n"></span>
                                            </section>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="callout callout-danger">
                            <h4>Nenhum anúncio cadastrado!</h4>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- /.box-body -->

        @if($classifieds->count() > 0)
            <div class="box-footer">
                {{ $classifieds->links() }}
            </div>
            <!-- /.box-footer -->
        @endif
    </div>
@stop

@section('css')
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
    <style>
        #facebook ._-kb div {
            font-family: inherit;
        }

        ._3fcx {
            background-color: rgba(0, 0, 0, .8);
            font-size: 14px;
            font-weight: 600;
            line-height: 18px;
            padding: 4px;
        }

        ._4x3g {
            border: none;
            border-radius: 3px;
            box-sizing: content-box;
            color: #fff;
            font-size: 13px;
            -moz-osx-font-smoothing: grayscale;
            font-weight: normal;
            line-height: 14px;
            padding: 5px;
            text-align: center;
            text-shadow: none;
            vertical-align: middle;
        }

        ._f3l {
            background-color: rgba(0, 0, 0, .8);
            bottom: 65px;
            left: 10px;
            position: absolute;
            z-index: 2;
        }

        #facebook ._-kb div {
            font-family: inherit;
        }

        ._50f7 {
            font-weight: 600;
        }

        ._50f4 {
            font-size: 14px;
            line-height: 18px;
        }

        facebook ._-kb div {
            font-family: inherit;
        }

        ._3fcj {
            margin-top: 0;
        }

        ._uc9 {
            font-size: 12px;
            margin-top: 8px;
        }

        ._214v {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .fcg {
            color: #90949c;
        }

        .fwn {
            font-weight: normal;
        }

        .fsm {
            font-size: 12px;
        }

        ._7ye {
            position: relative;
        }

        img {
            border: 0;
        }

        #facebook ._-kb div {

            font-family: inherit;

        }

        ._7yc._7yc {

            cursor: pointer;
            margin-bottom: 8px;

        }

        ._40xc ._3ogd {

            margin-bottom: 12px;
            margin-right: 12px;

        }

        ._7yc {

            position: relative;

        }

        #facebook ._-kb div {
            font-family: inherit;
        }

        ._4e36._4e36 {
            background-color: #fff;
            border: 1px solid #dadde1;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 0;
        }

        .imagem {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: 245px;
        }


    </style>
@stop

@section('js')

    <script type="text/javascript" src="{{ asset('/js/style.js') }}"></script>

@stop