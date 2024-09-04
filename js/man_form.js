function Habilitar() {
    const x = document.forms["cadastropag"];
    for (i = 0; i < x.length; i++) {
        x.elements[i].disabled = false;
    }
}

function Desabilitar() {
    const x = document.forms["cadastropag"];

    for (i = 0; i < x.length; i++) {
        x.elements[i].disabled = true;
    }
}
function validarcheck(){
    const checkbox = document.getElementById("termo");
    const isChecked = checkbox.checked;
    if(isChecked){
        document.getElementById("enviar").disabled = false;
    }else{
        document.getElementById("enviar").disabled = true;
    }
}
function usuario_existe(){
    var cpf = document.getElementById("cpfInput").value;
    $.ajax({
        url: 'verifica_cpf.php',
        method:'POST',
        data:{cpf:cpf},

    })
}


