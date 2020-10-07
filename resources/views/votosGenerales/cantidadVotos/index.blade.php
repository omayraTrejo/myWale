@extends ('layouts.admin')
@section ('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3><center><b>Vista Generales De Los Votos</b></center></h3>
	</div>
</div>
  @include('votosGenerales.cantidadVotos.search')
  <a href="{{url('ListaMesa')}}" class="btn btn-primary btn-danger">Descargar PDF <i class="fa fa-clipboard"></i></a>
    <a href="{{url('excel')}}" class="btn btn-primary btn-success">Descargar Excel  <i class="fa fa-clipboard"></i></a>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th bgcolor=#9DBBCD>Nombre</th>
					<th bgcolor=#9DBBCD>cantidad</th>
					<th bgcolor=#9DBBCD>imagen</th>
				
				</thead>
               @foreach ($categorias as $cat)
				<tr>
					<td>{{ $cat->sigla}}</td>
					<td>{{ $cat->cantidatotal}}</td>
					<td>
						<img src="{{asset('imagenes/partidos/'.$cat->imagen)}}" alt="{{$cat->sigla}}" height="50px" width="100px" 
						class="img-thumbnail">
					</td>
				</tr>
		
				@endforeach
			</table>
		</div>
		{{$categorias->render()}}
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
           @foreach ($categorias as $cat)
              ["{{ $cat->sigla}}" , {{$cat->cantidatotal}}],
           @endforeach
        ]);

        var options = {
          title: 'Grafica',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
     <div id="piechart" style="width: 900px; height: 500px;"></div>
   </body>
  </html>
  </div>
 </div>
</div>
<div class="row">
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="table-responsive">
    <a href="{{url('ListaMesa')}}" class="btn btn-primary btn-danger">Descargar PDF <i class="fa fa-clipboard"></i></a>
    <a href="{{url('excel')}}" class="btn btn-primary btn-success">Descargar Excel  <i class="fa fa-clipboard"></i></a>
    
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <script type="text/javascript">
     google.charts.load("current", {packages:['corechart']});
     google.charts.setOnLoadCallback(drawChart);
     function drawChart() {
       var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
         @foreach ($categorias as $cat)
              ["{{ $cat->sigla}}" , {{$cat->cantidatotal}} , '#b87333' ],
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
        title: "Cantidad total de votos",
        width: 900,
        height: 300,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
  <div id="columnchart_values" style="width: 900px; height: 300px;"></div>
  </div>
 </div>
</div>


<div class="row">
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="table-responsive">
    <a href="{{url('ListaMesa')}}" class="btn btn-primary btn-danger">Descargar PDF <i class="fa fa-clipboard"></i></a>
    <a href="{{url('excel')}}" class="btn btn-primary btn-success">Descargar Excel  <i class="fa fa-clipboard"></i></a>
    
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <script type="text/javascript">
     google.charts.load("current", {packages:['corechart']});
     google.charts.setOnLoadCallback(drawChart);
     function drawChart() {
       var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
         @foreach ($categorias as $cat)
              ["{{ $cat->sigla}}" , {{$cat->cantidatotal}} , '#b87333' ],
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
        title: "Cantidad total de votos",
        width: 900,
        height: 300,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
  <div id="columnchart_values" style="width: 900px; height: 300px;"></div>
  </div>
 </div>
</div>








@endsection