<?php

//Variáveis
$name = $_POST['name'];
$categoria = $_POST['categoria'];
$email = $_POST['email'];
$integ = $_POST['integ'];
$link = $_POST['link'];
$coreografo = $_POST['coreografo'];
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
           <td width='500'>Nome: $name</td>
          </tr>
          <tr>
            <td width='320'>E-mail: <b>$email</b></td>
			      </tr>
          <tr>
            <td width='320'>Categoria: $categoria</td>
          </tr> 
          <tr>
            <td width='320'>Categoria: $categoria</td>
          </tr>
          <tr>
            <td width='320'>Integrantes: $integrantes</td>
          </tr>
          <tr>
            <td width='320'>Link: $link</td>
          </tr>
          <tr>
            <td width='320'>Coreógrafo: $coreografo</td>
          </tr>
          <tr>
            <td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
          </tr>
        </table>
    </html>
  ";

  //enviar
  
  // emails para quem será enviado o formulário
  $emailenviar = "lucas13662@gmail.com";
  $destino = $emailenviar;
  $assunto = "Contato - Hana dul Hallyu";

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From:'. $first_name . '<'.$email.'>';
  
  //$headers .= "Bcc: $EmailPadrao\r\n";
  
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo " <meta http-equiv='refresh' content='10;URL=index.php#contact'>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }
?>