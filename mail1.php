<?php
$to = "will.james97@outlook.com";
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$content = $_POST['message'];
$subject = "Contact Info from a client";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<table>
<tr>
<td>Name: $name </td>
</tr>
<tr>
<td>Email: $email </td>
</tr>
<tr>
<td>Phone Number: $number</td>
</tr>
<tr>
<td>Message: $content </td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>


