


function Formulario(data){
	$('#id').val(data[0].Cliente.id);
	$('#nombres').val(data[0].Cliente.nombres);
	$('#apellidos').val(data[0].Cliente.apellidos);
	$('#direccion').val(data[0].Cliente.direccion);
	$('#telefono').val(data[0].Cliente.telefono);
	$('#email').val(data[0].Cliente.email);
	$('#nro_documento').val(data[0].Cliente.nro_documento);
	var option = ['NATURAL']['JURIDICO'];
	var html = '';
	for (var i = 0; i < option.length; i++) {
		if(option[i]==data[0].Cliente.tipo_cliente)
			html += '<option value="' +option[i]+'selected">'+option[i]+'</option>';
	}else{
		html += '<option value="' +option[i]+'">'+option[i]+'</option>';
	}
	$('#tipo_cliente').html(html);
	$('#modal-editar').modal('show');
}
$('#tipo_cliente').change(function(){
		if($('#tipo_cliente').val()=='NATURAL'){
			$('#nro_doc').html('DNI');
			$('#nro_documento').attr('maxlength', '8');
		}else{
			$('#nro_doc').html('RUC');
			$('#nro_documento').attr('maxlength', '11');
		}

	});