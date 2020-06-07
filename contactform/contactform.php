<?php
date_default_timezone_set("Asia/Kolkata");
    if(isset($_POST)){
        //print_r($_POST);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $subject = $_POST['subject'];
        $message  = $_POST['message'];
        $today = date("Ymd-Hms");
        $today = "messages/".$today.".txt";
        $text = "Name : {$name} \n
                 Email : {$email} \n
                 Mobile : {$mobile} \n
                 Subject : {$subject} \n
                 Message : {$message}\n";

                 $myfile = fopen($today, "w") or die("Unable to open file!");
                 fwrite($myfile, $text);
                 fclose($myfile);
        echo"OK";
    }
?>