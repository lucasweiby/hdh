<?php

//Variáveis
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$email_rep = $_POST['email_rep'];
$n_integ = $_POST['n_integ'];

for ($i = 1; $i <= $n_integ; $i++) { 
  $integrantes[$_POST['nome_integ'. $i]] = $_POST['n_integ'. $i];

}
$link_arq = $_POST['link_arq'];
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
           <td width='500'>Nome do grupo: $nome</td>
          </tr>
          <tr>
           <td width='500'>Categoria: $categoria</td>
          </tr>
          <tr>
            <td width='320'>E-mail do representante: <b>$email_rep</b></td>
          </tr>
          <tr>
            <td width='320'>Qnt. de integrantes: <b>$n_integ</b></td>
          </tr>
          <tr>
            <td width='320'>Dados dos integrantes:
              <ol>";


            foreach ($integrantes as $nome => $numero) {
              $arquivo .= "<li>Nome: $nome_integ | Nº documento: $numero </li>";
            }

  $arquivo .= "</ol>
            </td>
          </tr>
          <tr>
            <td width='320'>Link dos arquivos: <b>$link_arq</b></td>
          </tr>
          <tr>
            <td width='320'>Link do vídeo: <b>$link</b></td>
          </tr>
          <tr>
            <td width='320'>Coreografo: <b>$coreografo</b></td>
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
  $assunto = "Inscrição - Hana dul Hallyu";

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From:'. $nome . '<'.$email_rep.'>';
  
  //$headers .= "Bcc: $EmailPadrao\r\n";
  
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);

  if($enviaremail){
    $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
    echo " <meta http-equiv='refresh' content='10;URL=inscricao.php#enviado'>";
  } else {
    $mgm = "ERRO AO ENVIAR E-MAIL!";
    echo "ERRO";
  }
?>