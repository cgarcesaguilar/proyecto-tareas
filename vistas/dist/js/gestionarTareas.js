$(document).ready(main)

function main () {

	$("#formu-nueva-tarea").submit(function(e){
		e.preventDefault();
		var datos = new FormData($(this)[0])
		console.log(datos)
	})


}