function verpassword() {
    var tipo = document.getElementById("contrasena");
    if (tipo.type == "password") {
        tipo.type = "text";
    } else {
        tipo.type = "password";
    }
}