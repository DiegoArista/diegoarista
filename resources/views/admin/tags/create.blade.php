@extends('layouts.admin')

@section('content')

   
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                 NUEVA ETIQUETA
                   
                </h2>
            </div>

            <a href="{{ route('tags.index')}}" class="btn btn-default pull-right ">VOLVER</a>

            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                TAGS
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
                            {!! Form::open(['route' => 'tags.store']) !!}
                           
                            
                           @include('admin.tags.partials.form')
                            
                           {!! Form::close() !!}
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
  
    
@endsection
