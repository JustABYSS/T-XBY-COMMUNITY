<?php
if (isset($_POST['submit'])) {
    $usermail = $_REQUEST['username'];
    $emailadress = $_REQUEST['email'];
    $message = $_REQUEST["message"];

    $to = "";
    $subject = "My Test Mail";
    $txt = "Hello";
    $headers = "From " + $usermail + " quiere contactarse: su correo -->" + $emailadress;

    mail($to, $subject, $message, $headers);
}
?>