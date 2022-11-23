$(".bancoButton").click(function () { 
    var $rowbanco = $(this).closest("tr");
    var $clave = $rowbanco.find(".cuenbantd").text();
    var $descban = $rowbanco.find(".cuenbandesctd").text();
    document.getElementById("clavebanco").value = $clave;
    document.getElementById("nombrebanco").value = $descban;
});