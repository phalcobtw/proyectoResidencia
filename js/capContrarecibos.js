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
    document.getElementById("claveprog").value = $claveprog;
    document.getElementById("descprog").value = $descrprog;
    /* alert($claveprog); */
});
var foliotxt = document.getElementById("foliotxt");
foliotxt.addEventListener("focusout",function(){
    var numero = foliotxt.value
    let isnum = /^\d+$/.test(numero);
    if (!isnum) {
        alert("Solo utilice datos numericos en folio");
        setTimeout(function (){
            foliotxt.focus();
        }, 1);
    }
});

$(".cuentasbutton").click(function() {
    var $rowcuenta = $(this).closest("tr");    // Find the row
    var $clavecuenta = $rowcuenta.find(".cuentatd").text(); // Find the text
    var $descrcuenta = $rowcuenta.find(".descrcuentatd").text();
    var $tiporetcuenta = $rowcuenta.find(".tiporetcuentatd").text();
    document.getElementById("clavecuenta").value = $clavecuenta;
    document.getElementById("descrcuenta").value = $descrcuenta;
    document.getElementById("tiporetcuenta").value = $tiporetcuenta;
    var valor = $clavecuenta.substring(0, 4);
    /* console.log(valor); */
    if (valor === "2101" && $tiporetcuenta === "HON") {
        $("#tableIVA").show();
        $("#tableISR").show();
    }
    else if ($tiporetcuenta === "EMP" || $tiporetcuenta === "HON") {
        $("#tableIVA").show();
        $("#tableISR").hide();
        $("#claveisr").val("");
        $("#descisr").val("");
        /* alert("work"); */
    }
else{
    $("#tableIVA").hide();
    $("#claveiva").val("");
    $("#desciva").val("");
    $("#tableISR").hide();
    $("#claveisr").val("");
    $("#descisr").val("");
}
});});

var importe = document.getElementById("importeTxt");
var importeFinal = document.getElementById("importeFinal");
var spanImporte = document.getElementById("spanImporte");
var resultadoResta;
var savedRes;
importe.addEventListener("change", function () {
    var valorImporte = importe.value;
    var calculoIva = parseFloat(valorImporte)*0.16;
    spanImporte.textContent = ' IVA: $'+calculoIva.toFixed(2);
    importeFinal.value = (parseFloat(valorImporte) + parseFloat(calculoIva));
    resultadoResta = parseFloat(importeFinal.value).toFixed(4);
    savedRes = parseFloat(importeFinal.value).toFixed(4);
    /* console.log(resultadoResta); */
});

$(".gastoButton").click(function(){
    var $rowgasto = $(this).closest("tr");    // Find the row
    var $clavegasto = $rowgasto.find(".gastotd").text(); // Find the text
    var $descgasto = $rowgasto.find(".descgastotd").text();
    document.getElementById("clavegasto").value = $clavegasto;
    document.getElementById("descgasto").value = $descgasto;
    var valor = $clavegasto.substring(0,4);
    if (valor === "4800") {
        $("#tableACTIVO").show();
    }
    else{
        $("#tableACTIVO").hide();
        $("#claveactivo").val("");
        $("#descactivo").val("");
    }
});

$(".actbutton").click(function () {
    var $rowact = $(this).closest("tr");    // Find the row
    var $claveact = $rowact.find(".acttd").text(); // Find the text
    var $descact = $rowact.find(".descacttd").text();    
    document.getElementById("claveact").value = $claveact;
    document.getElementById("descact").value = $descact;
});

$(".partbutton").click(function () {
    var $rowpart = $(this).closest("tr");    // Find the row
    var $clavepart = $rowpart.find(".parttd").text(); // Find the text
    var $descpart = $rowpart.find(".descparttd").text();    
    document.getElementById("clavepart").value = $clavepart;
    document.getElementById("descpart").value = $descpart;
});

$(".depbutton").click(function () {
    var $rowdep = $(this).closest("tr");    // Find the row
    var $clavedep = $rowdep.find(".deptd").text(); // Find the text
    var $descdep = $rowdep.find(".descdeptd").text();    
    document.getElementById("clavedep").value = $clavedep;
    document.getElementById("descdep").value = $descdep;
});

$(".activoButton").click(function () {
    var $rowactivo = $(this).closest("tr");    // Find the row
    var $claveactivo = $rowactivo.find(".activotd").text(); // Find the text
    var $descactivo = $rowactivo.find(".descactivotd").text();    
    document.getElementById("claveactivo").value = $claveactivo;
    document.getElementById("descactivo").value = $descactivo;
});

