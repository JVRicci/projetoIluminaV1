<?php
if(isset($_POST['email']) && !empty($_POST['email'])){
	
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$mensagem =  addslashes($_POST['mensagem']);

$to = "rebecahelenapantano2001@gmail.com";
$subject = "Reclamação - Problemas de iluminação";
$body = "Nome:".$nome."\r\n"."Email:".$email."\r\n"."Reclamação:".$mensagem;
$header = "From: rebecahelena78@gmail.com"."\r\n"."Reply-to:".$email."\r\n"."X=Mailer:PHP/".phpversion();
//if (mail($to,$subject,$body,$header)){
	//require_once 'enviado.html';
//}else{
	//echo("Reclamação não eviada. Tente novamente! ~ Equipe de programacão C.R.P.I");
//}
}
?>