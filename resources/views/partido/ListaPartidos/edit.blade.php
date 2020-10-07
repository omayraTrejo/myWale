@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<center><h3><b>Editar El Partido:</b> {{ $partidos->Nombre}}</h3></center>
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
            {{form::token()}}
           
        
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
                       <img src="{{asset('imagenes/partidos/'.$partidos->imagen)}}" height="200px" height="250px">
            	@endif
            </div>


            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</butto>
                   <a href="{{url('partido/ListaPartidos')}}">
                    <button class="btn btn-info"> Cancelar</button>
                   </a>
            </div>

			{!!Form::close()!!}		
            
		</div>
 
	</div>

@endsection