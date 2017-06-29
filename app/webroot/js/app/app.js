
var table = $('.table');

$('.table').on('click', 'tr', function(){
	if($(this).hasClass('success')){
		$(this).removeClass('success');	
	}else{
		table.$('tr.success').removeClass('success');
		$(this).addClass('success'); 	
	}

});
$('div.dataTables_filter input').focus();

$('#editar').click(function(){//se cambio Table por example
	var id = $('#example tbody tr.selected td:first').text();
	//alert(id);
	//console.log(id);
	if(id){
		$.ajax({
			url: URL_BASE + controller + '/return_data',
			type: 'POST',
			dataType: 'json',
			data: {id: id},
			success: function(data){
				Formulario(data);			
				//console.log(data);
				//location.reload(true);
			}
		})
	}else{
		alert('Seleccione un registro');	
	}
});
$('#anular').click(function(){
	var id = $('#example tbody tr.selected td:first').text();
	//alert('id');
	if(id){
		$.ajax({
			url: URL_BASE + controller + '/eliminar/' +id,
			type: 'POST',
			dataType: 'json',
			data: {id: id},
			success: function(data){
				//Formulario(data);			
				alert(data);
				location.reload(true);
			}
		})
	}else{
		alert('Seleccione un registro');	
	}
});

