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
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'NOVO EMAIL';                 // SMTP username
    $mail->Password = 'SENHA';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;     

    //Recipients
    $mail->setFrom('NOVO EMAIL', 'Varandas');
    $mail->addAddress('NOVO EMAIL');     // Add a recipient
    $mail->addAddress('VSOLAI@SOLAI.COM.BR');
    $mail->addAddress('vscons01@terra.com.br');
    $mail->addAddress('RENATA@SPICYCOMM.COM.BR');

    $mail->addReplyTo($email, $nome);

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = '[Varandas] Nova mensagem de ' . $nome;
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


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*

    
     $mail = new PHPMailer(true);   

        //Server settings
        $mail->CharSet = 'UTF-8';
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'linkinvilamariana@gmail.com';                 // SMTP username
        $mail->Password = 're520741';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        //Recipients
        $mail->setFrom('linkinvilamariana@gmail.com', 'LinkIn Webmaster');
        $mail->addAddress($email);     // Add a recipient
        $mail->addReplyTo('linkinvilamariana@gmail.com', 'LinkIn');

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = '[LinkIn] Mensagem recebida';
        $mail->Body    = '

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <table style="margin: auto; border: none; width: 500px; font-family: sans-serif;">
              <tr>
                    <td>
                        <img src="http://linkinvilamariana.com.br/emkt/emkt.jpg" alt="LinkIn | Logo você receberá informações em primeira mão, aguarde!" style="width: 100%;">
                    </td>
              </tr>
        </table>
    ';

        $mail->AltBody = "Logo você receberá informações em primeira mão, aguarde!"; 

        $mail->send();


        

?>

<!DOCTYPE html>
<html style="overflow: hidden;">
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <title>Mensagem enviada com sucesso</title>

<!-- Global site tag (gtag.js) - Google Ads: 718955585 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-718955585"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-718955585');
</script>



<!-- Event snippet for Lead - pagina de obrigado conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-718955585/O99SCJ-RmKgBEMHI6dYC'});
</script>

</head>
<body style="display: flex; height: 100vh; width: 100vw; justify-content: center; align-items: center; font-family: sans-serif;">
  <div>
    
    <img src="images/logo-linkin.png" style="margin: auto; display: block; padding: 1rem; max-width: 90vw;">
    <div style="text-align: center; background: #ff8302; padding: 3rem; color: white; margin: 1rem;">
          <?php
              echo '<h1>Mensagem enviada com sucesso</h1>
              <p>Estamos nos conectando com você!</p><p><a href="javascript:;" onclick="window.history.back();">Voltar</a></p>';
          } catch (Exception $e) {
              echo 'Erro. Favor entrar em contato direto com linkinvilamariana@gmail.com . Mailer Error: ', $mail->ErrorInfo;

              echo "<br><strong>Fim do primeiro e-mail</strong><br>";
          }

          ?>
    </div>
  </div>
</body>
</html>

