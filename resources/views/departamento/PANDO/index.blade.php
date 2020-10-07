@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Votos Del Departamento De Pando <a href="categoria/create"></a></h3>
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
               @foreach ($pando as $cat)
				<tr>
					<td>{{ $cat->Nombre}}</td>
          <td>{{ $cat->sigla}}</td>
					<td>{{ $cat->cantidadVotos}}</td>
				    <td>{{ $cat->departamento}}</td>
				</tr>
		
				@endforeach
			</table>
		</div>
		{{$pando->render()}}
	</div>
</div>


<div class="row">
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="table-responsive">
  <head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
      	
        ["Element", "Density", { role: "style" } ],
        @foreach ($pando as $cat)
              ["{{ $cat->Nombre}}" , {{$cat->cantidadVotos}} , {{$cat->cantidadVotos}} ],
           @endforeach
      ]);
      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Votos De Partidos",
        width: 500,
        height: 300,
        bar: {groupWidth: "75%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.PieChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
    <body>
       <div id="columnchart_values" style="width: 500px; height: 300px;"></div>
     </body>
   </head>
  </div>
 </div>
</div>




@endsection