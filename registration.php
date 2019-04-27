<?php
if(isset($_POST['name'])){$name=$_POST['name'];}
if(isset($_POST['email'])){$email=$_POST['email'];}
if(isset($_POST['number'])){$number=$_POST['number'];}
if(isset($_POST['date'])){$date=$_POST['date'];}
$email_from='dk.jakate@gmail.com';
$email_subject="new form";
$email_body="user name:$name.\n".
               "user email:$email.\n".
                   "user number:$number.\n".
                         "user date:$date.\n";

$to="atharvjakate@gmail.com";
$headers="From:$email_from \r\n";
$headers .="Reply-To:$mail \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:registration.html");

?> 