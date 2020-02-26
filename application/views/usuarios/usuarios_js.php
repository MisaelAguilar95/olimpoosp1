<script>
$(document).ready(function() {
    $('#sec_nuevo_usuario').hide();
    $("body").on('click','.btn-usuarios',function(){
       $('#sec_tabla_usuario').toggle('left');
       $('#sec_nuevo_usuario').toggle('left');
    }); 

    let tabledata = <?=$usuarios;?>;
    let iconssubcat = function(cell, formatterParams){
        let botones = '';
        if(cell.getRow().getData().activo == 0)
            botones += "<div class='btn btn-sm btn-secondary btn_acti' val='1' ide='"+cell.getRow().getData().id+"'><i class='fal fa-power-off'></i></div>";
        else
        botones += "<div class='btn btn-sm btn-info btn_acti' val='0' ide='"+cell.getRow().getData().id+"'><i class='fal fa-power-off'></i></div>";
        botones += "<div class='m-l-15 btn btn-sm btn-dorado btn_edit' ide='"+cell.getRow().getData().id+"'><i class='fal fa-pencil'></i></div>";
        botones += "<div class='m-l-15 btn btn-sm btn-danger btn_eliminar' usu='"+cell.getRow().getData().usuario+"' ide='"+cell.getRow().getData().id+"'><i class='fa fa-trash'></i></div>";
        return botones;
    };

    let table = new Tabulator("#tabla_usuarios", {
        layout:"fitColumns",
        pagination:"local",
        paginationSize:10,
        paginationSizeSelector:[3, 5, 10],
        movableColumns:true,
        data:tabledata,
        columns:[
            {title:"Usuario", field:"usuario", width:130, headerFilter:"input", headerFilterPlaceholder:"Filtro"},
            {title:"Rol", field:"rol", width:120},
            {title:"Nombre", field:"nombre"},
            {title:"Email", field:"email",width:160},
            {title:"Activo", field:"activo", width:90, align:'center'},
            {title:"Acciones", formatter:iconssubcat, align:"center", width:180}
        ]
    });
    //actualizar estatus
    $(document).on('click','.btn_acti',function(){
        let valor = $(this).attr('val');
        let id = $(this).attr('ide');
        $.ajax({
            type: "POST",
            url: '<?=base_url()?>inicio/status_usuario',
            data: {'id':id,'status':valor},
            success: function(res){
                if(res){
                    salert('Cambios realizados correctamente!','success',()=>{window.location.reload();});
                }
                else
                    salert('Error al realizar cambios...','danger')
            }
        });
    })
    //eliminar usuarios
    $(document).on('click','.btn_eliminar',function(){
        let id = $(this).attr('ide');
        let usuario = $(this).attr('usu');
        $.showConfirm({
            title: '', body: '<h3>¿Confirma que deseas eliminar el usuario: <b>'+usuario+'</b>?</h3>', textTrue: "Aceptar", textFalse: "Cancelar",
            onSubmit: function (result) {
                if (result)
                    $.ajax({
                        type: "POST",
                        url: '<?=base_url()?>inicio/eliminar_usuario',
                        data: {'id':id},
                        success: function(res){
                            if(res){
                                salert('Se elimino el usuario correctamente!','success',()=>{window.location.reload();});
                            }
                            else
                                salert('Error al realizar la eliminación de usuario...','danger')
                        }
                    });
                else
                salert('Se cancelo la eliminación del usuario...','info')
            }
        })
        
    })
    //Agregar nuevo usuario
    $(document).on('click','#btn_guardar_usuario',function(){
        let nombre = $('input[name=nombre_usuario]').val();
        let email = $('input[name=email]').val();
        let usuario = $('input[name=usuario]').val();
        let pass = $("input[name=password]").val();
        let rol = $("select[name=rol]").val();
        let data = {'usuario':usuario,'password':pass,'nombre':nombre,'email':email,'activo':1,'rol_id':rol};

        $.ajax({
            type: "POST",
            url: '<?=base_url()?>inicio/insertar_usuario',
            data: {'data':data},
            success: function(res){
                if(res){
                    salert('Registro insertado correctamente!','success',()=>{window.location.reload();});
                }
                else
                    salert('Error al agregar registro...','danger')
            }
        });
        
    })
    //Actualizar usuario
    $(document).on('click','.btn_edit',function(){
        let id = $(this).attr('ide');
        window.location.href = '<?=base_url()?>inicio/mostrar_usuario?id='+id
    })

});
</script>
