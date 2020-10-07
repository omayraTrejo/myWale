@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Lista De Partido: {{ $delegado->Nombre_delegado}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

{!!Form::model($delegado,['method'=>'PATCH','route'=>['delegado.Lista.update',$delegado->iddelegados] , 'files'=>'true'])!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="Nombre_delegado">Nombre</label>
            	<input type="text" name="Nombre_delegado" class="form-control" value="{{$delegado->Nombre_delegado}}" placeholder="Nombre...">
            </div>
              
            <div class="form-group">
            	<label for="cedula">Cedula</label>
            	<input type="text" name="cedula" class="form-control" value="{{$delegado->cedula}}" placeholder="sigla...">
            </div>

             <div class="form-group">
              <label for="correo">Correo</label>
              <input type="text" name="correo" class="form-control" value="{{$delegado->correo}}" placeholder="sigla...">
            </div>

             <div class="form-group">
                  <label >Partido</label>
                  <select name="idPartido" class="form-control">
                  @foreach ($Partido as $cat)
                    @if($cat->idpartido==$delegado->idPartido)
                       <option value="{{$cat->idpartido}}">{{$cat->Nombre}} </option>
                    @else
                     <option value="{{$cat->idpartido}}">{{$cat->Nombre}} </option>
                     @endif
                  @endforeach 
                  </select>
            </div>

             <div class="form-group">
                  <label >Mesa</label>
                  <select name="idMesa" class="form-control">
                  @foreach ($mesa as $cat)
                    @if($cat->idMesa==$delegado->idMesa)
                       <option value="{{$cat->idMesa}}">{{$cat->codigo_Mesa}} </option>
                    @else
                     <option value="{{$cat->idMesa}}">{{$cat->codigo_Mesa}} </option>
                     @endif
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