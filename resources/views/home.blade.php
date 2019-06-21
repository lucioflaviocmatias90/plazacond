@extends('adminlte::page')

@section('title', ' | Home')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua">
                        <i class="ion ion-email"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">Correspondências</span>
                        <span class="info-box-number">{{ $lettersCount }}</span>
                        <small style="color: #909090; font-size: smaller;">(portaria)</small>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="ion ion-person-stalker"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Moradores</span>
                        <span class="info-box-number">{{ $residentsCount }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ion ion-model-s"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Veículos</span>
                        <span class="info-box-number">{{ $vehiclesCount }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Visitantes p/ Dia</span>
                        <span class="info-box-number">2,000</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Visitas por dias</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                            </button>
                            <div class="btn-group">
                                <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-wrench"></i></button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                        class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-center">
                                    <strong>Visitas feitas entre Janeiro a Dezembro de 2019</strong>
                                </p>

                                <div class="chart">
                                    <!-- Sales Chart Canvas -->
                                    <canvas id="salesChart"></canvas>
                                </div>
                                <!-- /.chart-responsive -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- ./box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
                <!-- MAP & BOX PANE -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- USERS LIST -->
                        <div class="box box-danger">
                            <div class="box-header with-border">
                                <h3 class="box-title">Moradores Recentes</h3>

                                <div class="box-tools pull-right">
                                    <span class="label label-danger">8 New Members</span>
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                                class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body no-padding">
                                <ul class="users-list clearfix">
                                    @foreach($residentsLatest as $residLatest)
                                    <li>
                                        <img src="{{ $residLatest->photo_path == '' ? '/img/profile.png' : '/storage/'.$residLatest->photo_path }}" alt="User Image">
                                        <a class="users-list-name" href="{{ route('resident.update', ['resident'=>$residLatest->id]) }}">{{ $residLatest->fullname }}</a>
                                        <span class="users-list-date">{{ $residLatest->created_at }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                                <!-- /.users-list -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer text-center">
                                <a href="{{ route('resident.index') }}" class="uppercase">
                                    Ver todos moradores cadastrados
                                </a>
                            </div>
                            <!-- /.box-footer -->
                        </div>
                        <!--/.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- COMUNICADOS -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Últimos Comunicados</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                        class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>BL/AP</th>
                                    <th>Título</th>
                                    <th>Status</th>
                                    <th>Data</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($noticesLatest as $noticelast)
                                <tr>
                                    <td>{{ $noticelast->owner->blap }}</td>
                                    <td><a href="{{ route('notice.show', ['notice'=>$noticelast->id])   }}">{{ $noticelast->title }}</a></td>
                                    <td><span class="label label-success">resolvido</span></td>
                                    <td>{{ $noticelast->created_at }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="{{ route('notice.create') }}" class="btn btn-sm btn-success btn-flat pull-right">Add</a>
                        <a href="{{ route('notice.index') }}" class="btn btn-sm btn-default btn-flat pull-right">Visualizar Todos</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->

            <div class="col-md-4">
                <!-- Info Boxes Style 2 -->
                <div class="info-box bg-yellow">
                    <span class="info-box-icon"><i class="ion ion-model-s"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Carros</span>
                        <span class="info-box-number">5,200</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                        <span class="progress-description">
								50% Increase in 30 Days
							</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box bg-green">
                    <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Motos</span>
                        <span class="info-box-number">92,050</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 20%"></div>
                        </div>
                        <span class="progress-description">
								20% Increase in 30 Days
							</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box bg-red">
                    <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Utilitários</span>
                        <span class="info-box-number">114,381</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
								70% Increase in 30 Days
							</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->

                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Moradores</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                <i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="chart-responsive">
                                    <canvas id="pieChart" height="150"></canvas>
                                </div>
                                <!-- ./chart-responsive -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- CLASSIFICADOS -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Classificados Recentemente</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                        class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <ul class="products-list product-list-in-box">
                            @foreach($classifieds as $classified)
                            <li class="item">
                                <div class="product-img">
                                    <img src="{{ $classified->photo_path == '' ? '/img/no_image.jpg' : str_replace(['["', '"]', '\\'], ['', '', ''], $classified->photo_path) }}" alt="Product Image">
                                </div>
                                <div class="product-info">
                                    <a href="{{ route('classified.show', ['classified'=>$classified->id]) }}" class="product-title">{{ $classified->title }}
                                    <span class="label label-warning pull-right">R$ {{ $classified->price }}</span></a>
                                    <span class="product-description">
									   {{ $classified->description }}
									</span>
                                </div>
                            </li>
                            <!-- /.item -->
                            @endforeach
                        </ul>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href="{{ route('classified.index') }}" class="uppercase">Visualizar todos anúncios</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
    </section>
@stop

@section('css')
    <!-- eu coloco minha link rel aqui -->
@stop

@section('js')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script>
        var residindo = 0;
        var alugado = 0;
        var alugaSe = 0;
        var vendeSe = 0;
        var vazio = 0;
        var novoArray = [];

        axios.get('/api/owner').then(response => {

            for(let res of response.data) {
                if (res.condition == 'residindo') {
                    residindo++;
                }
                if (res.condition == 'alugado') {
                    alugado++;
                }
                if (res.condition == 'aluga-se') {
                    alugaSe++;
                }
                if (res.condition == 'vende-se') {
                    vendeSe++;
                }
                if (res.condition == 'vazio') {
                    vazio++;
                }
            };

            novoArray.push(residindo, alugado, alugaSe, vendeSe, vazio);

            console.log(novoArray);

            var ctx = document.getElementById("pieChart").getContext('2d');

            var myChart = new Chart(ctx, {

                type: 'pie',

                data: {
                    datasets: [{
                        label: '# de Moradores',
                        // data: [12, 19, 3, 5, 2],
                        data: novoArray,
                        backgroundColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)'
                        ],
                        borderWidth: 0.1
                    }],
                    labels: ['residindo', 'alugado', 'aluga-se', 'vende-se', 'vazio'],
                },
                options: {
                    tooltips: {
                        mode: 'index'
                    }
                }
            });

        }).catch(error => {
            console.log(error)
        });

        var ctx2 = document.getElementById("salesChart").getContext('2d');

        var myBarChart = new Chart(ctx2, {

            type: 'bar',

            data: {
                datasets: [{
                    label: '# quantidade de visitas',
                    data: [12, 19, 3, 9, 7, 12, 19, 3, 5, 7, 12, 3],
                    // data: novoArray,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 0.8,
                    hoverBackgroundColor: '#e9e9e9'
                }],
                labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro']
            },
            options: {
                tooltips: {
                    mode: 'index'
                }
            }
        });
    </script>
@stop