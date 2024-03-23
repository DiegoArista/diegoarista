@extends('layouts.admin')

@section('content')
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                EDITAR ENTRADA
                </h2>
            </div>
            <a href="{{ route('posts.create')}}" class="btn btn-primary pull-right">NUEVA</a>
            <a href="{{ route('posts.index')}}" class="btn btn-default  pull-right ">VOLVER</a>

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
                           {!! Form::model($post, ['route' => ['posts.update', $post->id],
                            'method' => 'put', 'files' => true]) !!}

                           @include('admin.posts.partials.form')

                           {!! Form::close() !!}

                        </div>



 @section('scripts')

 <script src="{{ asset('vendor/speakingurl.min.js')}}"></script>
<script src="{{ asset('vendor/jquery.stringtoslug.min/jquery.stringtoslug.min.js')}}"></script>
<script >
	$(document).ready(function(){
		$("#name").stringToSlug({
			callback:function(text){
				$("#slug").val(text);
			}
		});
	});
</script>
@endsection

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->


@endsection
