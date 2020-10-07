@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Votos Del Departamento De Cochabamba <a href="categoria/create"></a></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Nombre</th>
          <th>Sigla</th>
					<th>cantidad</th>
					<th>departamento</th>
					
				</thead>
               @foreach ($cochabamba as $cat)
				<tr>
					<td>{{ $cat->Nombre}}</td>
          <td>{{ $cat->sigla}}</td>
					<td>{{ $cat->cantidadVotos}}</td>
				  <td>{{ $cat->departamento}}</td>
				</tr>
		
				@endforeach
			</table>
		</div>
		{{$cochabamba->render()}}
	</div>
</div>


<div class="row">
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="table-responsive">
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
           @foreach ($cochabamba as $cat)
              ["{{ $cat->sigla}}" , {{$cat->cantidadVotos}}],
           @endforeach
         
        ]);

        var options = {
          title: '',
          width: 700,
          height:500,
          is3D:true,
          legend:{position:'top'},
          bar: {groupWidth: "50%"},
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <h3 align="center"> DEPARTAMENTO DE COCHABAMBA</h3>
    <div id="piechart" style="width: 700px; height: 500px;"></div>
  </body>
</html>

</div>
</div>
</div>


@endsection