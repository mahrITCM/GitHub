function alerts() {
    alert("Opcion en desarrollo...");
}

function isEmpty() {
    nombre = Request.nombre;
    apellido = Request.apellido;
    alert(String(nombre) + ' ' + String(apellido));
}

function obtenerFecha() {
    var fecha = new Date();
    var dia = fecha.getDate();
    var mes = fecha.getMonth();
    var año = fecha.getFullYear().toString().slice(-2);

    concatenarFechas(dia, mes); 
    fecha_actual = dia +  '-' + mes + '-' + año;
    document.getElementById("max").value = f;
}

function concatenarFechas(dia, mes) {
    if(dia < 10) {
        dia = '0' + dia; 
    }

    if(mes < 10) {
        mes = '0' + mes;
    }
}

function deshabilitaRetroceso(){
    window.location.hash="no-back-button";
    window.location.hash="Again-No-back-button" //chrome
    window.onhashchange=function(){window.location.hash="";}
}