<div class="row">
    <div class="col-md-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>Nueva Compra</h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Colapsar"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-info"><i class="fal fa-home m-r-5"></i> Asignar Proveedor</button>
                        </div>
                    </div>
                    <div class="row m-t-20">
                        <div class="col-md-12">
                            <h5><b>Datos del Proveedor</b></h5>
                            <hr>
                        </div>
                    </div>
                    <div class="row m-t-10">
                        <div class="col-md-6">
                            <label for="">Nombre o Razón Social:</label>
                            <input type="text" name="razonSocial" class="form-control" disabled autocomplete="off">
                        </div>
                        <div class="col-md-2">
                            <label for="">RFC Proveedor:</label>
                            <input type="text" class="form-control" name="rfc" autocomplete="off" disabled maxlength="13">
                        </div>
                        <div class="col-md-2">
                            <label for="">Tipo de Proveedor:</label>
                            <input type="text" class="form-control" name="tipo_provedor" autocomplete="off" disabled>
                        </div>
                        <div class="col-md-2">
                            <label for="">Telefono 1:</label>
                            <input type="text" class="form-control" name="telefono_proveedor" autocomplete="off" disabled>
                        </div>
                    </div>
                    <div class="row m-t-20">
                        <div class="col-md-12">
                            <h5><b>Generales de Compra</b></h5>
                            <hr>
                        </div>
                    </div>
                    <div class="row m-t-10">
                        <div class="col-md-2">
                            <label for="">Fecha de Compra:</label>
                            <input type="date" class="form-control" name="fecha_compra" autocomplete="off" value="<?=date("Y-m-d")?>">
                        </div>
                        <div class="col-md-2">
                            <label for="">Tipo de pago:</label>
                            <select name="tipoPago" class="form-control">
                                <option>Una sola exibición</option>
                                <option>A crédito</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="">Método de pago:</label>
                            <select name="formaPago" class="form-control">
                                <option>Efectivo</option>
                                <option>Cheque</option>
                                <option>Transferencia electrónica</option>
                                <option>Otro</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="">Referencia:</label>
                            <input type="text" class="form-control" name="referencia" autocomplete="off" placeholder="Max 10 caracteres" maxlength="10">
                        </div>
                        <div class="col-md-2">
                            <label for=""># de Nota o Factura:</label>
                            <input type="text" class="form-control" name="nota_factura" autocomplete="off" placeholder="Max 10 caracteres" maxlength="10">
                        </div>
                        <div class="col-md-2">
                            <label for="">Fecha de Entrega:</label>
                            <input type="date" class="form-control" name="fechaentrega" autocomplete="off" value="<?=date("Y-m-d")?>">
                        </div>
                    </div>
                    <div class="row m-t-20">
                        <div class="col-md-12">
                            <h5><b>Artículos</b></h5>
                            <hr>
                        </div>
                    </div>
                    <div class="row m-t-10">
                        <div class="col-md-4">
                            <label for="">Artículo:</label>
                            <select name="articulo" class="form-control">                                                              
                            </select>
                        </div>
                        <div class="col-md-1">
                            <label for="">Cantidad:</label>
                            <input type="text" class="form-control" name="cantidad" autocomplete="off" maxlength="3">
                        </div>
                        <div class="col-md-2">
                            <label for="">Importe:</label>
                            <input type="text" class="form-control" placeholder="0" name="importe" autocomplete="off" maxlength="3">
                        </div>
                        <div class="col-md-2">
                            <label for="">Precio Unitario:</label>
                            <input type="text" class="form-control" placeholder="0" disabled autocomplete="off" maxlength="3">
                        </div>
                        
                        <div class="col-md-3 text-right">
                            <button id="reactivity-add" class="btn btn-success waves-effect waves-themed m-t-20"> 
                                <i class="fas fa-plus m-r-5"></i> Agregar Artículo</button>
                        </div>
                    </div>
      
                    <div class="row m-t-10">
                        <div class="col-md-12">
                            <h5><b>Conceptos</b></h5>
                            <hr>
                        </div>
                    </div>
                    <div class="row m-t-10">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="tablaConcepto"></div>
                                    <hr>                            
                                </div>
                                <div class="col-md-12 offset-md-5 m-t-20">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for=""># Conceptos</label>
                                        <input type="text" name="conceptos_totales" class="form-control" disabled>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">Subtotal</label>
                                        <input type="text" name="subtotal" class="form-control" disabled>
                                    </div>
                                    <div class="col-md-1">
                                        <label for="">IVA %</label>
                                        <input type="text" name="iva_total" class="form-control" value="0">
                                    </div>
                                    <div class="col-md-2">
                                        <label for=""><b>TOTAL</b></label>
                                        <input type="text" name="iva_total" class="form-control" disabled>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-12 m-t-20">
                                    <label for="">Notas u Observaciones:</label>
                                    <textarea name="notas" class="form-control" cols="30" rows="5" placeholder="Max 600 caracteres" maxlength="600"></textarea>
                                </div>
                            </div>
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