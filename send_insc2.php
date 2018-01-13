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
  //$emailenviar = "lucas13662@gmail.com";
  $emailenviar = "deboramoura@alu.ufc.br";
  $destino = $emailenviar;
  $assunto = "Inscrição - Hana dul Hallyu";

  //ARQUIVO -------------------------------------------

  $boundary = "XYZ-".md5(date("dmYis"))."-ZYX";
  // Arquivo enviado via formulário
  $path = $_FILES['anexo']['tmp_name']; 
  $fileType = $_FILES['anexo']['type']; 
  $fileName = $_FILES['anexo']['name']; 

  // Pegando o conteúdo do arquivo
  $fp = fopen( $path, "rb" ); // abre o arquivo enviado
  $anexo = fread( $fp, filesize( $path ) ); // calcula o tamanho
  $anexo = chunk_split(base64_encode( $anexo )); // codifica o anexo em base 64
  fclose( $fp ); // fecha o arquivo


  $headers = "MIME-Version: 1.0" . PHP_EOL;
  $headers .= "Content-Type: multipart/mixed; ";
  $headers .= 'From:'. $first_name . '<'.$email.'>';
  $headers .= "boundary=" . $boundary . PHP_EOL;
  $headers .= "$boundary" . PHP_EOL;

  $mensagem  = "--$boundary" . PHP_EOL;
  $mensagem .= "Content-Type: text/html; charset='utf-8'" . PHP_EOL;
  $mensagem .= "UM TEXTO ALEATORIO QUALQUER"; // Adicione aqui sua mensagem
  $mensagem .= "--$boundary" . PHP_EOL;

  $mensagem .= "Content-Type: ". $fileType ."; name=\"". $fileName . "\"" . PHP_EOL;
  $mensagem .= "Content-Transfer-Encoding: base64" . PHP_EOL;
  $mensagem .= "Content-Disposition: attachment; filename=\"". $fileName . "\"" . PHP_EOL;
  $mensagem .= "$anexo" . PHP_EOL;
  $mensagem .= "--$boundary" . PHP_EOL;

  //ARQUIVO FIM-------------------------------------------
  
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo "$msg";
  //echo " <meta http-equiv='refresh' content='10;URL=index.php#contact'>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "$msg";
  //echo "";
  }
?>