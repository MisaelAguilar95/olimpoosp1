<script>
//define data
let icons = function(cell, formatterParams){
        return "<div class='m-l-10 btn btn-danger btn-sm' title='Eliminar Articulo' ide='"+cell.getRow().getData().id+"'><i class='fa fa-trash'></i></div>";
    };

var tabledata = [
    {clave:'HA', cantidad:50, unidad:'Kg', descripcion:"Hilo de Algodon", precio:110, importe:5500,},
    {clave:'Hilo-Nay', cantidad:30, unidad:'Kg', descripcion:"Hilo de Naylon", precio:138, importe:4140 },
    {clave:'HC-AM', cantidad:15, unidad:'Carrete', descripcion:"Hilo de costura color Azul Marino", precio:120, importe:1800 },
    {clave:'HC-R', cantidad:15, unidad:'Carrete', descripcion:"Hilo de costura color rojo", precio:155, importe:2325 },
    {clave:'HC-VM', cantidad:10, unidad:'Carrete', descripcion:"Hilo de costura colo verde militar", precio:210, importe:2100 }
];

//Build Tabulator
var table = new Tabulator("#tablaConcepto", {
    
    layout:"fitColumns",
    reactiveData:true, //turn on data reactivity
    data:tabledata, //load data into table
    columns:[
        {title:"Clave", field:"clave", sorter:"string",width:85},
        {title:"Descripcion", field:"descripcion", sorter:"string",width:350},
        {title:"Cantidad", field:"cantidad", sorter:"number", align:'center',width:120},
        {title:"Unidad", field:"unidad", sorter:"string", align:'center',width:120},
        {title:"$/Uni", field:"precio", sorter:"number",align:'center',width:100},
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