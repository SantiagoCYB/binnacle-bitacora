<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bitácora</title>
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
    <link rel="stylesheet" href="{{asset('js/EasyAutocomplete-1.3.5/easy-autocomplete.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/EasyAutocomplete-1.3.5/easy-autocomplete.themes.css')}}">
    <link rel="stylesheet" href="{{asset('js/EasyAutocomplete-1.3.5/easy-autocomplete.themes.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">


      <header class="main-header">

        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>BA</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Bitácora</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
             <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-green">Online</small>
                </a>
                <ul class="dropdown-menu"> 
                  <li class="user-header">
                    
                    <p>
                      Aprendiendo a desarrollar Software
                      <small></small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li>
                  <a href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                    Cerrar sesión
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                   </form>
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
                <i class="fa fa-users"></i>
                <span>Usuarios</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/Proyecto/public/bitacora/usuarios"><i class="fa fa-edit"></i>Administrar Usuarios</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Personas</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/Proyecto/public/bitacora/personas"><i class="fa fa-edit"></i>Administrar personas</a></li>
                <li><a href="{{ route('personas.pdf') }}"><i class="fa fa-file-pdf-o"></i>PDF<small class="label pull-right bg-red">PDF</small></a></li>
                <li><a href="{{ route('personas.excel') }}"><i class="fa fa-file-excel-o"></i> <span>Excel</span><small class="label pull-right bg-green">Excel</small></a></li>
              </ul>
            </li>

            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Conceptos</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/Proyecto/public/bitacora/conceptos"><i class="fa fa-edit"></i>Administrar conceptos</a></li>
                <li><a href="{{ route('conceptos.pdf') }}"><i class="fa fa-file-pdf-o"></i> <span>PDF</span><small class="label pull-right bg-red">PDF</small></a></li>
                <li><a href="{{ route('conceptos.excel') }}"><i class="fa fa-file-excel-o"></i> <span>Excel</span><small class="label pull-right bg-green">Excel</small></a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-server"></i>
                <span>Informes</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/Proyecto/public/bitacora/informes"><i class="fa fa-edit"></i>Administrar informes</a></li>
                <li><a href="{{ route('informes.pdf') }}"><i class="fa fa-file-pdf-o"></i>PDF<small class="label pull-right bg-red">PDF</small></a></li>
                <li><a href="{{ route('informes.excel') }}"><i class="fa fa-file-excel-o"></i> <span>Excel</span><small class="label pull-right bg-green">Excel</small></a></li>
              </ul>
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
                  <h3 class="box-title">Sistema de registro</h3>
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
                              @yield('content')
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
        </div>
        <strong><a target="_blank" href="https://www.instagram.com/santiagocy/">Acerca de mi.</a></strong> 
      </footer>

      
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>

    <script src="{{asset('js/EasyAutocomplete-1.3.5/jquery.easy-autocomplete.min.js')}}"></script>

    <script src="{{asset('js/informes.js')}}"></script>

    
  </body>
</html>
