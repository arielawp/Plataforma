<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('css/metisMenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

</head>

<body>
    

    <div id="wrapper">

        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Administrador</a>
            </div>
           

            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Ajustes</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Usuario<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route ('usuario.create') }}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="#"><i class='fa fa-list-ol fa-fw'></i> Usuarios</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-film fa-fw"></i> Project Manager<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('Project.index') }}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="#"><i class='fa fa-list-ol fa-fw'></i> Project Manager</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-film fa-fw"></i> Programador<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('Programador.index') }}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="#"><i class='fa fa-list-ol fa-fw'></i> Programador</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-child fa-fw"></i> Diseñador<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="#"><i class='fa fa-list-ol fa-fw'></i> Diseñador</a>
                                </li>
                            </ul>
                        </li>

                     
                        <li>
                            <a href="#"><i class="fa fa-film fa-fw"></i> Auxiliar<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route ('auxiliar.index') }}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="#"><i class='fa fa-list-ol fa-fw'></i> Auxiliar </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>

     </nav>

        <div id="page-wrapper">
            @yield('content')
        </div>

    </div>
    
    <link href="{{ asset('js/jquery.min.js') }}" rel="stylesheet">
    <link href="{{ asset('js/bootstrap.min.js') }}" rel="stylesheet">
    <link href="{{ asset('js/metisMenu.min.js') }}" rel="stylesheet">
    <link href="{{ asset('js/sb-admin-2.js') }}" rel="stylesheet">



</body>

</html>
