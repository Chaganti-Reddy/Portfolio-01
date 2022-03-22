<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['phone'];
$message= $_POST['message'];
$to = "chagantivenkataramireddy1@mail.com";
$subject = $_POST['subject'];
$txt ="Name : ". $name . "\r\n  Email : " . $email . "\r\n  Phone Number : " . $number . "\r\n Message :" . $message;
$headers = "From: ". $email;
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

?>
