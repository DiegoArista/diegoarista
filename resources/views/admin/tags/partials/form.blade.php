
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                 
                                        {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Nombre de la etiqueta']) }}
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                        {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug', 'placeholder' => 'URL Amigable' ]) }}
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    
                                           
                                           {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
                                          
                                    </div>
                                </div>
                               
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