
<?php 
 
//Pega os dados postados pelo formulário HTML e os coloca em variaveis
if (preg_match('/hanadulhallyu.com.br$/', $_SERVER[HTTP_HOST])) {
//substitua na linha acima a aprte locaweb.com.br por seu domínio.
$email_from='hanadulhallyu@gmail.com';  // Substitua essa linha pelo seu e-mail@seudominio
}else {
$email_from = "contato@" . $_SERVER[HTTP_HOST];         
//    Na linha acima estamos forçando que o remetente seja 'webmaster@',
// você pode alterar para que o remetente seja, por exemplo, 'contato@'.
}
 
 
if( PATH_SEPARATOR ==';'){ $quebra_linha="\r\n";
 
} elseif (PATH_SEPARATOR==':'){ $quebra_linha="\n";
 
} elseif ( PATH_SEPARATOR!=';' and PATH_SEPARATOR!=':' )  {echo ('Esse script não funcionará corretamente neste servidor, a função PATH_SEPARATOR não retornou o parâmetro esperado.');
 
}
 
//pego os dados enviados pelo formulário 
  $name       = $_POST['name'];
  $categoria  = $_POST['categoria'];
  $email_rep      = $_POST['email'];
  $integ      = $_POST['integ'];

  $link       = $_POST['link'];
  $coreografo = $_POST['coreografo'];

  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');
  
  //$email = "lucas13662@gmail.com";
  $email = "deboramoura@alu.ufc.br";
  $assunto = 'Inscrição - Hana dul Hallyu';
 
$arquivo = isset($_FILES["anexo"]) ? $_FILES["anexo"] : FALSE; 
 /*
if(file_exists($arquivo["tmp_name"]) and !empty($arquivo)){ 

$fp = fopen($_FILES["anexo"]["tmp_name"],"rb"); 
$anexo = fread($fp,filesize($_FILES["anexo"]["tmp_name"])); 
$anexo = base64_encode($anexo); 
 
fclose($fp); 
 
$anexo = chunk_split($anexo); 
 
 */
$boundary = "XYZ-" . date("dmYis") . "-ZYX"; 
 
$mens = "--$boundary" . $quebra_linha . ""; 
$mens .= "Content-Transfer-Encoding: 8bits" . $quebra_linha . ""; 
$mens .= "Content-Type: text/html; charset=\"utf-8\"" . $quebra_linha . "" . $quebra_linha . ""; 
$mens .= "<br>Nome do Grupo: $name" . $quebra_linha . ""; 
$mens .= "<br>Categoria: $categoria" . $quebra_linha . ""; 
$mens .= "<br>Email do representante: $email_rep" . $quebra_linha . ""; 
$mens .= "<br>Nº de integrantes: $integ" . $quebra_linha . "";
$mens .= "<br>Link da Coreografia: $link" . $quebra_linha . ""; 
$mens .= "<br>Nome do Coreografo: $coreografo" . $quebra_linha . ""; 
$mens .= "<br>Enviado em: $data_envio às $hora_envio" . $quebra_linha . ""; 
/*$mens .= "--$boundary" . $quebra_linha . ""; 
$mens .= "Content-Type: ".$arquivo["type"]."" . $quebra_linha . ""; 
$mens .= "Content-Disposition: attachment; filename=\"".$arquivo["name"]."\"" . $quebra_linha . ""; 
$mens .= "Content-Transfer-Encoding: base64" . $quebra_linha . "" . $quebra_linha . ""; 
$mens .= "$anexo" . $quebra_linha . ""; 
$mens .= "--$boundary--" . $quebra_linha . ""; 
*/ 
$headers = "MIME-Version: 1.0" . $quebra_linha . ""; 
$headers .= "From: $email_from " . $quebra_linha . ""; 
$headers .= "Return-Path: $email_from " . $quebra_linha . ""; 
$headers .= "Content-type: multipart/mixed; boundary=\"$boundary\"" . $quebra_linha . ""; 
$headers .= "$boundary" . $quebra_linha . ""; 
 
//envio o email com o anexo 
mail($email,$assunto,$mens,$headers, "-r".$email_rep); 
 
//echo"Email enviado com Sucesso!"; 
header('Location: orcamento_enviado.php');
 
} 
 


//se nao tiver anexo 
else{ 
 
//header('Location: sem_anexo.php');
} 
 
?>