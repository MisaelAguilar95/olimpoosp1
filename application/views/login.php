<!DOCTYPE html>
<!-- saved from url=(0029)http://127.0.0.1/reporteador/ -->
<html lang="en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Sistema Olimpoos</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="<?=base_url()?>frontend/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url()?>frontend/css/style.css" rel="stylesheet">
	<link href="<?=base_url()?>frontend/css/style-responsive.css" rel="stylesheet">
    <link href="<?=base_url()?>frontend/css/propio.css" rel="stylesheet">
	
</head>
<body class="pace-top bg-white">
	    <!-- begin login -->
        <div class="login login-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image" style="background-image: url(<?=base_url()?>/frontend/images/canon.jpg)"></div>
                <div class="news-caption">
                    <h4 class="caption-title">Sistema Administrativo <b>Olimpoos</b></h4>
                    <p>
                        Sistema Administrativo y de Control de Operaciones
                    </p>
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin login-header -->
                <div class="login-header m-t-20">
                    <div class="brand text-center">Inicio de Sesión</div>
                </div>
                <!-- end login-header -->
                <!-- begin login-content -->
                <div class="login-content">
                    <form action="<?=base_url()?>/login/valida" method="POST">
                        <div class="form-group m-b-15">
                            <input name="usuario" type="text" class="form-control form-control-lg" placeholder="Usuario" required="">
                        </div>
                        <div class="form-group m-b-15">
                            <input name="password" type="password" class="form-control form-control-lg" placeholder="Contraseña" required="">
                        </div>
                        <div class="login-buttons">
							<button type="submit" class="btn btn-primary btn-block btn-lg">Inciar Sesión</button>
						</div>
					</form>
                </div>
                <!-- end login-content -->
            </div>
            <!-- end right-container -->
        </div>
        <!-- end login -->
	</div>
	<!-- end page container -->
</body></html>