$( document ).ready(function() 
{
    //BOTÓN PARA DESPLEGAR ASIENTOS
    //Varía según el número de filas que se tenga
    //$('#fila-asientos-ida1').hide();
    $('#btn-fila-asientos-ida1').click(function(){
        $(this).toggleClass('active');
        $('#fila-asientos-ida1').toggleClass('active');
    });
    //$('#fila-asientos-ida2').hide();
    $('#btn-fila-asientos-ida2').click(function(){
        $(this).toggleClass('active');
        $('#fila-asientos-ida2').toggleClass('active');
    });
    //$('#fila-asientos-regreso1').hide();
    $('#btn-fila-asientos-regreso1').click(function(){
        $(this).toggleClass('active');
        $('#fila-asientos-regreso1').toggleClass('active');
    });
});