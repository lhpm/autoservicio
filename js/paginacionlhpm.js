
$(document).ready(function(){
   $('#paginacionlhpm').dataTable( { //CONVERTIMOS NUESTRO LISTADO DE LA FORMA DEL JQUERY.DATATABLES- PASAMOS EL ID DE LA TABLA
        "sPaginationType": "full_numbers" //DAMOS FORMATO A LA PAGINACION(NUMEROS)
	//$("#dataTable").dataTable().fnDestroy();
	} );
})
