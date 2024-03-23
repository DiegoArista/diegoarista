@extends('layouts.admin')

@section('content')

   
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    ETIQUETAS
                   
                </h2>
            </div>
            <a href="{{ route('tags.create')}}" class="btn btn-primary pull-right">NUEVA</a>

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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nombre</th>
                                            <th>Ver</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nombre</th>
                                            <th>Ver</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($tags as $tag)
                                        <tr>
                                            <td>{{ $tag->id }}</td>
                                            <td>{{ $tag->name }}</td>
                                            <td> 
                                                <a   href="{{ route('tags.show', $tag->id)}}">   <i class="material-icons">emove_red_eye</i></a> 
                                            </td>
                                            <td> <a   href="{{ route('tags.edit', $tag->id)}}"><i class="material-icons">mode_edit</i></a>
                                        </td>
                                            <td>
                                                {!! Form::open(['route' => ['tags.destroy', $tag->id],
                                                
                                                'method' => 'delete'])
                                                !!}
                                                <button class="btn btn-danger"><i class="material-icons">delete</i></button>
                                                {!! Form::close() !!}
                                            </td>
                                          
                                        </tr>
                                        @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
  
    
@endsection
