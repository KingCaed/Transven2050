<?php
// if(empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
//   http_response_code(500);
//   exit();
// }

// $name = strip_tags(htmlspecialchars($_POST['name']));
// $email = strip_tags(htmlspecialchars($_POST['email']));
// $m_subject = strip_tags(htmlspecialchars($_POST['subject']));
// $message = strip_tags(htmlspecialchars($_POST['message']));

// $to = "gabrieldasilva8542@gmail.com"; // Change this email to your //
// $subject = "$m_subject:  $name";
// $body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\n\nEmail: $email\n\nSubject: $m_subject\n\nMessage: $message";
// $header = "From: $email";
// $header .= "Reply-To: $email";	

// if(!mail($to, $subject, $body, $header))
//   http_response_code(500);

if (isset($_POST ['send'])) {
  if (!empty($_POST ['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
    $name = $_POST ['name'];
    $email = $_POST ['email'];
    $subject = $_POST ['subject'];
    $message = $_POST ['message'];

    $header = "From: gabrieldasilva8542@gmail.com" . "\r\n";
    $header.= "Reply-To: gabrieldasilva8542@gmail.com" . "\r\n";
    $header.= "X-Mailer: PHP/". phpversion();
    $mail = mail($email, $subject, $message, $header);
    if ($mail) {
      echo "<h2> Email enviado exitosamente</h2>";
      header("../contact.html");
    } else {

    }
  }
}


?>
