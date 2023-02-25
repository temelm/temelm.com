<?php
  $response = 'error';

  if (isset($_POST)) {
    $data = file_get_contents('php://input');
    $data = json_decode($data);

    $name = $data->{'name'};
    $email = $data->{'email'};
    $company = $data->{'company'};
    $message = $data->{'message'};

    if (!empty($name) && !empty($email) && !empty($message)) {
      $to = 'mustafatemel90@gmail.com';
      $subject = 'Message from '.$name.' via www.temelm.com';
      $message = wordwrap($message, 100, "\r\n");
      $headers = 'From: '.$email."\r\n";
      $headers .= 'Reply-To: '.$email."\r\n";

      $isSent = mail($to, $subject, $message, $headers);

      if ($isSent) {
        $response = 'success';
      }
    }
  }

  echo $response;
?>