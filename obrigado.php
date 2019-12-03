<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$nome             = mb_convert_encoding($_POST['nome'], 'UTF-8');
$email            = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$telefone  = mb_convert_encoding($_POST['telefone'], 'UTF-8');
$mensagem         = mb_convert_encoding($_POST['mensagem'], 'UTF-8');

echo "<br>";
//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->CharSet = 'UTF-8';
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output

    $mail->Debugoutput = 'html';
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.varandacidadejardim.com.br    ';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'no-reply@varandacidadejardim.com.br';                 // SMTP username
    $mail->Password = 'Ot~z04V7uTr7';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;     

    //Recipients
    $mail->setFrom('no-reply@varandacidadejardim.com.br', 'Varanda');
    $mail->addAddress('leadsvaranda@gmail.com');     // Add a recipient
    $mail->addAddress('vsolai@solai.com.br');
    $mail->addAddress('vscons01@terra.com.br');
    $mail->addAddress('jota@maei.com.br');
    $mail->addAddress('renata@spicycomm.com.br');
    $mail->addAddress('no-reply@varandacidadejardim.com.br');

    $mail->addReplyTo($email, $nome);

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = '[Varanda] Nova mensagem de ' . $nome;
    $mail->Body    = '

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <table style="margin: auto; border: none; width: 600px; font-family: sans-serif;">
          <tr>
                <td style="text-align: center; background: #c6a86c; padding: 20px; color: white;">
                      <h1>Nova mensagem de ' . $nome . '</h1>
                </td>
          </tr>
          <tr>
                <td style="padding: 25px; background: #f7f7f7">
                      <table>
                            <tr>
                                  <td style="padding: 5px;"><strong>Nome</strong></td>
                                  <td style="padding: 5px;" >' . $nome . '</td>
                            </tr>
                            <tr>
                                  <td style="padding: 5px;"><strong>Email</strong></td>
                                  <td style="padding: 5px;" >' . $email . '</td>
                            </tr>
                            <tr>
                                  <td style="padding: 5px;"><strong>Telefone</strong></td>
                                  <td style="padding: 5px;" >' . $telefone . '</td>
                            </tr>
                            <tr>
                                  <td style="padding: 5px;"><strong>Mensagem</strong></td>
                                  <td style="padding: 5px;" >' . $mensagem . '</td>
                            </tr>

                      </table>
                </td>
          </tr>
    </table>
';

    //$mail->AltBody = "{$nome} disse \"{$mensagem}\". Retorne no telefone {$telefone} ou no e-mail {$email}."; 
    $mail->smtpConnect([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        ]
    ]);

    $mail->send();

?>

<!DOCTYPE html>
<html style="overflow: hidden;">
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <title>Mensagem enviada com sucesso</title>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-147096920-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-147096920-1');
</script>
<!-- Global site tag (gtag.js) - Google Ads: 711528061 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-711528061"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-711528061');
</script>


<link href="stylesheets/stylesheet.css" media="screen" rel="stylesheet" type="text/css" />

</head>
<body style="display: flex; height: 100vh; width: 100vw; justify-content: center; align-items: center; font-family: sans-serif;
        background-image: url(images/bg1.jpg);">
  <div>
    
<!-- Event snippet for Lead - Pagina de obrigado conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-711528061/7IZ9CP-A5akBEP2cpNMC'});
</script>
    <div style="text-align: center; background: #fbe2b1; padding: 3rem; color: black; margin: 1rem;">

<img src="images/logo.png" alt="Varanda Cidade Jardim" style="max-width: 200px; margin: auto; display: block;">
</div>

<div style="text-align: center; background: black; padding: 3rem; color: black; margin: 1rem;">
          <?php
              echo '<h1 style="color:white;" >Mensagem enviada com sucesso</h1>
              <p><a  style="color:white;" href="javascript:;" onclick="window.history.back();">Voltar</a></p>';
          } catch (Exception $e) {
              echo 'Erro. Favor entrar em contato direto com leadsvaranda@gmail.com . Mailer Error: ', $mail->ErrorInfo;

              echo "<br><strong>Fim do primeiro e-mail</strong><br>";
          }

          ?>
    </div>
  </div>
</body>
</html>

