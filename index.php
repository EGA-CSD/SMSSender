<?php
    require_once("sms.php");
    
    $user="01020300000@ega.or.th";
    $pass="ADFG!@#";

    //Test sending OTP
    $sender = sms::init();
    $response = $sender->sendSMS("66817264466","user: ".$user."  pass: ".$pass." ", true);
    echo "<pre>Response: $response </pre></br></br>";
?>