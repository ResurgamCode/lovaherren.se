<?php

file_put_contents('./orders/' . date('m-d-Y_his'), json_encode($_POST));

use PHPMailer\PHPMailer\PHPMailer;

require_once './vendor/autoload.php';
// create a new object
$mail = new PHPMailer();
// configure an SMTP
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'lovaherren@gmail.com';
$mail->Password = 'sUqva4q4yVZeFqd1ae';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->CharSet = 'UTF-8';


$mail->setFrom('lovaherren@gmail.com', 'Lova Herren');
$mail->addAddress($_POST['email'], $_POST['name']);
$mail->addBCC('mail@danielk.se');
$mail->addBCC('info@bvforlag.se');
$mail->Subject = "=?utf-8?B?" . base64_encode('Tack för din beställning') . "?=";
// Set HTML 
$mail->isHTML(FALSE);
$body = "Hej " . $_POST['name'] . "!

Tack för din beställning av Lova Herren.

Du har beställt följande:\n";

if ($_POST['lillafamiljepaketet'] > 0) {
    $body .= $_POST['lillafamiljepaketet'] . ' st Lilla familjepaketet
';
}
if ($_POST['storafamiljepaketet'] > 0) {
    $body .= $_POST['storafamiljepaketet'] . ' st Stora familjepaketet
';
}
if ($_POST['lillaforeningspaketet'] > 0) {
    $body .= $_POST['lillaforeningspaketet'] . ' st Lilla föreningspaketet
';
}
if ($_POST['storaforeningspaketet'] > 0) {
    $body .= $_POST['storaforeningspaketet'] . ' st Stora föreningspaketet
';
}
if ($_POST['sangbok'] > 0) {
    $body .= $_POST['sangbok'] . ' st Sångbok
';
}
if ($_POST['sangboklader'] > 0) {
    $body .= $_POST['sangboklader'] . ' st Sångbok läder
';
}
if ($_POST['notbok'] > 0) {
    $body .= $_POST['notbok'] . ' st Notbok
';
}

$body .= "

Din beställning kommer att skickas till:
" . $_POST['adress1'] . "
" . $_POST['adress2'] . " " . $_POST['adress3'] . "

Dina kontaktuppgifter är:
" . $_POST['email'] . "
" . $_POST['phone'] . "

Det här mailet går inte att svara på men du kan kontakta oss på info@bvforlag.se

Frid,
BV-Förlag
";

$mail->Body = $body;

?>

<html>
<?php include("headmeta.php"); ?>

<body>
    <?php include("header.php"); ?>
    <div id="content">
        <div id="content-inner">
            <?php
            $sent = $mail->send();
            if (!$sent) {
                echo 'Tyvärr kunde din beställning inte skickas. Vänligen kontakta info@bvforlag.se för att lägga din beställning.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            }
            if ($sent) :
            ?>
                <h1>Tack för din beställning!</h1>
            <?php endif ?>
        </div>
    </div>
</body>

</html>