@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3><center><b>Listado De Los Partidos </b></center></h3>
	</div>
</div>
@include('partido.ListaPartidos.search')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
              <a href="ListaPartidos/create">
              <button class="btn btn-primary btn-default">
              Nuevo <br><i class="fa fa-clipboard"></i>
              </button></a>
              <a href="ListaPartidos/create">
              <button class="btn btn-primary btn-danger">
              pdf<br><i class="fa fa-clipboard"></i>
              </button></a>
              <a href="ListaPartidos/create">
              <button class="btn btn-primary btn-success">
              Excel <br><i class="fa fa-print"></i>
              </button></a>
     </div>
</div>
<br>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Descripcion Del Partido</th>
					<th>Sigla Del Partido</th>
					<th>Imagen</th>
					<th>Opciones</th>
				</thead>
               @foreach ($partidos as $cat)

				<tr>

					<td>{{ $cat->Nombre}}</td>
					<td>{{ $cat->sigla}}</td>
					<td>
						<img src="{{asset('imagenes/partidos/'.$cat->imagen)}}" alt="{{$cat->sigla}}" height="80px" width="80px" 
						class="img-thumbnail">
					</td>
					<td>
						<a href="{{URL::action('ControllerPartido@edit',$cat->idpartido)}}">
							<button class="btn btn-info">Editar<i class="fa fa-pencil"></i></button></a>
                         <a href="" data-target="#modal-delete-{{$cat->idpartido}}" data-toggle="modal">
                         	<button class="btn btn-danger">Eliminar<i class="fa fa-trash-o"></i></button></a>
					</td>
				</tr>
       			@include('partido.ListaPartidos.modal')
				@endforeach
			</table>
		</div>
		{{$partidos->render()}}
	</div>
</div>

@endsection