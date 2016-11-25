<li class="sidebar-search hidden-sm hidden-md hidden-lg">
    <div class="input-group custom-search-form">
        <input type="text" class="form-control" placeholder="Buscar...">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
        </span>
    </div>
</li>
<li class="user-pro">
    <a href="#" class="waves-effect">
        <img src="{{ Gravatar::fallback(asset('vendor/seguce92/elite/plugins/images/users/varun.jpg'))->get(Auth::user()->email) }}" class="img-circle">
        <span class="hide-menu"> {{ Auth::user()->username }}
            <span class="fa arrow"></span>
        </span>
    </a>
    <ul class="nav nav-second-level">
        <li><a href="{{ url('profile') }}"><i class="ti-user"></i> Mi Perfil</a></li>
        <li><a href="{{ url('setting') }}"><i class="ti-settings"></i> Configurar</a></li>
        <li>
            <a href="{{ url('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="fa fa-power-off"></i> Cerrar Sesion</a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
</li>
<li><a href="{{ url('start/dashboard') }}" class="waves-effect"><i class="icon-screen-desktop fa-fw"></i> <span class="hide-menu">Escritorio</span></a></li>
@if(Auth::user()->role === 'administrator')
    <li class="nav-small-cap m-t-10"  style="text-align: left;margin-left: 3px">ADMINISTRACION</li>
    <li> <a href="{{ url('admin/users') }}" class="waves-effect"><i class="icon-people fa-fw"></i> <span class="hide-menu">Usuarios<span class="fa arrow"></span></span></a>
        <ul class="nav nav-second-level">
            <li><a href="{{ url('admin/users') }}"><i class="icon-list fa-fw"></i> Listar</a></li>
            <li><a href="{{ url('admin/users/create') }}"><i class="fa fa-plus"></i> Nuevo</a></li>
        </ul>
    </li>

    <li> <a href="{{ url('admin/students') }}" class="waves-effect"><i class="icon-user fa-fw"></i> <span class="hide-menu">Estudiantes<span class="fa arrow"></span></span></a>
        <ul class="nav nav-second-level">
            <li><a href="{{ url('admin/students') }}"><i class="icon-list fa-fw"></i> Listar</a></li>
            <li><a href="{{ url('admin/students/create') }}"><i class="fa fa-plus"></i> Nuevo</a></li>
        </ul>
    </li>
@endif
@if(Auth::user()->role !== 'student')
    <li class="nav-small-cap" style="text-align: left;margin-left: 3px">LEARNING</li>
    <li> <a href="{{ url('learning/courses') }}" class="waves-effect"><i class="icon-notebook fa-fw"></i> <span class="hide-menu">Cursos<span class="fa arrow"></span></span></a>
        <ul class="nav nav-second-level">
            <li><a href="{{ url('learning/courses') }}"><i class="fa fa-list"></i> Listar</a></li>
            <li><a href="{{ url('learning/courses/create') }}"><i class="fa fa-plus"></i> Nuevo</a></li>
        </ul>
    </li>

    <li> <a href="{{ url('learning/lessons') }}" class="waves-effect"><i class="icon-docs fa-fw"></i> <span class="hide-menu">Lecciones<span class="fa arrow"></span></span></a>
        <ul class="nav nav-second-level">
            <li><a href="{{ url('learning/lessons') }}"><i class="fa fa-list"></i> Listar</a></li>
            <li><a href="{{ url('learning/lessons/create') }}"><i class="fa fa-plus"></i> Nuevo</a></li>
        </ul>
    </li>
@endif
@if(Auth::user()->role === 'student')
    <li class="nav-small-cap" style="text-align: left;margin-left: 3px">LEARNING</li>
    <li> <a href="{{ url('student/course') }}" class="waves-effect"><i class="icon-notebook fa-fw"></i> <span class="hide-menu">Cursos<span class="fa arrow"></span></span></a>
        <ul class="nav nav-second-level">
            <li><a href="{{ url('student/course') }}"><i class="fa fa-list"></i> Todos</a></li>
            <li><a href="{{ url('student/course/create') }}"><i class="fa fa-tags"></i> Reservas</a></li>
        </ul>
    </li>
@endif