@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Crear Nuevo Delegado</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'delegado/Lista','method'=>'POST','autocomplete'=>'off' , 'files' =>'true'))!!}
            {{Form::token()}}

             <div class="form-group">
                  <label for="Nombre_delegado">Nombre Jurado</label>
                  <input type="text" name="Nombre_delegado" class="form-control" placeholder="Nombre Jurado...">
            </div>

             <div class="form-group">
                  <label for="cedula">cedula</label>
                   <input type="text" name="cedula"  class="form-control" placeholder="Nombre Delegado...">
            </div>


             <div class="form-group">
                  <label for="cedula">correo</label>
                   <input type="text" name="correo"  class="form-control" placeholder="Nombre correo...">
            </div>

            <div class="form-group">
                  <label >Mesa</label>
                  <select name="idMesa" class="form-control">
                  @foreach ($Mesa as $cat)
                  <option value="{{$cat->idMesa}}">{{$cat->codigo_Mesa}} </option>
                  @endforeach 
                  </select>
            </div>


            <div class="form-group">
                  <label >Partido</label>
                  <select name="idPartido" class="form-control">
                  @foreach ($Partido as $cat)
                  <option value="{{$cat->idpartido}}">{{$cat->Nombre}} </option>
                  @endforeach 
                  </select>
            </div>

        
            
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection