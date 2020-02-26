<div class="row">
    <div class="col-md-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>Nuevo Proveedor</h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Colapsar"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-md-5">
                            <label for="">Nombre o Razón Social:</label>
                            <input type="text" name="razonSocial" class="form-control" autocomplete="off" placeholder="Max 150 caracteres" maxlength="150">
                        </div>
                        <div class="col-md-2">
                            <label for="">RFC:</label>
                            <input type="text" class="form-control" name="rfc" autocomplete="off" placeholder="Max 13 caracteres" maxlength="13">
                        </div>
                        <div class="col-md-2">
                            <label for="">Tipo de Proveedor</label>
                            <select name="tipoProveedor" class="form-control">
                                <option>Productos</option>
                                <option>Servicios</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">Producto o Servicio:</label>
                            <select name="productos" class="form-control">
                                <option>Hilos de Algodon</option>
                                <option>Electricidad/Fontaneria</option>
                                <option>Mantenimiento Maquina Tela</option>
                                <option>Terminado Tela</option>
                                <option>Bolsa</option>
                            </select>
                        </div>
                    </div>
                    <div class="row m-t-20">
                        <div class="col-md-5">
                        <label for="">Nombre de Contacto:</label>
                        <input type="text" name="contacto" class="form-control" placeholder="Max 150 caracteres" maxlength="50">
                        </div>
                        <div class="col-md-2">
                            <label for="">Teléfono Oficina:</label>
                            <input type="text" name="telefono" class="form-control" autocomplete="off" placeholder="Max 15 caracteres" maxlength="15">
                        </div>
                        <div class="col-md-2">
                            <label for="">Teléfono Celular:</label>
                            <input type="text" name="celular" class="form-control" autocomplete="off" placeholder="Max 15 caracteres" maxlength="15">
                        </div>
                        <div class="col-md-3">
                            <label for="">E-mail:</label>
                            <input type="text" name="email" class="form-control" autocomplete="off" placeholder="Max 100 caracteres" maxlength="100">
                        </div>
                    </div>
                    <div class="row m-t-20">
                        <div class="col-md-4">
                            <label for="">Estado:</label>
                            <select name="estado" class="form-control"></select>
                        </div>
                        <div class="col-md-8">
                            <label for="">Domicilio:</label>
                            <input type="text" name="domicilio" class="form-control" autocomplete="off" placeholder="Max 400 caracteres" maxlength="400">
                        </div>
                    </div>
                    <div class="row m-t-20">
                        <div class="col-md-12">
                            <label for="">Notas u Observacones:</label>
                            <textarea name="actividades" cols="30" rows="5" class="form-control" placeholder="Max 600 caracteres" maxlength="600"></textarea>
                        </div>
                    </div>
                    <div class="row m-t-20">
                        <div class="col-md-12 text-right">
                            <button onclick="location.href =''" class="btn btn-danger waves-effect waves-themed"><i class="fa fa-ban m-r-5"></i> Cancelar</button>
                            <button id="btn_guardar_usuario" class="btn btn-success waves-effect waves-themed"><i class="fa fa-save m-r-5"></i> Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>