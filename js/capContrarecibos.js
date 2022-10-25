var listaSelect = document.getElementById('selector');

listaSelect.addEventListener("change",function () {
    var elemSeleccionado = listaSelect.value;
    var textF = document.getElementById('txtCuenta');
    textF.value = elemSeleccionado;

});


//saco valores de tabla programa al hacer click en boton agregar
$(".progbutton").click(function() {
    var $rowprogra = $(this).closest("tr");    // Find the row
    var $claveprog = $rowprogra.find(".progtd").text(); // Find the text
    var $descrprog = $rowprogra.find(".progdesctd").text();
    document.getElementById("claveprog").textContent = $claveprog;
    document.getElementById("descprog").textContent = $descrprog;
    /* alert($claveprog); */
});