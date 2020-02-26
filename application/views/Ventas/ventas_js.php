<script>
//define data
let icons = function(cell, formatterParams){
        return "<div class='m-l-10 btn btn-danger btn-sm' title='Eliminar Articulo' ide='"+cell.getRow().getData().id+"'><i class='fa fa-trash'></i></div>";
    };

var tabledata = [
    {clave:'BT-0', cantidad:50, descripcion:"Boxer talla chica", precio:110, importe:5500,},
    {clave:'BT-4', cantidad:30, descripcion:"Boxer talla grande", precio:138, importe:4140 },
    {clave:'BT-M', cantidad:15, descripcion:"Boxer talla mediana", precio:120, importe:1800 },
    {clave:'BT-5', cantidad:15, descripcion:"Boxer talla grande", precio:155, importe:2325 },
    {clave:'BT-XL', cantidad:10, descripcion:"Boxer talla Extragrande", precio:210, importe:2100 }
];

//Build Tabulator
var table = new Tabulator("#tablaConcepto", {
    
    layout:"fitColumns",
    reactiveData:true, //turn on data reactivity
    data:tabledata, //load data into table
    columns:[
        {title:"Clave", field:"clave", sorter:"string",width:100},
        {title:"Descripcion", field:"descripcion", sorter:"string",width:200},
        {title:"Docenas", field:"cantidad", sorter:"number", align:'center',width:120},
        {title:"Precio x Docena", field:"precio", sorter:"number",align:'center',width:180},
        {title:"Importe", field:"importe", sorter:"number",align:'center',width:120},
        {title:"Eliminar", formatter:icons,align:'center'}
    ],
});

//add row to bottom of table on button click
document.getElementById("reactivity-add").addEventListener("click", function(){
    tabledata.push({});
});

//remove bottom row from table on button click
document.getElementById("reactivity-delete").addEventListener("click", function(){
    tabledata.pop();
});

</script>