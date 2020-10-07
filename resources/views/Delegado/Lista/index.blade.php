@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<center><h3><b> Lista De Delegados </b></h3></center>                     
		    <a href="Lista/create">
              <button class="btn btn-primary btn-default">
              Añadir Nuevo Delegado
              <br>
              <i class="fa fa-file-text"></i>
              </button></a>	<br><br>
	</div>
</div>
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
       @include('delegado.Lista.search')
   </div>

<a href="{{url('pdfprueva')}}" class="btn btn-primary btn-danger">Descarga PDF <i class="fa fa-clipboard"></i></a>
              <a href="{{url('ExcelDelegado')}}" class="btn btn-primary btn-success">Descargar Excel  <i class="fa fa-clipboard"></i></a>
<br>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
				
					<th>Nombre</th>
					<th>Cedula</th>
					<th>Correo</th>
					<th>Mesa</th>
					<th>Partido</th>
					<th>Opciones</th>
				</thead>
               @foreach ($delegado as $cat)

				<tr>
					
					<td>{{ $cat->Nombre_delegado}}</td>
					<td>{{ $cat->cedula}}</td>
					<td>{{ $cat->correo}}</td>
					<td>{{ $cat->idMesa}}</td>
					<td>{{ $cat->idPartido}}</td>
					<td>
						<a href="{{URL::action('ControllerDelegado@edit',$cat->iddelegados)}}">
							<button class="btn btn-info"><i class="fa fa-pencil"></i></button></a>
                        
                        <a href="" data-target="#modal-delete-{{$cat->iddelegados}}" 
                        	data-toggle="modal">
                         	<button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
					</td>
				</tr>
       			@include('delegado.Lista.modal')
				@endforeach
			</table>
		</div>
		{{$delegado->render()}}
	</div>
</div>

@endsection