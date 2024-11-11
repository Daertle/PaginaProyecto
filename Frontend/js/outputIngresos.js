async function traerIngresos() {
    const response = await fetch('../../../../BackEnd/Gestion de Usuarios/listarIngresosAnuales.php', {
        method: 'GET',
    });
    // waits until the request completes...
    const res = await response.json();
    return res;
}

traerIngresos().then(dato => {
    datoIngresos = dato;
    cargarFotoPerfil();
});

function cargarFotoPerfil() {
    $('#ingresos').text('$' + datoIngresos); 
}