<div id="panel-1" class="panel">
    <div class="panel-hdr">
        <h2>Lista de Clientes</h2>
        <div class="panel-toolbar">
            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Colapsar"></button>
        </div>
    </div>
    <div class="panel-container show">
        <div class="panel-content">
        <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>RFC</th>
                                    <th>Nombre de Contacto</th>
                                    <th>E mail</th>
                                    <th>Telefono</th>
                                    <th>Telefono2</th>
                                    <th>Domicilio</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($clientes)):?>
                                    <?php foreach($clientes as $cliente):?>
                                        <tr>
                                            <td><?php echo $cliente->id;?></td>
                                            <td><?php echo $cliente->nombre;?></td>
                                            <td><?php echo $cliente->rfc;?></td>
                                            <td><?php echo $cliente->nombre_contacto;?></td>
                                            <td><?php echo $cliente->email;?></td>
                                            <td><?php echo $cliente->telefono;?></td>
                                            <td><?php echo $cliente->telefono2;?></td>
                                            <td><?php echo $cliente->domicilio;?></td>
                                            <td><?php echo $cliente->estado;?></td>
                                          
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success waves-effect waves-themed" data-toggle="modal" data-target="#modal-default" value="<?php echo $cliente->id;?>">
                                                        <span class="fa fa-search m-r-5"></span>
                                                    </button>
                                                    <a href="<?php echo base_url()?>administrador/clientes/edit/<?php echo $cliente->id;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                    <a href="<?php echo base_url();?>administrador/clientes/delete/<?php echo $cliente->id;?>" class="btn btn-danger btn-remove"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
      
    </section>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Informacion del cliente</h4>
                </div>
                <div class="modal-body">
                    <p>**************</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
          <!-- /.modal-content -->
        </div>
  <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->
</div>
 


















