const form = document.getElementById('form');
const usuario = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const resultadoContainer = document.getElementById('resultado');
const password2 = document.getElementById('password2');

form.addEventListener('submit', e => {
	e.preventDefault();
	revInput();
});

function revInput() {
    const usuarioValue = usuario.value.trim();
	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    if(usuarioValue === '') {
		errors(usuario, 'No puede dejar el usuario en blanco');
	} else {
		correcto(usuario);
	}
	
	if(emailValue === '') {
		errors(email, 'El correo no puede estar en blanco');
	} else if (!isEmail(emailValue)) {
		errors(email, 'No ingreso un email válido');
	}else {
		correcto(email);
	}
	
	if(passwordValue === '') {
		errors(password, 'La contraseña no puede estar en blanco.');
	} else {
		correcto(password);
	}

    if(password2Value === '') {
		errors(password2, 'La contraseña no puede estar en blanco.');
	} else if(passwordValue !== password2Value) {
		errors(password2, 'Las contraseñas no coinciden');
	} else{
		correcto(password2);
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

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}