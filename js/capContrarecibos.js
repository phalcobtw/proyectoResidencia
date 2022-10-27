
//saco valores de tabla programa al hacer click en boton agregar
$(".progbutton").click(function() {
    var $rowprogra = $(this).closest("tr");    // Find the row
    var $claveprog = $rowprogra.find(".progtd").text(); // Find the text
    var $descrprog = $rowprogra.find(".progdesctd").text();
    document.getElementById("claveprog").textContent = $claveprog;
    document.getElementById("descprog").textContent = $descrprog;
    /* alert($claveprog); */
});

$(".cuentasbutton").click(function() {
    var $rowcuenta = $(this).closest("tr");    // Find the row
    var $clavecuenta = $rowcuenta.find(".cuentatd").text(); // Find the text
    var $descrcuenta = $rowcuenta.find(".descrcuentatd").text();
    var $tiporetcuenta = $rowcuenta.find(".tiporetcuentatd").text();
    document.getElementById("clavecuenta").textContent = $clavecuenta;
    document.getElementById("descrcuenta").textContent = $descrcuenta;
    document.getElementById("tiporetcuenta").textContent = $tiporetcuenta;
});