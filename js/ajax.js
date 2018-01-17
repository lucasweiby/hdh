$(document).ready( function(){ //Quando documento estiver pronto
    $('#enviar').click( function(){ /* Quando clicar em #btn */
        /* Coletando dados */
        var first_name  = $('#first_name').val();
        var last_name  = $('#last_name').val();
        var email = $('#email').val();
        var message   = $('#message').val();
 
        /* construindo url */
        var urlData = "&first_name=" + first_name +
        "&last_name=" + last_name +
        "&email=" + email +
        "&message=" + message ;
 
        /* Ajax */
        $.ajax({
             type: "POST",
             url: "send_email.php", /* endereço do script PHP */
             async: true,
             data: urlData, /* informa Url */
             success: function(data) { /* sucesso */
                $('#modal-contato').modal('open');
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