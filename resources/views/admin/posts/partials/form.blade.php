

                          {{ Form::hidden('user_id', auth()->user()->id) }}


                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    {{ Form::label('category_id', 'Categorias') }}
                                    {{ Form::select('category_id', $categories, null, ['class' => 'form-control show-tick', 'required' ]) }}
                                </div>




                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        {{ Form::label('name', 'Titulo de la entrada') }}
                                        {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Titulo de la entrada' , 'required']) }}

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        {{ Form::label('name', 'URL Amigable') }}
                                        {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug', 'placeholder' => 'URL Amigable' , 'required']) }}


                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        {{ Form::label('file', 'Imagen Principal') }}
                                        {{ Form::file('file',  ['class' => 'form-control', 'accept'=> 'image/*']) }}


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        {{ Form::label('status', 'Estado del Post') }}

                                        {{ Form::radio('status', 'PUBLISHED', ['id' => 'radio_1']) }}



                                            <input name="status" type="radio" id="radio_1" value="PUBLISHED"   />
                                            <label for="radio_1">Publicado</label>
                                            {{ Form::radio('status', 'DRAFT', ['id' => 'radio_2']) }}


                                            <label for="radio_2">Borrador</label>



                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                {{ Form::label('tags', 'Etiquetas') }}

                                    <div>
                                        @foreach($tags as $tag)


                                            <!-- <input class="chk-col-purple" type="checkbox" name="md_checkbox{{ $tag->id}}" id="md_checkbox{{ $tag->id}}" value="{{ $tag->name}}"> -->
                                            {{ Form::checkbox('tags[]', $tag->id, null, ['class' => 'chk-col-purple', 'id' => $tag->id] )}}
                                            <label  for="{{$tag->id}}"> {{ $tag->name}} </label>
                                            <!-- <label for="md_checkbox{{ $tag->id}}"> {{ $tag->name}} </label> -->
                                        @endforeach
                                        </div>

                                   </div>
                                </div>




                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">

                                        {{ Form::label('excerpt', 'Resumen o Extracto') }}
                                        {{ Form::textarea('excerpt', null, ['class' => 'form-control', 'id' => 'excerpt', 'placeholder' => 'Resumen', 'rows' => '2', 'required']) }}

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">

                            <div class="col-sm-12">
                            <!-- <textarea id="ckeditor" name="body"> -->
                             {{ Form::label('body', 'Contenido del post') }}

                            {{ Form::textarea('body',  null, ['class' => 'form-control', 'id' => 'body', 'placeholder' => 'Contenido del post', 'required']) }}

                            <!-- </textarea> -->
                        </div>


                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">

                                        {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}

                                           <!-- <button class="btn btn-primary" type="submit">Guardar</button> -->

                                    </div>
                                </div>

                            </div>

                         </form>




            <!-- CKEditor -->




            <!-- #END# CKEditor -->


 @section('scripts')

<script src="{{ asset('vendor/speakingurl.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.stringtoslug.min/jquery.stringtoslug.min.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>



<script>

	$(document).ready(function(){
		$("#name").stringToSlug({
			callback:function(text){
				$("#slug").val(text);
			}
		});
	});

    CKEDITOR.config.heigh = 400;
    CKEDITOR.config.width = 'auto';
    CKEDITOR.replace('body', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
    });


</script>
@endsection
