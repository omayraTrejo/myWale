@extends ('layouts.admin')
@section ('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3><center>Lista De Los Departamento  </center></h3>	
	</div>
</div>

	@include('departamentolista.ListaDepartamento.search')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		 <br>			
	      <a href="ListaDepartamento/create"><button class="btn btn-primary btn-default">
         <i class="fa fa-clipboard"></i> <br>Nuevo</button></a></h3>
     	<br>
        </div>
	</div>
	<br>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nombre del Departamento</th>
					<th>Descripcion</th>
					<th>Opciones</th>
				</thead>
               @foreach ($departamento as $cat)

				<tr>
					<td>{{ $cat->idpartamento}}</td>
					<td>{{ $cat->NombreDepartamento}}</td>
					<td>{{ $cat->Descripcion}}</td>
					<td>
						<a href="{{URL::action('ControllerDepartamento@edit',$cat->idpartamento)}}">
							<button class="btn btn-info"><i class="fa fa-pencil"></i></button></a>
                         <a href="" data-target="#modal-delete-{{$cat->idpartamento}}" data-toggle="modal">
                         	<button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
					</td>
				</tr>
       			@include('departamentolista.ListaDepartamento.modal')
				@endforeach
			</table>
		</div>
		{{$departamento->render()}}
	</div>
</div>

@endsection