$(".isrButton").click(function () {
    var $rowisr = $(this).closest("tr");    // Find the row
    var $claveisr = $rowisr.find(".isrtd").text(); // Find the text
    var $descisr = $rowisr.find(".descisrtd").text();   
    var $tiporetisr = $rowisr.find(".tiporettd").text();
    var isrTxt = document.getElementById("isrResta");
    var isrARestar = 0;
    if ($tiporetisr === "HON") {
        isrARestar = importe.value*0.10;
        resultadoResta = resultadoResta - (isrARestar);
        importeFinal.value = parseFloat(resultadoResta).toFixed(4);
        console.log('ISR: ' + isrARestar);
        console.log('Resultado: '+resultadoResta);
        isrTxt.value = isrARestar.toFixed(4);
    }
    else if ($tiporetisr === "RESP" || $tiporetisr === "RESH") {
        isrARestar = importe.value*0.0125;
        resultadoResta = resultadoResta - (isrARestar);
        importeFinal.value = parseFloat(resultadoResta).toFixed(4);
        console.log('ISR: ' + isrARestar);
        console.log('Resultado: '+resultadoResta);
        isrTxt.value = isrARestar.toFixed(4);
    }
    document.getElementById("claveisr").value = $claveisr;
    document.getElementById("descisr").value = $descisr;
});

$(".ivaButton").click(function () {
    var $rowiva = $(this).closest("tr");    // Find the row
    var $claveiva = $rowiva.find(".ivatd").text(); // Find the text
    var $desciva = $rowiva.find(".descivatd").text();   
    var $tiporet = $rowiva.find(".tiporettd").text();
    var importe = document.getElementById("importeTxt");
    var ivaTxt = document.getElementById("ivaResta");
    var ivaARestar = 0;
    if ($tiporet === "EMP" || $tiporet === "RESP") {
        ivaARestar = importe.value*0.16;
        resultadoResta = resultadoResta - (ivaARestar);
        importeFinal.value = parseFloat(resultadoResta).toFixed(4);
        console.log('IVA: ' + ivaARestar);
        console.log('Resultado: '+resultadoResta);
        ivaTxt.value = ivaARestar.toFixed(4);
    }
    else if ($tiporet === "HON" || $tiporet === "RESH") {
        ivaARestar = importe.value*0.106667;
        resultadoResta = resultadoResta - (ivaARestar);
        importeFinal.value = parseFloat(resultadoResta).toFixed(4);
        ivaTxt.value = ivaARestar.toFixed(4);
    }
    document.getElementById("claveiva").value = $claveiva;
    document.getElementById("desciva").value = $desciva;
});
$(".cuencarbutton").click(function () {
    var $rowcar = $(this).closest("tr");    // Find the row
    var $cuencar = $rowcar.find(".cuencartd").text(); // Find the text
    var $descar = $rowcar.find(".cuencardesctd").text();    
    document.getElementById("cuencar").value = $cuencar;
    document.getElementById("cuencardesc").value = $descar;
});
$(".cuenabobutton").click(function () {
    var $rowabo = $(this).closest("tr");    // Find the row
    var $cuenabo = $rowabo.find(".cuenabotd").text(); // Find the text
    var $desabo = $rowabo.find(".cuenabodesctd").text();    
    document.getElementById("cuenabo").value = $cuenabo;
    document.getElementById("cuenabodesc").value = $desabo;
});

$(".limpiarCuentas").click(function (){
     document.getElementById("clavecuenta").value = "";
     document.getElementById("descrcuenta").value = "";
     document.getElementById("tiporetcuenta").value = "";
});

$(".limpiarPrograma").click(function (){
    document.getElementById("claveprog").value = "";
    document.getElementById("descprog").value = "";
});

$(".limpiarActividad").click(function (){
    document.getElementById("claveact").value = "";
    document.getElementById("descact").value = "";
});

$(".limpiarPartida").click(function (){
    document.getElementById("clavepart").value = "";
    document.getElementById("descpart").value = "";
});

$(".limpiarDepartamento").click(function (){
    document.getElementById("clavedep").value = "";
    document.getElementById("descdep").value = "";
});

$(".limpiarGasto").click(function (){
    document.getElementById("clavegasto").value = "";
    document.getElementById("descgasto").value = "";
});

$(".limpiarIva").click(function (){
    document.getElementById("claveiva").value = "";
    document.getElementById("desciva").value = "";
    document.getElementById("ivaResta").value = "";
    resultadoResta = savedRes;
    ivaARestar = 0;
    importeFinal.value = "";
});

$(".limpiarIsr").click(function (){
    document.getElementById("claveisr").value = "";
    document.getElementById("descisr").value = "";
    document.getElementById("isrResta").value = "";
    resultadoResta = savedRes;
    isrARestar = 0;
    importeFinal.value = "";
});

$(".limpiarActivo").click(function (){
    document.getElementById("claveactivo").value = "";
    document.getElementById("descactivo").value = "";
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