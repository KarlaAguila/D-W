const form = document.getElementById('form');
const nombre = document.getElementById('nombre_flor');
const descripcion = document.getElementById('descripcion');
const precio = document.getElementById('precio');
const resultadoContainer = document.getElementById('resultado');

form.addEventListener('submit', e => {
	e.preventDefault();
	revInput();
});

function revInput() {
    const nombreValue = nombre.value.trim();
	const descripcionValue = descripcion.value.trim();
	const precioValue = precio.value.trim();
    const resultadoContainer = document.getElementById('resultado');

    if(nombreValue === '') {
		errors(nombre, 'No puede dejar el usuario en blanco');
	} else {
		correcto(nombre);
	}

    if(descripcionValue === '') {
		errors(descripcion, 'No puede dejar el usuario en blanco');
	} else {
		correcto(descripcion);
	}

    if(precioValue === '') {
		errors(precio, 'No puede dejar el usuario en blanco');
	} else {
		correcto(precio);
	}
	
	

    // Verifica si no hay errores y envía el formulario si todo está correcto
    if (!form.querySelectorAll('.error').length) {
        form.submit();
    }
}

function errors(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-controll error';
	small.innerText = message;
}

function correcto(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-controll success';
}
