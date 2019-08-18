

    function pagamento_boleto(){
    var endereco = jQuery('.endereco').attr("data-endereco");
    $.ajax({
        url: endereco + "pagamento.php",
        type: 'POST',
        dataType: 'json',
        success: function (retorno){
            //console.log(retorno);
            PagSeguroDirectPayment.setSessionId(retorno.id);
        },
        complete: function (retorno){
        listarMeiosPag();
         }

    });
}


function listarMeiosPag(){
    PagSeguroDirectPayment.getPaymentMethods({
        amount: 500.00,
        success: function(retorno) {
            console.log(retorno);
        },
        error: function(retorno) {
            // Callback para chamadas que falharam.
        },
        complete: function(retorno) {
            // Callback para todas chamadas.
        }
    });
}
