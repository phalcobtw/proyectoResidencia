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



var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')
myModal.addEventListener('shown.bs.modal', function () {
    myInput.focus()
  })