<?php 

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['textarea'];

    $mailTo = 'madykane01@gmail.com';
    $headers = "From: ".$email;
    $output = "You have recieved an e-mail from". $name. ".\n\n".¤message;


    mail($mailTo, $output, $beaders);
    header("Location: index.html?mailsend");
}