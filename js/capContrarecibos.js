var listaSelect = document.getElementById('selector');

listaSelect.addEventListener("change",function () {
    var elemSeleccionado = listaSelect.value;
    var textF = document.getElementById('txtCuenta');
    textF.value = elemSeleccionado;
});