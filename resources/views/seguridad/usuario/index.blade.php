@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3><center>Listado de Delegado</center></h3>
			<a href="usuario/create"><button class="btn btn-success">
		    <i class="fa fa-pencil-square-o"></i>
             <br>
		    Nuevo</button></a>
		</h3>
	</div>
</div>
<br>
@include('seguridad.usuario.search')
<br>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					
					<th>Opciones</th>
				</thead>
               @foreach ($usuarios as $cat)
				<tr>
					<td>{{ $cat->name}}</td>
					<td>{{ $cat->email}}</td>
					
					<td>
						<a href="{{URL::action('ControllerUser@edit',$cat->id)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$cat->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('seguridad.usuario.modal')
				@endforeach
			</table>
		</div>
		{{$usuarios->render()}}
	</div>
</div>

@endsection