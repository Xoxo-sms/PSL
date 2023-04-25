const formulario = document.querySelector('form');
formulario.addEventListener('submit',(e) => {e.preventDefault();

const usuario=formulario.querySelector('input[type="text"]').value;
const contraseña=formulario.querySelector('input[type="password"]').value;

if (usuario.trim()==='' || contraseña.trim()===''){alert('debes de ingresar un usuario y una contraseña correcta');
}else{
    formulario.submit();
}
});