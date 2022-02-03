window.addEventListener('load', ()=>{
    var form = document.getElementById('formulario');
    var correo = document.getElementById('correo');
    var contrasena = document.getElementById('contrasena');

    form.addEventListener('click', data);


    function data(){
        var datos = new FormData();
        
        datos.append('correo', correo.value);
        datos.append('contrasena', contrasena.value);

        fetch('login_usuario.php',{
            method: 'POST',
            body: datos
        }).then(Response => Response.json())
        .then(({success}) =>{
            if(success === 1) {
                location.href = '../views/home.php';
            }else{
                alert("Usuario no existe, por favor verifique los datos.");
                window.location = "../views/login_registro.php";
            }
        });
    }
});