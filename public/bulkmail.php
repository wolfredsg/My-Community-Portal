<?php
require_once '../PHPMailer/PHPMailerAutoload.php';
$subject = $_POST['subject'];
$mailmessage = $_POST['mailmessage'];
$mail = new PHPMailer();
//$mail->SMTPDebug = 3;
$mail->setFrom('willpajayat@gmail.com', 'Admin');
//$mail->addAddress('wmp417@yahoo.com', 'User1');
$mail->Subject = $subject;
$mail->isHTML(TRUE);
$mail->Body = nl2br($mailmessage);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = TRUE;

$mail->Username = 'willpajayat@gmail.com';
$mail->Password = 'm1ssy&me@ph';

$con=mysqli_connect("localhost","root","w1llyp0g1@sg","abc");
$sql="select email, firstname from tb_user where is_subscribed='1'";

$result=$con->query($sql);
foreach($result as $row)
{
    $mail->addAddress($row["email"],$row["firstname"]);
}

if (!$mail->send())
{
    $message =  "Error: " . $mail->ErrorInfo;
}
else
{
    $message = "Message sent successfully.";
}

//Connect to the database
//Create row. Send email
// Subscribe and Unsubscribe users

