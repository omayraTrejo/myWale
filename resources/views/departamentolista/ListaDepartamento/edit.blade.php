@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Lista De Partido: {{ $departamento->NombreDepartamento}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

 {!!Form::model($departamento,['method'=>'PATCH','route'=>['departamentolista.ListaDepartamento.update',$departamento->idpartamento] , 'files'=>'true'])!!}
            {{form::token()}}
           
            <div class="form-group">
            	<label for="NombreDepartamento">Nombre</label>
            	<input type="text" name="NombreDepartamento" class="form-control" value="{{$departamento->NombreDepartamento}}" placeholder="Nombre...">
            </div>
            <div class="form-group">
            	<label for="Descripcion">Sigla</label>
            	<input type="text" name="Descripcion" class="form-control" value="{{$departamento->Descripcion}}" placeholder="sigla...">
            </div>


            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<a href="{{url('departamento/ListaDepartamento')}}">
                    <button class="btn btn-info"> Cancelar</button>
                   </a>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection