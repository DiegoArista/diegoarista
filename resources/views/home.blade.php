@extends('layouts.admin')

@section('content')
<!-- <div class="">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Estas Logueado!
                </div>
            </div>
        </div>
    </div>
</div> -->








































<section class="">
        <div class="container-fluid">
            <!-- Counter Examples -->
            <div class="block-header">
                <h2>
                    !Bienvenido!
                    <small>Este es tu panel de administración</small>
                </h2>
            </div>
            <div class="row">
                <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">shopping_cart</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL PEDIDOS</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">0</div>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-indigo hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">face</i>
                        </div>
                        <div class="content">
                            <div class="text">SUSCRIPTORES</div>
                            <div class="number count-to" data-from="0" data-to="{{
                            $subscriptors
                            }}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-purple hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">bookmark</i>
                        </div>
                        <div class="content">
                            <div class="text">POSTS PUBLICADOS</div>
                            <div class="number count-to" data-from="0" data-to="{{ $posts_p}}" data-speed="1000" data-fresh-interval="20">{{ $posts_p}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">email</i>
                        </div>
                        <div class="content">
                            <div class="text">POSTS BORRADOR</div>
                            <div class="number  count-to" data-from="0" data-to="{{ $posts_d }}" data-speed="1000" data-fresh-interval="20">15</div>
                        </div>
                    </div>

                </div>


                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">style</i>
                        </div>
                        <div class="content">
                            <div class="text">CATEGORIAS</div>

                            <div class="number count-to" data-from="0" data-to="{{ $categories}}" data-speed="1000" data-fresh-interval="20">{{ $posts_p}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-teal hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">label</i>
                        </div>
                        <div class="content">
                            <div class="text">Tags</div>
                            <div class="number  count-to" data-from="0" data-to="{{ $tags }}" data-speed="1000" data-fresh-interval="20">15</div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- #END# Counter Examples -->
            <!-- Hover Zoom Effect -->
            <div class="block-header">

            <!-- ELEMENTO H2 BORRADO -->
            </div>
            <div class="row">


            </div>
            <!-- #END# Hover Zoom Effect -->

            <!-- Chart Samples -->
            <!-- <div class="block-header"> -->
                <!-- <h2>CHART SAMPLES</h2> -->
            <!-- </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-yellow">
                        <div class="icon">
                            <div class="chart chart-bar">6,4,8,6,8,10,5,6,7,9,5</div>
                        </div>
                        <div class="content">
                            <div class="text">WEBSITE TRAFFICS</div>
                            <div class="number">127 526</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-amber">
                        <div class="icon">
                            <div class="chart chart-bar">6,4,8,6,8,10,5,6,7,9,5</div>
                        </div>
                        <div class="content">
                            <div class="text">WEBSITE IMPRESSIONS</div>
                            <div class="number">457 512</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange">
                        <div class="icon">
                            <div class="chart chart-pie">30, 35, 25, 8</div>
                        </div>
                        <div class="content">
                            <div class="text">USAGE</div>
                            <div class="number">98%</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-deep-orange">
                        <div class="icon">
                            <div class="chart chart-pie">30, 35, 25, 10</div>
                        </div>
                        <div class="content">
                            <div class="text">USAGE</div>
                            <div class="number">100%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-brown">
                        <div class="icon">
                            <span class="chart chart-line">9,4,6,5,6,4,7,3</span>
                        </div>
                        <div class="content">
                            <div class="text">DAILY SALES</div>
                            <div class="number">$12 526</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-grey">
                        <div class="icon">
                            <span class="chart chart-line">9,4,6,5,6,4,7,3</span>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL SALES</div>
                            <div class="number">$125 543</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-blue-grey">
                        <div class="icon">
                            <div class="chart chart-bar">4,6,-3,-1,2,-2,4,3,6,7,-2,3</div>
                        </div>
                        <div class="content">
                            <div class="text">CURRENCY</div>
                            <div class="number">$1 063</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-black">
                        <div class="icon">
                            <div class="chart chart-bar">4,6,-3,-1,2,-2,4,3,6,7,-2,3</div>
                        </div>
                        <div class="content">
                            <div class="text">CURRENCY</div>
                            <div class="number">$1 125</div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- #END# Chart Samples -->
        </div>
    </section>
@endsection
