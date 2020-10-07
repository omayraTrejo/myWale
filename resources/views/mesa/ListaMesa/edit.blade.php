@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Lista De Partido: {{ $partidos->Nombre}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($partidos,['method'=>'PATCH','route'=>['partido.ListaPartidos.update',$partidos->idpartido] , 'files'=>'true'])!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="Nombre">Nombre</label>
            	<input type="text" name="Nombre" class="form-control" value="{{$partidos->Nombre}}" placeholder="Nombre...">
            </div>
            <div class="form-group">
            	<label for="sigla">Sigla</label>
            	<input type="text" name="sigla" class="form-control" value="{{$partidos->sigla}}" placeholder="sigla...">
            </div>

            <div class="form-group">
            	<label for="imagen">Imagen</label>
            	<input type="file" name="imagen" class="form-control">
            	@if(($partidos->imagen) !="")
                       <img src="{{asset('imagenes/partidos/'.$partidos->imagen)}}">
            	@endif
            </div>


            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection