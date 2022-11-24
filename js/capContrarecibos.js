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
foliotxt.addEventListener("change",function(){
    var numero = foliotxt.value
    let isnum = /^\d+$/.test(numero);
    if (isnum) {
        
    } else {
        alert("Solo utilice datos numericos en folio");
        foliotxt.focus();
    }
})

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
var resultadoResta = importe.value;
importe.addEventListener("change", function () {
    var valorImporte = importe.value;
    var importeFinal = document.getElementById("importeFinal");
    importeFinal.value = valorImporte;  
    resultadoResta = importe.value;
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
    if ($tiporet === "EMP") {
        /* ivaARestar = ((parseInt(importe.value))*0.16); */
        ivaARestar = (importe.value/116)*16;
        /* console.log(ivaARestar); */
        resultadoResta = resultadoResta - (ivaARestar);
        /* console.log(resultadoResta); */
        importeFinal.value = resultadoResta;
        ivaTxt.value = ivaARestar;
    }
    else if ($tiporet === "HON") {
        /* ivaARestar = ((parseInt(importe.value))*0.16); */
        ivaARestar = (importe.value/110.6667)*10.6667;
        console.log(ivaARestar.toFixed(4));
        resultadoResta = resultadoResta - (ivaARestar);
        console.log(resultadoResta.toFixed(4));
        importeFinal.value = resultadoResta.toFixed(4);
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
    resultadoResta = importe.value;
    ivaARestar = 0;
});

$(".limpiarIsr").click(function (){
    document.getElementById("claveisr").value = "";
    document.getElementById("descisr").value = "";
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