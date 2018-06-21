function validar(){

    var valor;
    valor = document.getElementById("username").value;
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
        alert("Nombre no valido");
        return false;
    }

    valor = document.getElementById("lastname").value;
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
        alert("Apellido no valido");
        return false;
    }



    valor = document.getElementById("tlf").value;
    if( !(/^\d{9}$/.test(valor)) ) {
        alert("Telefono no valido");
        return false;
    }


    var expresion = /^[a-z][\w.-]+@\w[\w.-]+\.[\w.-]*[a-z][a-z]$/i;
    var email = document.getElementById("email").value;

    if (!expresion.test(email)){
        alert("Email incorrecto");
        return false;
    }

    var p1 = document.getElementById('pas1').value;
    var p2 = document.getElementById('pas2').value;
    var espacios = false;
    var cont = 0;

    if(p1 != "" && p1 == p2) {

        while (!espacios && (cont < p1.length)) {
            if (p1.charAt(cont) == " "){
                espacios = true;
            }
            cont++;
        }
        if (espacios) {
            alert("Contraseña no valida");
            return false;
        }
    }else{

        alert("Contraseña no válida");
        return false;
    }

    indice = document.getElementById("sexo").selectedIndex;
    if( indice == null || indice == 0 ) {
        alert("Debe marcar una opcion");
        return false;
    }

    indice = document.getElementById("profesion").selectedIndex;
    if( indice == null || indice == 0 ) {
        alert("Debe marcar una opcion");
        return false;
    }
    return true;
}
