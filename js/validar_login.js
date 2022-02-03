window.addEventListener('load', init);

function init() {
    formulario.addEventListener('submit', loginUser);
}

function loginUser(event) {
    event.preventDefault();

    var email = formulario.correo.value;
    var password = formulario.contrasena.value;

    var formData = new FormData();
    formData.append('correo', email);
    formData.append('contrasena', password);

    fetch('login_usuario.php', {
        method: 'POST',
        body: formData
    }).then( response => {
        if(response.ok){
            return response.text();
        }else{
            throw new Error('Petición fallida');
        }
    }).then(message => {
        showSnackBar(message);
    }).catch(error => {
        showSnackBar(error.message, true);
    });
}

function showSnackBar(message, isError = false) {
    var snackbar = document.getElementById("snackbar");
    snackbar.innerHTML = message;
    snackbar.className = "show";
    if(isError) {
        snackbar.classList.add('error');
    }
    setTimeout(() => { 
        snackbar.className = snackbar.className.replace("show", ""); 
    }, 3000);
}