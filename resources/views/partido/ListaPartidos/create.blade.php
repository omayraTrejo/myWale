@extends ('layouts.admin')
@section ('contenido')
	<center><div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Crear Nuevo Partido</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'partido/ListaPartidos','method'=>'POST','autocomplete'=>'off' , 'files' =>'true'))!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="Nombre">Nombre Del Partido</label>
            	<input type="text" name="Nombre" class="form-control" placeholder="Nombre...">
            </div>
            <div class="form-group">
            	<label for="sigla">Sigla Del Partido</label>
            	<input type="text" name="sigla" class="form-control" placeholder="sigla del partido...">
            </div>

              <div class="form-group">
            	<label for="imagen">Imagen</label>
            	<input type="file" name="imagen" class="form-control">
            </div>

			{!!Form::close()!!}
			<div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</butto>
            </div>		
            <a href="{{url('partido/ListaPartidos')}}">
                    <button class="btn btn-info"> Cancelar</button>
                   </a>
            
		</div>
	</div></center>
@endsection