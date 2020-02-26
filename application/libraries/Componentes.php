<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Componentes {

	public function boton_mini(){
		return '<!-- DOC: nav menu layout change shortcut -->
		<div class="hidden-md-down dropdown-icon-menu position-relative">
			<a href="#" class="header-btn btn js-waves-off" data-action="toggle" data-class="nav-function-hidden" title="Hide Navigation">
				<i class="ni ni-menu"></i>
			</a>
			<ul>
				<li>
					<a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-minify" title="Minify Navigation">
						<i class="ni ni-minify-nav"></i>
					</a>
				</li>
				<li>
					<a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-fixed" title="Lock Navigation">
						<i class="ni ni-lock-nav"></i>
					</a>
				</li>
			</ul>
		</div>';
	}

	public function botones_conf(){
		return '<div class="ml-auto d-flex">
		<!-- app settings -->
		<div class="hidden-md-down">
			<a href="#" class="header-icon" data-toggle="modal" data-target=".js-modal-settings">
				<i class="fal fa-cog"></i>
			</a>
		</div>
		<!-- app shortcuts -->
		<div>
			<a href="'.base_url().'login/salir" class="header-icon" title="Salida">
				<i class="fal fa-sign-out"></i>
			</a>
			
		</div>
		<!-- app user menu -->
		</div>';
	}

	public function ajustes(){
		return '<!-- BEGIN Page Settings -->
        <div class="modal fade js-modal-settings modal-backdrop-transparent" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-right modal-md">
                <div class="modal-content">
                    <div class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center w-100">
                        <h4 class="m-0 text-center color-white">
                            Ajustes Visuales
                            <small class="mb-0 opacity-80">Interface de Usuario</small>
                        </h4>
                        <button type="button" class="close text-white position-absolute pos-top pos-right p-2 m-1 mr-2" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="settings-panel">
                            <div class="mt-4 d-table w-100 px-5">
                                <div class="d-table-cell align-middle">
                                    <h5 class="p-0">
                                        Modificaciones Generales
                                    </h5>
                                </div>
                            </div>
                            <div class="list" id="fh">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="header-function-fixed"></a>
                                <span class="onoffswitch-title">Encabezado Fijo</span>
                                <span class="onoffswitch-title-desc">El encabezado permanece fijo</span>
                            </div>
                            <div class="list" id="nff">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-fixed"></a>
                                <span class="onoffswitch-title">Menu Fijo</span>
                                <span class="onoffswitch-title-desc">menu permanece fijo</span>
                            </div>
                            <div class="list" id="mhni">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-hide-nav-icons"></a>
                                <span class="onoffswitch-title">Esconder Iconos del Menu</span>
                                <span class="onoffswitch-title-desc">esconde los iconos del menu</span>
                            </div>
                            <div class="list" id="mhic">
                                <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-hide-info-card"></a>
                                <span class="onoffswitch-title">Esconder Información de Usuario</span>
                                <span class="onoffswitch-title-desc">esconder la información <br> del usuario en el menu</span>
                            </div>
  
                            <div class="list mt-3">
                                <span class="onoffswitch-title">Tamaño de Letra </span>
                                <div class="btn-group btn-group-sm btn-group-toggle my-2" data-toggle="buttons">
                                    <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text-sm" data-target="html">
                                        <input type="radio" name="changeFrontSize"> CH
                                    </label>
                                    <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text" data-target="html">
                                        <input type="radio" name="changeFrontSize" checked=""> MD
                                    </label>
                                    <label class="btn btn-default btn-sm" data-action="toggle-swap" data-class="root-text-lg" data-target="html">
                                        <input type="radio" name="changeFrontSize"> LG
                                    </label>
                                </div>
                                <span class="onoffswitch-title-desc d-block mb-g">Cambia el tamaño de la letra solo en esta página de manera temporal</span>
                            </div>
                            <hr class="m-0">
                            <div class="p-3 d-flex align-items-center justify-content-center bg-faded">
                                <a href="#" class="btn bg-pink fw-500 mr-2" data-action="app-reset">Reiniciar Cambios</a>
                            </div>
                        </div>
                        <span id="saving"></span>
                    </div>
                </div>
            </div>
        </div> <!-- END Page Settings -->';
	}

}
