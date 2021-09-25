<?php

require './vendor/autoload.php';

$phone = $_POST['phone'];
$otp = $_POST['otp'];
$message = "OTP for login in makemynotice is ".$otp;
$phone = "+91".$phone;

$params = array(
    'credentials' => array(
        'key' => 'AKIAXAYDQI6CO2T6UTVB',
        'secret' => '4I6WBNILz9M7M+h+FZzfwHiSwWsshX/ufSlPdpKE',
    ),
    'region' => 'ap-south-1', // < your aws from SNS Topic region
    'version' => 'latest'
);

$sns = new \Aws\Sns\SnsClient($params);

$args = array(
    "MessageAttributes" => [
                // You can put your senderId here. but first you have to verify the senderid by customer support of AWS then you can use your senderId.
                // If you don't have senderId then you can comment senderId 
                // 'AWS.SNS.SMS.SenderID' => [
                //     'DataType' => 'String',
                //     'StringValue' => ''
                // ],
                'AWS.SNS.SMS.SMSType' => [
                    'DataType' => 'String',
                    'StringValue' => 'Transactional'
                ]
            ],
    "Message" => $message,
    "PhoneNumber" => $phone   // Provide phone number with country code
);


$result = $sns->publish($args);

// return $result;

// var_dump($result); // You can check the response

?>