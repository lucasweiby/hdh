<?php

//Variáveis
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$message = $_POST['message'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

// Compo E-mail
  $arquivo = "
  <style type='text/css'>
  body {
  margin:0px;
  font-family:Verdane;
  font-size:12px;
  color: #666;
  }
  a{
  color: #666666;
  text-decoration: none;
  }
  a:hover {
  color: #FF0000;
  text-decoration: none;
  }
  </style>
    <html>
        <table width='510' cellpadding='1' cellspacing='1'>
		      <tr>
           <td width='500'>Nome: $first_name $last_name</td>
          </tr>
          <tr>
            <td width='320'>E-mail: <b>$email</b></td>
			      </tr>
          <tr>
            <td width='320'>Mensagem: $message</td>
          </tr> 
          <tr>
            <td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
          </tr>
        </table>
    </html>
  ";

  //enviar
  
  // emails para quem será enviado o formulário
  $emailenviar = "hanadulhallyu@gmail.com";
  $destino = $emailenviar;
  $assunto = "Contato - Hana dul Hallyu";

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From:'. $first_name . '<'.$email.'>';
  
  //$headers .= "Bcc: $EmailPadrao\r\n";
  
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);

  if($enviaremail){
    echo "sent";
  } else {
    echo "error";
  }
?>