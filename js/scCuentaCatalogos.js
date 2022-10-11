var cuenta = document.getElementById("cuenta");

cuenta.addEventListener("change", function(){
    var valor = cuenta.value;
    valor = valor.substring(0, 4);
    var natsaldo = document.getElementById("natsaldo");
    if (valor === "2101" || valor === "2102") {
        natsaldo.value = "A";
    }
    else if (valor === "1103" || valor === "1104") {
        natsaldo.value = "D";
    }

})