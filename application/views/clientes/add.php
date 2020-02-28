<div id="panel-1" class="panel">
    <div class="panel-hdr">
        <h2>Nuevo Cliente</h2>
        <div class="panel-toolbar">
            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Colapsar"></button>
        </div>
    </div>
    <div class="panel-container show">
        <div class="panel-content">
        <div class="row">
            <div class="col-md-12">
                <?php if($this->session->flashdata("error")):?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                        
                     </div>
                <?php endif;?>
                <form action="<?php echo base_url();?>administrador/clientes/store" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Nombre o Razón Social:</label>
                        <input type="text" name="razonSocial" class="form-control" autocomplete="off" placeholder="Max 150 caracteres" maxlength="150">
                    </div>
                    <div class="col-md-3">
                        <label for="">RFC:</label>
                        <input type="text" class="form-control" name="rfc" autocomplete="off" placeholder="Max 13 Caracteres" maxlength="13">
                    </div>
                    <div class="col-md-3">
                        <label for="">Estatus:</label>
                        <input type="text" class="form-control" name="estatus_cliente" disabled autocomplete="off" value="Activo">
                    </div>
                </div>
                <div class="row m-t-20">
                    <div class="col-md-5">
                        <label for="">Nombre de Contacto:</label>
                        <input type="text" class="form-control" name="contacto" autocomplete="off" placeholder="Max 150" maxlength="150">
                    </div>
                    <div class="col-md-2">
                        <label for="">Teléfono 1:</label>
                        <input type="text" name="tel1" class="form-control" autocomplete="off" placeholder="Max 15 caracteres" maxlength="15">
                    </div>
                    <div class="col-md-2">
                        <label for="">Teléfono 2:</label>
                        <input type="text" name="tel2" class="form-control" autocomplete="off" placeholder="Max 15 caracteres" maxlength="15">
                    </div>
                    <div class="col-md-3">
                        <label for="">E-mail:</label>
                        <input type="text" name="email" class="form-control" autocomplete="off" placeholder="Max 100 caracteres" maxlength="100">
                    </div>
                </div>
                <div class="row m-t-20">
                    <div class="col-md-4">
                        <label for="">Estado:</label>
                        <select name="estado_cliente" class="form-control">
                                <option value="no">Seleccione uno...</option>
                                <option value="Aguascalientes">Aguascalientes</option>
                                <option value="Baja California">Baja California</option>
                                <option value="Baja California Sur">Baja California Sur</option>
                                <option value="Campeche">Campeche</option>
                                <option value="Chiapas">Chiapas</option>
                                <option value="Chihuahua">Chihuahua</option>
                                <option value="Coahuila">Coahuila</option>
                                <option value="Colima">Colima</option>
                                <option value="Distrito Federal">Distrito Federal</option>
                                <option value="Durango">Durango</option>
                                <option value="Estado de México">Estado de México</option>
                                <option value="Guanajuato">Guanajuato</option>
                                <option value="Guerrero">Guerrero</option>
                                <option value="Hidalgo">Hidalgo</option>
                                <option value="Jalisco">Jalisco</option>
                                <option value="Michoacán">Michoacán</option>
                                <option value="Morelos">Morelos</option>
                                <option value="Nayarit">Nayarit</option>
                                <option value="Nuevo León">Nuevo León</option>
                                <option value="Oaxaca">Oaxaca</option>
                                <option value="Puebla">Puebla</option>
                                <option value="Querétaro">Querétaro</option>
                                <option value="Quintana Roo">Quintana Roo</option>
                                <option value="San Luis Potosí">San Luis Potosí</option>
                                <option value="Sinaloa">Sinaloa</option>
                                <option value="Sonora">Sonora</option>
                                <option value="Tabasco">Tabasco</option>
                                <option value="Tamaulipas">Tamaulipas</option>
                                <option value="Tlaxcala">Tlaxcala</option>
                                <option value="Veracruz">Veracruz</option>
                                <option value="Yucatán">Yucatán</option>
                                <option value="Zacatecas">Zacatecas</option>
                        </select>
                    </div>
                    <div class="col-md-8">
                        <label for="">Domicilio:</label>
                        <input type="text" name="domicilio" class="form-control" autocomplete="off" placeholder="Max 400 caracteres" maxlength="400">
                    </div>
                </div>
                <div class="row m-t-20">
                    <div class="col-md-12">
                    <label for="">Notas u Observaciones:</label>
                    <textarea name="notas" class="form-control" cols="30" rows="5" placeholder="Max 600 caracteres" maxlength="600"></textarea>
                    </div>
                </div>
                <div class="row m-t-20">
                    <div class="col-md-12 text-right">
                        <button onclick="location.href =''" class="btn btn-danger waves-effect waves-themed"><i class="fa fa-ban m-r-5"></i> Cancelar</button>
                        <button id="btn_guardar_cliente" class="btn btn-success waves-effect waves-themed"><i class="fa fa-save m-r-5"></i> Guardar</button>
                    </div>
                </div>
                </form>
            
            </div>
        </div>
        </div>
    </div>
</div>

