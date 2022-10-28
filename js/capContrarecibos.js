$(document).ready (function (){
$("#tableIVA").hide();
$("#tableISR").hide();
$("#tableACTIVO").hide();
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
    var valor = $clavecuenta.substring(0, 4);
    /* console.log(valor); */
    if (valor === "2101" && $tiporetcuenta === "HON") {
        $("#tableIVA").show();
        $("#tableISR").show();
    }
    else if ($tiporetcuenta === "EMP" || $tiporetcuenta === "HON") {
        $("#tableIVA").show();
        $("#tableISR").hide();    
        /* alert("work"); */
    }
else{
    $("#tableIVA").hide();
    $("#tableISR").hide();
}
});});

$(".gastoButton").click(function(){
    var $rowgasto = $(this).closest("tr");    // Find the row
    var $clavegasto = $rowgasto.find(".gastotd").text(); // Find the text
    var $descgasto = $rowgasto.find(".descgastotd").text();
    document.getElementById("clavegasto").textContent = $clavegasto;
    document.getElementById("descgasto").textContent = $descgasto;
    var valor = $clavegasto.substring(0,4);
    if (valor === "4800") {
        $("#tableACTIVO").show();
    }
    else{
        $("#tableACTIVO").hide();
    }
});

$(".actbutton").click(function () {
    var $rowact = $(this).closest("tr");    // Find the row
    var $claveact = $rowact.find(".acttd").text(); // Find the text
    var $descact = $rowact.find(".descacttd").text();    
    document.getElementById("claveact").textContent = $claveact;
    document.getElementById("descact").textContent = $descact;
});

$(".partbutton").click(function () {
    var $rowpart = $(this).closest("tr");    // Find the row
    var $clavepart = $rowpart.find(".parttd").text(); // Find the text
    var $descpart = $rowpart.find(".descparttd").text();    
    document.getElementById("clavepart").textContent = $clavepart;
    document.getElementById("descpart").textContent = $descpart;
});

$(".depbutton").click(function () {
    var $rowdep = $(this).closest("tr");    // Find the row
    var $clavedep = $rowdep.find(".deptd").text(); // Find the text
    var $descdep = $rowdep.find(".descdeptd").text();    
    document.getElementById("clavedep").textContent = $clavedep;
    document.getElementById("descdep").textContent = $descdep;
});


$(".limpiarCuentas").click(function (){
    $("#clavecuenta").text("");
    $("#descrcuenta").text("");
    $("#tiporetcuenta").text("");
});

$(".limpiarPrograma").click(function (){
    $("#claveprog").text("");
    $("#descprog").text("");
});

$(".limpiarActividad").click(function (){
    $("#claveact").text("");
    $("#descact").text("");
});

$(".limpiarPartida").click(function (){
    $("#clavepart").text("");
    $("#descpart").text("");
});

$(".limpiarDepartamento").click(function (){
    $("#clavedep").text("");
    $("#descdep").text("");
});