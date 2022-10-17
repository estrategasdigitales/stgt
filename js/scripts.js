$( document ).ready(function() 
{
    //BOTÓN PARA DESPLEGAR ASIENTOS
    //Varía según el número de filas que se tenga
    $('#fila-asientos-ida1').hide();
    $('#btn-fila-asientos-ida1').click(function(){
        $('#fila-asientos-ida1').show();
    });
    $('#fila-asientos-ida2').hide();
    $('#btn-fila-asientos-ida2').click(function(){
        $('#fila-asientos-ida2').show();
    });
    $('#fila-asientos-regreso1').hide();
    $('#btn-fila-asientos-regreso1').click(function(){
        $('#fila-asientos-regreso1').show();
    });
});