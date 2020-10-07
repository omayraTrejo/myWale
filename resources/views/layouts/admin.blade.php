<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADVentas | www.incanatoit.com</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

  </head>
  <body class="hold-transition skin-black sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>AD</b>V</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>ADVentas</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
            <span class="hidden-xs">Bienbenido A la Pagina</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="{{url('/logout')}}" class="dropdown-toggle" data-toggle="dropdown">
                  <center><small class="bg-black">Cerrar Sesion</small></center>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="{{url('/logout')}}" class="btn btn-default btn-flat"><i class="fa fa-power-off"></i>Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            

             <li class="treeview">
              <a href="#">
               <center><i class=""></i>
                <span>Paquete Administrativo</span></center>
              </a>
            </li>

             <li class="treeview">
              <a href="#">
                <i class="fa fa-server"></i>
                <span>Partidos Politicos </span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('partido/ListaPartidos')}}">
                  <i class="fa fa-stack-overflow"></i>
                   Lista de Los Partidos</a>
                </li>
              </ul>
            </li>

             <li class="treeview">
              <a href="#">
                <i class="fa fa-industry"></i>
                <span>Departamento </span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('departamento/ListaDepartamento')}}">
                    <i class="fa fa-th-large"></i>
                  </i>Listos Departamentos</a>
                </li>
              </ul>
            </li>

             <li class="treeview">
              <a href="#">
                <i class="fa fa-server"></i>
                <span>Usuarios</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('seguridad/usuario')}}">
                  <i class="fa fa-users"></i>Lista Usuario</a>
                </li>

                <li><a href="{{url('delegado/Lista')}}">
                  <i class="fa fa-users"></i>Lista Delegado</a>
                </li>
              </ul>
            </li>

               <li class="treeview">
              <a href="#">
               <center><i class=""></i>
                <span>Paquete Visualizar Estadisticos</span></center>
              </a>
            </li>

             <li class="treeview">
              <a href="#">
                <i class="fa fa-cubes"></i>
                <span>Visualizar Mesas</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('mesa/ListaMesa')}}">
                  <i class="fa fa-bar-chart"></i>
                  Visualizar Las Mesas.</a>
                </li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-industry"></i>
                <span>ESTADISCAS GENERA</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('votosGenerales/cantidadVotos')}}">
                  <i class="fa fa-bar-chart"></i>
                  VISTA G.</a>
                </li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>E. DEPARTAMENTALES</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('departamento/SANTA CRUZ')}}"><i class="fa fa-signal"></i>SANTA CRUZ</a></li>
                <li><a href="{{url('departamento/COCHABAMBA')}}"><i class="fa fa-signal"></i>COCHABAMAB</a></li>
                <li><a href="{{url('departamento/BENI')}}"><i class="fa fa-signal"></i> BENI</a></li>
                <li><a href="{{url('departamento/TARIJA')}}"><i class="fa fa-signal"></i> TARIJA</a></li>
                <li><a href="{{url('departamento/CHUQUISACA')}}"><i class="fa fa-signal"></i>  SUCRE</a></li>
                <li><a href="{{url('departamento/ORURO')}}"><i class="fa fa-signal"></i> ORURO</a></li>
                <li><a href="{{url('departamento/POTOSI')}}"><i class="fa fa-signal"></i> POTOSI</a></li>
                <li><a href="{{url('departamento/PANDO')}}"><i class="fa fa-signal"></i> PANDO</a></li>
                <li><a href="{{url('departamento/LAPAZ')}}"><i class="fa fa-signal"></i> LA PAZ</a></li>
              </ul>
            </li>
        
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Acceso</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="configuracion/usuario"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                
              </ul>
            </li>
             <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>





       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Sistema De conteo de Votos</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  	<div class="row">
	                  	<div class="col-md-12">
		                          <!--Contenido-->
                              @yield('contenido')
		                          <!--Fin Contenido-->
                           </div>
                        </div>
		                    
                  		</div>
                  	</div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2015-2020 <a href="www.incanatoit.com">IncanatoIT</a>.</strong> All rights reserved.
      </footer>

      
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>
    
  </body>
</html>
