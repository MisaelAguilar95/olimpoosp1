<?Php
//$url = $_SERVER['PHP_SELF'];
$url = $_SERVER['REQUEST_URI'];

$titulo_m = '';
$descri_m = '';
$fa_icon = '';

$configuraciones_m = '';
$perfiles_m = '';
$empleados_m = '';
$usuarios_m = '';
$proveedores_m = '';
$clientes_m = '';

$pagos_m = '';
$prestamos_m = '';
$compras_m = '';
$ventas_m = '';
$caja_chica_m = '';

$vacia_m = '';

switch (true) {
    case strpos($url, 'configuraciones') !== false:
		$configuraciones_m = 'active';
		$fa_icon = 'fal fa-cogs';
        $titulo_m = 'Configuraciones';
        $descri_m = 'Módulo para la configuracions del Sistema Olimpops';
    break;
    case strpos($url, 'perfiles') !== false:
		$perfiles_m = 'active';
		$fa_icon = 'fal fa-lock';
        $titulo_m = 'Perfiles';
        $descri_m = 'Módulo para la administración de perfiles de usuarios';
    break;
    case strpos($url, 'empleados') !== false:
		$empleados_m = 'active';
		$fa_icon = 'fal fa-portrait';
        $titulo_m = 'Empleados';
        $descri_m = 'Módulo para la creación y administración de empleados';
    break;
    case strpos($url, 'usuarios') !== false:
		$usuarios_m = 'active';
		$fa_icon = 'fal fa-users';
        $titulo_m = 'Usuarios';
        $descri_m = 'Módulo para la creación y administración de usuarios';
    break;
    case strpos($url, 'proveedores') !== false:
		$proveedores_m = 'active';
		$fa_icon = 'fal fa-industry';
        $titulo_m = 'Proveedores';
        $descri_m = 'Módulo para la creación y administración de proveedores';
    break;
    case strpos($url, 'clientes') !== false:
		$clientes_m = 'active';
		$fa_icon = 'fal fa-handshake';
        $titulo_m = 'Clientes';
        $descri_m = 'Módulo para la creación y administración de clientes';
    break;
    case strpos($url, 'pagos') !== false:
		$pagos_m = 'active';
		$fa_icon = 'fal fa-money-bill-alt';
        $titulo_m = 'Pago a Empleados';
        $descri_m = 'Módulo para definición y pago de nomina a empleados';
    break;
    case strpos($url, 'prestamos') !== false:
		$prestamos_m = 'active';
		$fa_icon = 'fal fa-credit-card';
        $titulo_m = 'Prestamos';
        $descri_m = 'Módulo para el registro de prestamos a empleados';
    break;
    case strpos($url, 'compras') !== false:
		$compras_m = 'active';
		$fa_icon = 'fal fa-shopping-basket';
        $titulo_m = 'Compras';
        $descri_m = 'Módulo para el registro de compras a proveedores';
    break;
    case strpos($url, 'ventas') !== false:
		$ventas_m = 'active';
		$fa_icon = 'fal fa-euro-sign';
        $titulo_m = 'Ventas';
        $descri_m = 'Módulo para el registro de ventas a clientes';
    break;
    case strpos($url, 'caja_chica') !== false:
		$caja_chica_m = 'active';
		$fa_icon = 'fal fa-dollar-sign';
        $titulo_m = 'Caja Chica';
        $descri_m = 'Módulo para el registro de todos los movimientos que surjan de caja chica';
	break;
	default:
	break;
}

    $menu = '
    <li class="'.$vacia_m.'">
        <a href="'.base_url().'" title="Inicio" data-filter-tags="inicio">
            <span class="nav-link-text" style="color:yellow"><- OBSERVACIONES -></span>
        </a>
    </li>
    <li class="nav-title">Administración</li>
    <li class="'.$configuraciones_m.'">
        <a href="'.base_url().'" title="Configuraciones" data-filter-tags="configuraciones">
            <i class="fal fa-cogs"></i>
            <span class="nav-link-text">Configuraciones </span>
        </a>
    </li>
    <li class="'.$perfiles_m.'">
        <a href="'.base_url().'" title="Perfiles" data-filter-tags="perfiles de usuario">
            <i class="fal fa-lock"></i>
            <span class="nav-link-text">Perfiles</span>
        </a>
    </li>
    <li class="'.$empleados_m.'">
        <a href="'.base_url().'empleados" title="Empleados" data-filter-tags="empleados">
            <i class="fal fa-portrait"></i>
            <span class="nav-link-text">Empleados *</span>
        </a>
    </li>
    <li class="'.$usuarios_m.'">
        <a href="'.base_url().'usuarios" title="Usuarios" data-filter-tags="usuarios">
            <i class="fal fa-users"></i>
            <span class="nav-link-text">Usuarios</span>
        </a>
    </li>    
    <li class="'.$proveedores_m.'">
        <a href="'.base_url().'proveedores" title="Proveedores" data-filter-tags="proveedores">
            <i class="fal fa-industry"></i>
            <span class="nav-link-text">Proveedores</span>
        </a>
    </li>
    <li class="'.$clientes_m.'">
        <a href="'.base_url().'clientes" title="Clientes" data-filter-tags="clientes">
            <i class="fal fa-handshake"></i>
            <span class="nav-link-text">Clientes</span>
        </a>
    </li>
    <li class="nav-title">Operación</li>
    <li class="'.$vacia_m.'">
        <a href="'.base_url().'" title="Iniciar Producción" data-filter-tags="iniciar producción">
            <i class="fal fa-clipboard-check"></i>
            <span class="nav-link-text">Iniciar Producción</span>
        </a>
    </li>
    <li class="'.$vacia_m.'">
        <a href="'.base_url().'" title="Estatus Producción" data-filter-tags="estatus de producción">
            <i class="fal fa-battery-half"></i>
            <span class="nav-link-text">Estatus de Producción</span>
        </a>
    </li>
    <li class="'.$vacia_m.'">
        <a href="'.base_url().'" title="Modificaciones Producción" data-filter-tags="modificaciones a producción">
            <i class="fal fa-boxes"></i>
            <span class="nav-link-text">Modificaciones a Producción</span>
        </a>
    </li>
    <li class="'.$vacia_m.'">
        <a href="'.base_url().'" title="Asignacion de Piezas" data-filter-tags="asignacion de piezas">
            <i class="fal fa-boxes"></i>
            <span class="nav-link-text">Asignacion de Piezas</span>
        </a>
    </li>
    <li class="nav-title">Almacenes</li>
    <li class="'.$vacia_m.'">
        <a href="'.base_url().'" title="Materia Prima e Insumos" data-filter-tags="materiaprima e insumos">
            <i class="fal fa-users"></i>
            <span class="nav-link-text">Materia Prima e Insumos</span>
        </a>
    </li>
    <li class="'.$vacia_m.'">
        <a href="'.base_url().'" title="Productor Terminado" data-filter-tags="productor terminado">
            <i class="fal fa-users"></i>
            <span class="nav-link-text">Producto Terminado</span>
        </a>
    </li>    
    <li class="nav-title">Nómina</li>
    <li class="'.$pagos_m.'">
        <a href="'.base_url().'" title="Pagos" data-filter-tags="pagos">
            <i class="fal fa-money-bill-alt"></i>
            <span class="nav-link-text">Pago a Empleados</span>
        </a>
    </li>
    <li class="'.$prestamos_m.'">
        <a href="'.base_url().'prestamos" title="Prestamos" data-filter-tags="prestamos">
            <i class="fal fa-credit-card"></i>
            <span class="nav-link-text">Prestamos *</span>
        </a>
    </li>
    <li class="nav-title">Movimientos</li>
    <li class="'.$compras_m.'">
        <a href="'.base_url().'compras" title="Compras" data-filter-tags="compras">
            <i class="fal fa-shopping-basket"></i>
            <span class="nav-link-text">Compras *</span>
        </a>
    </li>
    <li class="'.$ventas_m.'">
        <a href="'.base_url().'ventas" title="Ventas" data-filter-tags="ventas">
            <i class="fal fa-euro-sign"></i>
            <span class="nav-link-text">Ventas *</span>
        </a>
    </li>
    <li class="'.$caja_chica_m.'">
        <a href="'.base_url().'caja_chica" title="Caja Chica" data-filter-tags="caja chica">
            <i class="fal fa-dollar-sign"></i>
            <span class="nav-link-text">Caja Chica *</span>
        </a>
    </li>
    <li class="nav-title">Reportes</li>';
    //$menu["ger"];

?>
    <ul id="js-nav-menu" class="nav-menu">
        <?=$menu?>
    </ul>
    <div class="filter-message js-filter-message bg-secondary text-bold"></div>
</nav>
</aside>
<div class="page-content-wrapper">
    <!-- BEGIN Page Header -->
    <header class="page-header bg-primary-second" role="banner">
        <?=$boton_minified;?>
         <!-- DOC: mobile button appears during mobile width -->
         <div class="hidden-lg-up">
            <a href="#" class="header-btn btn press-scale-down" data-action="toggle" data-class="mobile-nav-on">
                <i class="ni ni-menu"></i>
            </a>
        </div>
        <?=$botones_conf?>
    </header>
<main id="js-page-content" role="main" class="page-content">
    <div class="subheader">
        <h1 class="subheader-title">
            <i class=' <?=$fa_icon;?> m-r-5' style="font-size:30px"></i> 
            <?=$titulo_m;?>
            <small><?=$descri_m;?></small>
        </h1>
    </div>
    <hr class="style m-b-20">
                    