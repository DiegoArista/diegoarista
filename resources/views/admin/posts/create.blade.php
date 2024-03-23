@extends('layouts.admin')

@section('content')


        <div class="container-fluid">
            <div class="block-header">
                <h2>
                 NUEVA ENTRADA

                </h2>

            </div>
            <div class="body">


                            <ol class="breadcrumb">
                                <li>
                                    <a href="{{ route('home') }}">
                                        <i class="material-icons">home</i> Home
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="{{ route('posts.index') }}">
                                        <i class="material-icons">mode_edit</i> Posts
                                    </a>
                                </li>
                            </ol>
                        </div>
            <a href="{{ route('posts.index')}}" class="btn btn-default pull-right ">VOLVER</a>


            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                POSTS
                            </h2>
                            <!-- <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                        <div class="body">
                           {!! Form::open(['route' => 'posts.store', 'files' => true]) !!}

                           @include('admin.posts.partials.form')

                           {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->


@endsection
