$(document).ready (function (){
$("#tableIVA").hide();
$("#tableISR").hide();
$("#tableACTIVO").hide();
$('#next').hide();
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
    document.getElementById("clavecuenta").value = $clavecuenta;
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
        $("#claveisr").text("");
        $("#descisr").text("");
        /* alert("work"); */
    }
else{
    $("#tableIVA").hide();
    $("#claveiva").text("");
    $("#desciva").text("");
    $("#tableISR").hide();
    $("#claveisr").text("");
    $("#descisr").text("");
}
});});

var importe = document.getElementById("importeTxt");
importe.addEventListener("change", function () {
    var valorImporte = importe.value;
    var importeFinal = document.getElementById("importeFinal");
    importeFinal.value = valorImporte;    
});

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
        $("#claveactivo").text("");
        $("#descactivo").text("");
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

$(".activoButton").click(function () {
    var $rowactivo = $(this).closest("tr");    // Find the row
    var $claveactivo = $rowactivo.find(".activotd").text(); // Find the text
    var $descactivo = $rowactivo.find(".descactivotd").text();    
    document.getElementById("claveactivo").textContent = $claveactivo;
    document.getElementById("descactivo").textContent = $descactivo;
});

$(".isrButton").click(function () {
    var $rowisr = $(this).closest("tr");    // Find the row
    var $claveisr = $rowisr.find(".isrtd").text(); // Find the text
    var $descisr = $rowisr.find(".descisrtd").text();    
    document.getElementById("claveisr").textContent = $claveisr;
    document.getElementById("descisr").textContent = $descisr;
});

$(".ivaButton").click(function () {
    var $rowiva = $(this).closest("tr");    // Find the row
    var $claveiva = $rowiva.find(".ivatd").text(); // Find the text
    var $desciva = $rowiva.find(".descivatd").text();    
    document.getElementById("claveiva").textContent = $claveiva;
    document.getElementById("desciva").textContent = $desciva;
});
$(".cuencarbutton").click(function () {
    var $rowcar = $(this).closest("tr");    // Find the row
    var $cuencar = $rowcar.find(".cuencartd").text(); // Find the text
    var $descar = $rowcar.find(".cuencardesctd").text();    
    document.getElementById("cuencar").textContent = $cuencar;
    document.getElementById("cuencardesc").textContent = $descar;
});
$(".cuenabobutton").click(function () {
    var $rowabo = $(this).closest("tr");    // Find the row
    var $cuenabo = $rowabo.find(".cuenabotd").text(); // Find the text
    var $desabo = $rowabo.find(".cuenabodesctd").text();    
    document.getElementById("cuenabo").textContent = $cuenabo;
    document.getElementById("cuenabodesc").textContent = $desabo;
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

$(".limpiarGasto").click(function (){
    $("#clavegasto").text("");
    $("#descgasto").text("");
});

$(".limpiarIva").click(function (){
    $("#claveiva").text("");
    $("#desciva").text("");
});

$(".limpiarIsr").click(function (){
    $("#claveisr").text("");
    $("#descisr").text("");
});

$(".limpiarActivo").click(function (){
    $("#claveactivo").text("");
    $("#descactivo").text("");
});
 $(".save").click(function () {
    $('#next').show();
    $('#hidebutton').hide();
});
$(".close").click(function () {
    $('#next').hide();
});
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')
myModal.addEventListener('shown.bs.modal', function () {
    myInput.focus()
  })