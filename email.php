<?php
    if(isset($_POST['g-recaptcha-response'])&& $_POST['g-recaptcha-response']){
        var_dump($_POST);
        $secret = "6LdI5LQUAAAAAO84I8fNEVIBchWaDLn4bCDDDrzp";
        $ip = $_SERVER['REMOTE_ADDR'];
        $captcha = $_POST['g-recaptcha-response'];
        $rsp  = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
        var_dump($rsp);
        $arr = json_decode($rsp,TRUE);
        if($arr['success']){
            echo 'Done';
        }else{
            echo 'SPam';
        }
        
    }
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message']; 

?>