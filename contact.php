<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$content = $_POST['message'];
// $message ="Name: $name\n Email: $email\n Number: $number\n".$_POST['message'];


$message = "
<html>
<head>
<title> $name Contact Information </title>
<style> 
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}

</style>
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


// $recipient ="will.james97@outlook.com"; 
$recipient ="marissa87@hotmail.ca";
$subject ="Contact Info from a client";
$mailheader .= "MIME-Version: 1.0" . "\r\n";
$mailheader .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$mailheader .= "X-Priority: 3\r\n";
$mailheader .= "X-Mailer: PHP". phpversion() ."\r\n" ;
$mailheader .="From: $email \r\n";

if (
mail($recipient, $subject, $message, $mailheader)
)
	
	header("Location: http://marissaspetcare.com/index.html");
	echo"<script>alert('Thank you $name for taking the time to contact me!')</script>";
    die();   

?>
