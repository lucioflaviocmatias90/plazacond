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
                    @if($classifieds->count() > 0)
                        <div class="row">
                            @foreach($classifieds as $classified)
                                <div class="_7yc _3ogd col-md-3">
                                    <a class="_1oem" data-testid="marketplace_feed_item"
                                       href="{{ route('classified.show', ['classified'=>$classified->id]) }}" title="{{ $classified->title }}">
                                        <div class="_7yc _4e36">
                                            <section class="_7yd _4e37" style="height: 245px;">
                                                <div>
                                                    <div class="_f3l _3fcx _4x3g">R$&nbsp;{{ $classified->price }}</div>
                                                    <img alt="{{ $classified->title }}" aria-hidden="true" class="_7ye img imagem"
                                                         src="{{ $classified->photo_path == '' ? '/img/no_image.jpg' : str_replace(['["', '"]', '\\'], ['', '', ''], $classified->photo_path) }}"
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