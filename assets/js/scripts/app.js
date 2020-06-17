var xhr = $.ajax("localhost/ver_api/lista").done(function(datos){
	var data = JSON.parse(datos);
	$.each(data, function(key, datos){
		$("#MostrarAPI").append(
			'<div class="col-md-4" style="padding-left: 10px">'+
				'<table class="table table-bordered" style="width: 100%">'+
					'<tbody>'+
						'<tr><td colspan="3"><img src="'+ datos.imagen +'" width="128" height="auto" /></td></tr>'+
						'<tr style="height: 50px">'+
							'<td style="width: 10%"><b>'+ datos.codigo +'</b></td>'+
							'<td style="width: 80%"><font style="font-size: 10px">'+ datos.nombre +'</font></td>'+
							'<td style="width: 10%">'+
								'<form action="eliminar_api/'+ datos.codigo +'" method="GET">'+
									'<button type="submit" class="btn btm-sm btn-danger font-weight-bold">X</button>'+
								'</form>'+
							'</td>'+
						'</tr>'+
					'</tbody>'+
				'</table>'+
			'</div>'
		);
	});
})
.fail(function(){
	console.log("ERROR AL CARGAR LA API.");
});