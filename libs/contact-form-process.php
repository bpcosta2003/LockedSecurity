<?php

$errorMSG = "";

$name    = $_POST["name"];
$email   = $_POST["email"];
$company = $_POST["company"];
$phone   = $_POST["phone"];
$message = $_POST["message"];

// NAME
if (empty($name)) {
    $errorMSG = "Name is required ";
}

// EMAIL
if (empty($email)) {
    $errorMSG .= "Email is required ";
}

// COMPANY
if (empty($company)) {
    $errorMSG .= "Company is required ";
}

// PHONE
if (empty($phone)) {
    $errorMSG .= "Phone is required ";
}

// MESSAGE
if (empty($message)) {
    $errorMSG .= "Message is required ";
}

// change email with your email
$EmailTo = "hellothemetags@gmail.com";
$Subject = "AgencyCo:: New Message Received from Contact Form";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Comapny: ";
$Body .= $company;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

