function validar(){

	

	//Comprobar nombre

	var nom= document.getElementById("nombre").value;

	if(!nom){

		alert ("No has introducido el nombre");

	}

	

	//validar dni

	var dni= document.getElementById("dnin").value.length;

	if(dni != 8){

		alert ("DNI Incorrecto");

	}

	

	//Comprobar letra DNI

	var nom= document.getElementById("dnil").value;

	if(!nom){

		alert ("No has introducido la letra del DNI");

	}

	

	//validar sexo

	sexradio = document.getElementsByName("sexo");

	nsex = 0;

	for(var i=0;i<sexradio.length;i++){

		if (sexradio[i].checked){

			nsex=sexradio[i].value;

		}

	}

		if(nsex==0){

			alert("No has marcado el sexo");

		}

	

	//validar curso

	var curso = document.getElementById("curso").value;

	if (curso==0){

		alert("No has introducido el curso");

	}

	//validar año

	var ano = document.getElementById("ano").value;

	if (ano==0){

		alert("No has introducido el año del curso");

	}

	

	//validar asignaturas

	asignaturas = document.getElementsByName("asig");

	nasig = 0;

	for(var i=0;i<asignaturas.length;i++){

		if (asignaturas[i].checked){

			nasig=asignaturas[i].value;

		}

	}

		if(nasig==0){

			alert("Te faltan las asignaturas aprobadas");

		}

	

	//validar checkbox

	var isChecked = document.getElementById('registrarse').checked;

	if(!isChecked){

		alert('No has aceptado pasartelo bien');

	}

	

	var enviar=document.getElementsByName("enviar");

	enviar.disabled=true;



	return false;

}



function checkifempty(){

			if (!document.form1.condicion.checked)

				{

					document.form1.registrarse.disabled=true;

				}

			else

				{     

					document.form1.registrarse.disabled=false;

				}

}





function registrar(){

			alert ("hola");

}
