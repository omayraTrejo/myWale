@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3><b>Crear Un Nuevo Departamento</b></h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

		{!!Form::open(array('url'=>'departamentolista/ListaDepartamento','method'=>'POST','autocomplete'=>'off' , 'files' =>'true'))!!}
            {{Form::token()}}
        
            <div class="form-group">
            	<label for="NombreDepartamento">Nombre del Departamento</label>
            	<input type="text" name="NombreDepartamento" class="form-control" placeholder="Nombre...">
            </div>

            <div class="form-group">
            	<label for="Descripcion">Descripcion</label>
            	<input type="text" name="Descripcion" class="form-control" placeholder="sigla del partido...">
            </div>

            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            </div> 

			{!!Form::close()!!}	

			 <a href="{{url('departamentolista/ListaDepartamento')}}">
                    <button class="btn btn-info"> Cancelar</button>
                   </a>
            
		</div>
	</div>
@endsection