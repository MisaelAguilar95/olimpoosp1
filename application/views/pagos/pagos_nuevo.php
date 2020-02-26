<div class="row">
    <div class="col-md-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>Nuevo Pago de Nómina</h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Colapsar"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 text-center">
                            <button class="btn btn-primary">Asignar Empleado</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <hr>
                        </div>
                    </div>
                    <div class="row m-t-20">
                        <div class="col-md-4">
                            <label for="">Nombre del Empleado:</label>
                            <input type="text" name="empleado" class="form-control" disabled>
                        </div>
                        <div class="col-md-5">
                            <label for="">Puesto del Empleado:</label>
                            <input type="text" name="puesto" class="form-control" disabled>
                        </div>
                        <div class="col-md-1">
                            <label for="">Edad:</label>
                            <input type="text" name="edad" disabled class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label for="">Fecha de Ingreso:</label>
                            <input type="date" name="fecha_ingreso" disabled class="form-control">
                        </div>
                    </div>
                    <div class="row m-t-10">
                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>
                    <div class="row m-t-20">
                        <div class="col-md-3">
                            <label for="">Usuario:</label>
                            <input type="text" name="usuario" class="form-control" autocomplete="off" placeholder="Max 50 caracteres" maxlength="50">
                        </div>
                        <div class="col-md-3">
                            <label for="">Contraseña:</label>
                            <input type="password" name="password" class="form-control" autocomplete="off">
                        </div>
                        <div class="col-md-3">
                            <label for="">Confirmar Contraseña:</label>
                            <input type="password" name="pass2" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="">Perfil:</label>
                            <select name="rol" class="form-control">
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
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