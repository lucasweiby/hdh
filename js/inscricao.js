$(document).ready( function(){ //Quando documento estiver pronto
    $('#enviar').click( function(){ /* Quando clicar em #btn */
        /* Coletando dados */
        var nome  = $('#nome').val();
        var categoria  = $('#categoria').val();
        var nome_rep = $('#nome_rep').val();
        var email_rep = $('#email_rep').val();
        var n_integ   = $('#n_integ').val();

        var integrantes = "";
        for (var i = 1; i <= n_integ; i++) {
            var nome = $('#nome_integ'+i).val();
            var numero = $('#n_integ'+i).val();
            integrantes += "&nome_integ"+i+"="+nome+"&n_integ"+i+"="+numero;
        }

        var link_arq = $('#link_arq').val();
        var link = $('#link').val();
        var coreografo = $('#coreografo').val();        
 
        /* construindo url */
        var urlData = "&nome=" + nome +
        "&categoria=" + categoria + 
        "&nome_rep=" + nome_rep +
        "&email_rep=" + email_rep +
        "&n_integ=" + n_integ +
        integrantes + "&link_arq=" + link_arq +
        "&link=" + link +
        "&coreografo=" + coreografo;
 
        /* Ajax */
        $.ajax({
             type: "POST",
             url: "send_insc.php", /* endereço do script PHP */
             async: true,
             data: urlData, /* informa Url */
             success: function(data) { /* sucesso */
                $('#modal2').modal('open');
             },
             beforeSend: function() { /* antes de enviar */
                 $('.progress').fadeIn('fast'); 
             },
             complete: function(){ /* completo */
                 $('.progress').fadeOut('fast'); //wow!
             }
         });
    });
});