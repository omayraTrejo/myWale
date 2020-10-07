@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3><center>Listado De Las Mesas</center></h3>
	<br>
		@include('mesa.ListaMesa.search')
	</div>
	<a href="ListaPartidos/create">
              <button class="btn btn-primary btn-danger">
              pdf<br><i class="fa fa-clipboard"></i>
              </button></a>
              <a href="ListaPartidos/create">
              <button class="btn btn-primary btn-success">
              Excel <br><i class="fa fa-print"></i>
              </button></a>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					
					<th>Codigo De Mesa</th>
					<th>Numero De Mesa</th>
					<th>Recinto</th>
					<th>Municipio</th>
					<th>Provincia</th>
					<th>Departamento</th>
					<th>Opciones</th>
				</thead>
               @foreach ($mesa as $cat)

				<tr>
					<td>{{ $cat->codigo_Mesa}}</td>
					<td>{{ $cat->NumeroDeMesa}}</td>
					<td>{{ $cat->Recinto}}</td>
					<td>{{ $cat->Municipio}}</td>
					<td>{{ $cat->provincia}}</td>
					<td>{{ $cat->departamento}}</td>
					<td>
						<a href="{{URL::action('ControllerMesa@edit',$cat->idMesa)}}">
							<button class="btn btn-info"><i class="fa fa-pencil"></i></button></a>
                         <a href="" data-target="#modal-delete-{{$cat->idMesa}}" data-toggle="modal">
                         	<button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
					</td>
				</tr>
       			@include('mesa.ListaMesa.modal')
				@endforeach
			</table>
		</div>
		{{$mesa->render()}}
	</div>
</div>

@endsection