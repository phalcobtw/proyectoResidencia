$(".emicheqButton").click(function () {
  var $rowcheque = $(this).closest("tr");    // Find the row
  var $cuenta = $rowcheque.find(".cuencartd").text(); // Find the text
  var $banco = $rowcheque.find(".cuencardesctd").text();
  var $clave = $rowcheque.find(".cuencardesctd").text();
  var $saldo = $rowcheque.find(".cuencardesctd").text();
  document.getElementById("claveInput").value = $clave;
  document.getElementById("cuentaInput").value = $cuenta;
  document.getElementById("bancoInput").value = $banco;
  document.getElementById("saldoInput").value = $saldo;
});


$(".editarButton").click(function () {  
  var $rowchtable = $(this).closest("tr");
  var $proveedor = $rowchtable.find(".proveecheque").text();
  var $numfolio = $rowchtable.find(".numfoliocheque").text();
  document.getElementById("nochequeInput").value = $numfolio;
  document.getElementById("proveedorInput").value = $proveedor;
});

var myModal = document.getElementById('myModal');
var myInput = document.getElementById('myInput');
myModal.addEventListener('shown.bs.modal', function () {
    myInput.focus()
  })