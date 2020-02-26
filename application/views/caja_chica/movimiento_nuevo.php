<div class="row">
    <div class="col-md-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>Nuevo Movimiento</h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Colapsar"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Nombre o Razón social:</label>
                            <input type="text" name="razonSocial" class="form-control" autocomplete="off" placeholder="Max 150 caracteres" maxlength="150">
                        </div>
                        <div class="col-md-2">
                            <label for="">Recibo o Factura:</label>
                            <input type="text" name="recibo" class="form-control" autocomplete="off" placeholder="Max 10 caracteres" maxlength="10">
                        </div>
                        <div class="col-md-2">
                            <label for="">Importe ($):</label>
                            <input type="text" class="form-control" placeholder="0.00" name="importe" autocomplete="off">
                        </div>
                        <div class="col-md-2">
                            <label for="">Fecha:</label>
                            <?php $fecha = date("Y-m-d");?>
                            <input type="date" class="form-control" name="fecha" autocomplete="off" value="<?php echo $fecha;?>">
                        </div>
                    </div>
                    <div class="row m-t-20">
                        <div class="col-md-12">
                            <label for="">Concepto u Observaciones:</label>
                            <textarea name="notas" class="form-control" cols="30" rows="5" placeholder="Max 600 caracteres" maxlength="600"></textarea>
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