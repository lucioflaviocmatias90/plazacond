@extends('adminlte::page')

@section('title', ' | Proprietário')

@section('content_header')
    <h1>Dashboard Proprietário</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-md-3" id="perfilProprietario">
            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle"
                         src="{{ $owner->photo_path == '' ? '/img/profile.png' : str_replace(['["', '"]', '\\'], ['', '', ''], $owner->photo_path) }}"
                         alt="User profile picture">

                    <h3 class="profile-username text-center">{{ $owner->fullname }}</h3>

                    <p class="text-muted text-center">Proprietário - {{ $owner->apartment->blap }}</p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Residentes</b> <a class="pull-right">{{ $owner->resident_count }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Correspondências</b> <a class="pull-right">{{ $owner->letter_count }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Visitas</b> <a class="pull-right">{{ $owner->visitor_count }}</a>
                        </li>
                    </ul>

                    <a href="{{ route('owner.edit', ['owner'=>$owner->id]) }}" class="btn btn-warning btn-block"><b>Editar
                            Perfil</b></a>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- About Me Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Sobre Mim</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <strong><i class="fa fa-check-square-o margin-r-5"></i> Status</strong>

                            @switch($owner->apartment->condition->name)

                                @case('vazio')
                                <p class="text-muted"><span
                                            class="label label-default">{{ $owner->apartment->condition->name }}</span></p>
                                @break

                                @case('alugado')
                                <p class="text-muted"><span
                                            class="label label-primary">{{ $owner->apartment->condition->name }}</span></p>
                                @break

                                @case('residindo')
                                <p class="text-muted"><span
                                            class="label label-success">{{ $owner->apartment->condition->name }}</span></p>
                                @break

                                @case('vende-se')
                                <p class="text-muted"><span
                                            class="label label-danger">{{ $owner->apartment->condition->name }}</span></p>
                                @break

                                @case('aluga-se')
                                <p class="text-muted"><span
                                            class="label label-warning">{{ $owner->apartment->condition->name }}</span></p>
                                @break

                            @endswitch
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <strong><i class="fa fa-phone margin-r-5"></i> Telefone</strong>
                            <p class="text-muted">{{ $owner->phone }}</p>
                            <hr>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <strong><i class="fa fa-envelope margin-r-5"></i> Email</strong>
                            <p class="text-muted">{{ $owner->email }}</p>
                            <hr>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <strong><i class="fa fa-venus-mars margin-r-5"></i> Sexo</strong>
                            <p class="text-muted">{{ $owner->gender }}</p>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <strong><i class="fa fa-calendar margin-r-5"></i> Aniversário</strong>
                            <p class="text-muted">{{ $owner->birthday }}</p>
                            <hr>
                        </div>
                    </div>

                    <strong><i class="fa fa-file-text-o margin-r-5"></i> Observações</strong>
                    <p>{{ $owner->observation }}</p>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#timeline" data-toggle="tab">Linha do Tempo</a></li>
                    <li><a href="#residentes" data-toggle="tab">Residentes</a></li>
                    <li><a href="#comunicados" data-toggle="tab">Comunicados</a></li>
                    <li><a href="#correspondencias" data-toggle="tab">Correspondências</a></li>
                    <li><a href="#veiculos" data-toggle="tab">Veículos</a></li>
                </ul>
                <div class="tab-content">

                    <div class="tab-pane active" id="timeline">
                        <!-- The timeline -->
                        <ul class="timeline timeline-inverse">
                            <!-- timeline time label -->
                            <li class="time-label">
                                <span class="bg-red">
                                    10 Feb. 2014
                                </span>
                            </li>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-envelope bg-blue"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                                    <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                    <div class="timeline-body">
                                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                        quora plaxo ideeli hulu weebly balihoo...
                                    </div>
                                    <div class="timeline-footer">
                                        <a class="btn btn-primary btn-xs">Read more</a>
                                        <a class="btn btn-danger btn-xs">Delete</a>
                                    </div>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-user bg-aqua"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                                    <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your
                                        friend request
                                    </h3>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-comments bg-yellow"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                                    <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                                    <div class="timeline-body">
                                        Take me to your leader!
                                        Switzerland is small and neutral!
                                        We are more like Germany, ambitious and misunderstood!
                                    </div>
                                    <div class="timeline-footer">
                                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                                    </div>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <!-- timeline time label -->
                            <li class="time-label">
                                <span class="bg-green">
                                    3 Jan. 2014
                                </span>
                            </li>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-camera bg-purple"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                                    <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                                    <div class="timeline-body">
                                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                                    </div>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <li>
                                <i class="fa fa-clock-o bg-gray"></i>
                            </li>
                        </ul>
                    </div>
                    <!-- /.tab-pane -->

                    <div class="tab-pane" id="residentes">
                        <!-- Post -->
                        <div class="post">
                            <div class="row margin-bottom">
                                <div class="col-sm-12">
                                    <a href="{{ route('resident.create') }}"
                                       class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"></i> Morador</a>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row">
                            @forelse($owner->resident as $resident)
                                <!-- /.col -->
                                    <div class="col-md-4">
                                        <!-- Widget: user widget style 1 -->
                                        <div class="box box-widget widget-user-2">
                                            <!-- Add the bg color to the header using any of the bg-* classes -->
                                            <div class="widget-user-header bg-purple">
                                                <div class="widget-user-image">
                                                    <img class="img-circle"
                                                         src="{{ $resident->photo_path == '' ? '/img/profile.png' : str_replace(['["', '"]', '\\'], ['', '', ''], $resident->photo_path) }}"
                                                         alt="User Avatar">
                                                </div>
                                                <!-- /.widget-user-image -->
                                                <h4 class="widget-user-username">{{ $resident->fullname }}</h4>
                                                @foreach($residentType as $key => $value)
                                                    <h5 class="widget-user-desc">
                                                        @if ($resident->resident_type == $value)
                                                            {{ $key }}
                                                        @endif
                                                    </h5>
                                                @endforeach
                                                <div class="timeline-footer">
                                                    <a href="{{ route('resident.edit', ['resident'=>$resident->id]) }}"
                                                       class="btn btn-warning btn-flat btn-xs">editar</a>
                                                    <form action="{{ route('resident.destroy', ['resident'=>$resident->id]) }}"
                                                          method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-flat btn-xs">
                                                            apagar
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="box-footer no-padding">
                                                <ul class="nav nav-stacked">
                                                    <li><a href="#">Sexo <span
                                                                    class="pull-right badge bg-blue">{{ $resident->gender }}</span></a>
                                                    </li>
                                                    <li><a href="#">Aniversário <span
                                                                    class="pull-right badge bg-aqua">{{ $resident->birthday }}</span></a>
                                                    </li>
                                                    <li><a href="#">Telefone <span
                                                                    class="pull-right badge bg-green">{{ $resident->phone }}</span></a>
                                                    </li>
                                                    <li><a href="#">RG <span
                                                                    class="pull-right badge bg-red">{{ $resident->rg }}</span></a>
                                                    </li>
                                                    <li><a href="#">CPF <span
                                                                    class="pull-right badge bg-red">{{ $resident->cpf }}</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /.widget-user -->
                                    </div>
                                    <!-- /.col -->
                                @empty
                                    <div class="col-md-12">
                                        <div class="callout callout-danger">
                                            <h4>Nenhum residente!</h4>
                                        </div>
                                        <!-- /.box -->
                                    </div>
                                @endif
                            </div>

                        </div>
                        <!-- /.post -->
                    </div>
                    <!-- /.tab-pane -->

                    <div class="tab-pane" id="comunicados">
                        <div class="row margin-bottom">
                            <div class="col-md-12">
                                <a href="{{ route('notice.create') }}" class="btn btn-success btn-sm pull-right"><i
                                            class="fa fa-plus"></i> Comunicado</a>
                            </div>
                        </div>

                    @forelse($owner->notice as $notice)
                        <!-- The timeline -->
                            <ul class="timeline timeline-inverse">

                                <!-- timeline time label -->
                                <li class="time-label">
                                <span class="bg-blue">
                                    {{ $notice->created_at }}
                                </span>
                                </li>
                                <!-- timeline item -->
                                <li>

                                    <div class="timeline-item">
                                        <span class="time"><i
                                                    class="fa fa-clock-o"></i> {{ $notice->created_at }}</span>

                                        <h3 class="timeline-header"><a href="#">{{ $notice->title }}</a></h3>

                                        <div class="timeline-body">
                                            {{ $notice->description }}
                                        </div>
                                        <div class="timeline-footer">
                                            <a href="{{ route('notice.edit', ['notice'=>$notice->id]) }}"
                                               class="btn btn-warning btn-flat btn-xs">editar</a>
                                            <form action="{{ route('notice.destroy', ['notice'=>$notice->id]) }}"
                                                  method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-flat btn-xs">apagar
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <!-- END timeline item -->

                                <li>
                                    <i class="fa fa-clock-o bg-gray"></i>
                                </li>
                            </ul>
                        @empty
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="callout callout-danger">
                                        <h4>Nenhum comunicado!</h4>
                                    </div>
                                    <!-- /.box -->
                                </div>
                            </div>
                    @endif
                    <!-- /.tab-pane -->

                    </div>
                    <!-- /.tab-pane -->

                    <div class="tab-pane" id="correspondencias">
                        <div class="row margin-bottom">
                            <div class="col-md-12">
                                <a href="{{ route('letter.create') }}" class="btn btn-success btn-sm pull-right"><i
                                            class="fa fa-plus"></i> Correspondência</a>
                            </div>
                        </div>

                        <div class="row">

                            <div class="box-body">
                                @if($owner->letter_count > 0)
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Título</th>
                                            <th>Status</th>
                                            <th>Observação</th>
                                            <th>Data</th>
                                            <th>#</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($owner->letter as $letter)
                                            <tr>
                                                <td>{{ $letter->title }}</td>
                                                <td>
                                                    <span class="badge bg-{{ $letter->status == 'portaria' ? 'yellow' : 'green'}}">{{ $letter->status }}</span>
                                                </td>
                                                <td>{{ $letter->observation }}</td>
                                                <td>{{ $letter->created_at }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ route('letter.show', ['letter'=>$letter->id]) }}"
                                                           class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>
                                                        <a href="{{ route('letter.edit', ['letter'=>$letter->id]) }}"
                                                           class="btn btn-warning btn-xs"><i
                                                                    class="fa fa-pencil"></i></a>
                                                        <form action="{{ route('letter.destroy', ['letter'=>$letter->id]) }}"
                                                              method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-xs"><i
                                                                        class="fa fa-trash"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>

                                    </table>
                                @else
                                    <div class="callout callout-danger">
                                        <h4>Nenhuma correspondência!</h4>
                                    </div>
                                @endif
                            </div>
                            <!-- /.box-body -->
                            @if($owner->letter_count > 0)
                                <div class="box-footer">
                                    paginação
                                </div>
                            @endif
                        </div>

                    </div>
                    <!-- /.tab-pane -->

                    <div class="tab-pane" id="veiculos">
                        <div class="row margin-bottom">
                            <div class="col-md-12">
                                <a href="{{ route('vehicle.create') }}" class="btn btn-success btn-sm pull-right"><i
                                            class="fa fa-plus"></i> Veículos</a>
                            </div>
                        </div>
                        <div class="row">
                            @forelse($owner->vehicle as $vehicle)
                                <div class="col-md-4">
                                    <!-- Widget: user widget style 1 -->
                                    <div class="box box-widget widget-user-2">
                                        <!-- Add the bg color to the header using any of the bg-* classes -->
                                        <div class="widget-user-header bg-purple"
                                             style="padding-bottom: 2px; padding-top: 2px;">
                                            <h3>Veículo
                                                @switch($vehicle->type_vehicle)
                                                    @case('carros')
                                                    <span class="fa fa-car pull-right"></span>
                                                    @break

                                                    @case('motos')
                                                    <span class="fa fa-motorcycle pull-right"></span>
                                                    @break

                                                    @case('caminhoes')
                                                    <span class="fa fa-truck pull-right"></span>
                                                    @break
                                                @endswitch
                                            </h3>

                                            <div class="timeline-footer">
                                                <a href="{{ route('vehicle.edit', ['vehicle'=>$vehicle->id]) }}"
                                                   class="btn btn-warning btn-flat btn-xs">editar</a>
                                                <form action="{{ route('vehicle.destroy', ['vehicle'=>$vehicle->id]) }}"
                                                      method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-flat btn-xs">
                                                        apagar
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="box-footer no-padding">
                                            <ul class="nav nav-stacked">
                                                <li>
                                                    <a href="#">Marca <span
                                                                class="pull-right badge bg-blue">{{ $vehicle->brand }}</span></a>
                                                </li>
                                                <li>
                                                    <a href="#">Modelo <span
                                                                class="pull-right badge bg-blue">{{ $vehicle->model }}</span></a>
                                                </li>
                                                <li>
                                                    <a href="#">Cor <span
                                                                class="pull-right badge bg-blue">{{ $vehicle->vehicle_color }}</span></a>
                                                </li>
                                                <li>
                                                    <a href="#">Placa <span
                                                                class="pull-right badge bg-blue">{{ $vehicle->vehicle_plate }}</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /.widget-user -->
                                </div>
                                <!-- /.col -->
                            @empty
                                <div class="col-md-12">
                                    <div class="callout callout-danger">
                                        <h4>Nenhum veículo!</h4>
                                    </div>
                                    <!-- /.box -->
                                </div>
                            @endif
                        </div>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop