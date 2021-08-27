<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "siddhikate05@gmail.com";
$subject = "Product Enquiry";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: siddhikate05@gmail.com" . "\r\n" .
"CC: katesiddhi313@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyouS.html");
?>