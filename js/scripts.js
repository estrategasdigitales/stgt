$( document ).ready(function() 
{
    //BOTÓN PARA DESPLEGAR ASIENTOS
    //Varía según el número de filas que se tenga
    $('#btn-fila-asientos-ida1').click(function(){
        $(this).toggleClass('active');
        $('#fila-asientos-ida1').toggleClass('active');
        $('#fila-asientos-ida2').removeClass('active');
        $('#fila-asientos-regreso1').removeClass('active');
    });
    $('#btn-fila-asientos-ida2').click(function(){
        $(this).toggleClass('active');
        $('#fila-asientos-ida2').toggleClass('active');
        $('#fila-asientos-ida1').removeClass('active');
        $('#fila-asientos-regreso1').removeClass('active');
    });
    $('#btn-fila-asientos-regreso1').click(function(){
        $(this).toggleClass('active');
        $('#fila-asientos-regreso1').toggleClass('active');
        $('#fila-asientos-ida1').removeClass('active');
        $('#fila-asientos-ida2').removeClass('active');
    });
    //ABRIR/CERRAR ACORDEÓN DEPENDIENDO DEL QUE SE ABRA
    $('#accordionIda .accordion-button').click(function()
    {
        $('#accordionRegreso .accordion-button').toggleClass('collapsed');
        $('#accordionRegreso #collapseOneRegreso').toggleClass('show');
    });
    $('#accordionRegreso .accordion-button').click(function()
    {
        $('#accordionIda .accordion-button').toggleClass('collapsed');
        $('#accordionIda #collapseOneIda').toggleClass('show');
    });
});