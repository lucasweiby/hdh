<?php 

	$to = "deboramoura@alu.ufc.br";
	$subject = "Contato Hana dul Hallyu";
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$sender = $_POST['email'];
	$message = $_POST['message'];


	$body = "<h3>Mensagem de Contato - Hana dul Hallyu</h3>";
	$body .="<h6><b>Nome: </b></h6><p>$first_name $last_name</p>";
	$body .="<h6><b>Email: </b></h6><p>$sender</p>";
	$body .="<h6><b>Mensagem: </b></h6><p>$message</p>";

	$header = "From: $sender Reply-to: $sender";
	$header .= "Content-Type: text/html; charset= utf-8";

	mail($to,$subject,$body,$header);

	header('Location: index.php);

?>