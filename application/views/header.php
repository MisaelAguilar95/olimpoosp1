<!DOCTYPE html>
<html lang="mx">
    <head>
        <meta charset="utf-8">
        <title>Sistema Olimpoos</title>
        <meta name="description" content="Sistema de Reportes Olimpoos">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="msapplication-tap-highlight" content="no">
        <!-- base css -->
        <link rel="stylesheet" media="screen, print" href="<?=base_url()?>frontend/css/vendors.bundle.css">
        <link rel="stylesheet" media="screen, print" href="<?=base_url()?>frontend/css/app.bundle.css">
        <link rel="stylesheet" media="screen, print" href="<?=base_url()?>frontend/css/propio.css">
        <!-- Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>frontend/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>frontend/images/favicon-32x32.png">
        <!-- Optional: page related CSS-->
        <link rel="stylesheet" media="screen, print" href="<?=base_url()?>frontend/css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="<?=base_url()?>frontend/css/fa-solid.css">
        <link rel="stylesheet" href="<?=base_url()?>frontend/css/toastr.css">
        
        <!-- Tabulator -->
        <link rel="stylesheet" href="<?=base_url()?>frontend/css/tabulator_propio.css">
        <script type="text/javascript" src="<?=base_url()?>frontend/js/tabulator.js"></script>
    </head>
    <body class="mod-bg-1 ">
        <script>
            'use strict';
            var classHolder = document.getElementsByTagName("BODY")[0],
                themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
                {},
                themeURL = themeSettings.themeURL || '',
                themeOptions = themeSettings.themeOptions || '';
            if (themeSettings.themeOptions){
                classHolder.className = themeSettings.themeOptions;
            }
            if (themeSettings.themeURL && !document.getElementById('mytheme')){
                var cssfile = document.createElement('link');
                cssfile.id = 'mytheme';
                cssfile.rel = 'stylesheet';
                cssfile.href = themeURL;
                document.getElementsByTagName('head')[0].appendChild(cssfile);
            }

            var saveSettings = function(){
                themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item){
                    return /^(nav|header|mod|display)-/i.test(item);
                }).join(' ');
                if (document.getElementById('mytheme')){
                    themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
                };
                localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
            }

            var resetSettings = function(){
                localStorage.setItem("themeSettings", "");
            }

        </script>
                <!-- BEGIN Page Wrapper -->
                <div class="page-wrapper">
            <div class="page-inner">
                <!-- BEGIN Left Aside -->
                <aside class="page-sidebar">
                    <span class="page-logo"><h4 class="text-white">= Sistema OLIMPOOS =</h4></span>
                    <!-- BEGIN PRIMARY NAVIGATION -->
                    <nav id="js-primary-nav" class="primary-nav" role="navigation">
                        <div class="nav-filter">
                            <div class="position-relative">
                                <input type="text" id="nav_filter_input" placeholder="Filtrar Menu" class="form-control" tabindex="0">
                                <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                                    <i class="fal fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="info-card">
                            <span class="profile-image"></span>
                            <div class="info-card-text text-center">
                                <a href="#" class="d-flex align-items-center text-white">
                                    <span class="text-truncate d-inline-block nombre-usuario"><?=$this->session->userdata('nombre')?></span>
                                </a>
                                <span class="d-inline-block text-truncate"><?=$this->session->userdata('email')?></span>
                            </div>
                            <img src="<?=base_url()?>frontend/images/toro1.jpeg" class="cover img img-fluid image-blurred-edge" alt="cover">
                            <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
                                <i class="fal fa-angle-down"></i>
                            </a>
                        </div>