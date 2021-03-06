@php
	$sidebarClass = (!empty($sidebarTransparent)) ? 'sidebar-transparent' : '';
@endphp
<!-- begin #sidebar -->
<div id="sidebar" class="sidebar {{ $sidebarClass }}">
	<!-- begin sidebar scrollbar -->
	<div data-scrollbar="true" data-height="100%">
		@if (!$sidebarSearch)
		<!-- begin sidebar user -->
		<ul class="nav">
			<li class="nav-profile">
				<div class="cover with-shadow"></div>
                @if(!empty(Auth::user()->profile_picture))
                    <div class="image image-icon bg-black text-grey-darker">
                        <img src="{{ asset('storage/'.Auth::user()->profile_picture) }}" class="img-responsive" alt="">
                    </div>
                @else
                    <div class="image image-icon bg-black text-grey-darker">
                        <i class="fa fa-user"></i>
                    </div>
                @endif
				
				<div class="info">
					<b class="caret pull-right hide"></b>
					{{ Auth::user()->name }}
                    <small>{{ Auth::user()->getRoleNames()[0] }}</small>
				</div>
			</li>
			<li>
				<ul class="nav nav-profile">
					<li><a href="javascript:;"><i class="fa fa-cog"></i> Configuraciones</a></li>
				</ul>
			</li>
		</ul>
		<!-- end sidebar user -->
		@endif
		<!-- begin sidebar nav -->
		<ul class="nav">
			@if ($sidebarSearch)
			<li class="nav-search">
        	<input type="text" class="form-control" placeholder="Sidebar menu filter..." data-sidebar-search="true" />
			</li>
			@endif
			<li class="nav-header">Menú principal</li>
			<!-- options menu -->
			<li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class='fa fa-chart-bar'></i>
                    <span>DASHBOARD</span>
                </a>
            </li>
            
            <li class="">
                <a href="#">
                    <i class='fa fa-bullhorn'></i>
                    <span>Pedidos</span>
                </a>
            </li>            

			@canany(['client.list'])
            <li class="{{ Request::is('clientes*') ? 'active' : '' }}">
                <a href="{{ url('clientes') }}">
                    <i class='fa fa-users'></i>
                    <span>Clientes</span>
                </a>
            </li>
            @endcan

            @canany(['almacen.list'])
            <li class="">
                <a href="{{ url('almacen') }}">
                    <i class='fa fa-truck'></i>
                    <span>Almacén</span>
                </a>
            </li>
            @endcan 

            <li class="">
                <a href="#">
                    <i class='fa fa-industry'></i>
                    <span>Producción</span>
                </a>
            </li> 

            @canany(['cobranza.list'])
            <li class="{{ Request::is('cobranzas*') ? 'active' : '' }}">
                <a href="{{ url('cobranzas') }}">
                    <i class='fa fa-calculator'></i>
                    <span>Cobranzas</span>
                </a>
            </li>
            @endcan

			@canany(['user.list','role.list','permission.list'])

            <li class="has-sub {{ Request::is('usuarios*') || Request::is('roles*') || Request::is('permisos*') ? 'active' : '' }}">
                <a href="#">
                	<b class="caret"></b>
                    <i class='fa fa-user'></i>
                    <span>Usuarios</span>
                </a>
                <ul class="sub-menu">
                    @can('user.list')
                    <li class="{{ Request::is('usuarios*') ? 'active' : '' }}">
                        <a href="{{ url('usuarios') }}">
                            <span>Usuarios</span>
                        </a>
                    </li>
                    @endcan
                    @can('role.list')
                    <li class="{{ Request::is('roles*') ? 'active' : '' }}">
                        <a href="{{ url('roles') }}">
                            <span>Roles</span>
                        </a>
                    </li>
                    @endcan
                    @can('permission.list')
                    <li class="{{ Request::is('permisos*') ? 'active' : '' }}">
                        <a href="{{ url('permisos') }}">
                            <span>Permisos</span>
                        </a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan

            @canany(['proveedor.list','procedencia.list','marcavehiculo.list','tipovehiculo.list'])

            <li class="has-sub {{ Request::is('proveedor*') || Request::is('procedencia*') || Request::is('marcavehiculo*') || Request::is('tipovehiculo*')  ? 'active' : '' }}">
                <a href="#">
                    <b class="caret"></b>
                    <i class='fa fa-cogs'></i>
                    <span>Mantenedor</span>
                </a>
                <ul class="sub-menu">
                    @can('proveedor.list')
                    <li class="{{ Request::is('proveedor*') ? 'active' : '' }}">
                        <a href="{{ url('proveedor') }}">
                            <span>Proveedor</span>
                        </a>
                    </li>
                    @endcan
                    @can('procedencia.list')
                    <li class="{{ Request::is('procedencia*') ? 'active' : '' }}">
                        <a href="{{ url('procedencia') }}">
                            <span>Procedencia</span>
                        </a>
                    </li>
                    @endcan
                    @can('marcavehiculo.list')
                    <li class="{{ Request::is('marcavehiculo*') ? 'active' : '' }}">
                        <a href="{{ url('marcavehiculo') }}">
                            <span>Marca Vehiculo</span>
                        </a>
                    </li>
                    @endcan
                    @can('tipovehiculo.list')
                    <li class="{{ Request::is('tipovehiculo*') ? 'active' : '' }}">
                        <a href="{{ url('tipovehiculo') }}">
                            <span>Tipo Vehiculo</span>
                        </a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan

            <li class="{{ Request::is('cobranzas*') ? 'active' : '' }} mt-4">
                <a class="dropdown-item" href="{{ route('logout') }}"
                class="dropdown-item"
                onclick="event.preventDefault();
                document.getElementById('logout-form-sidebar').submit();">
                    <i class='fa fa-sign-out-alt'></i>
                    <span>{{ __('panel.logout') }}</span>
                </a>
            </li>

            <form id="logout-form-sidebar" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
            </form>

			<!-- begin sidebar minify button -->
			<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			<!-- end sidebar minify button -->
		</ul>
		<!-- end sidebar nav -->
	</div>
	<!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->

