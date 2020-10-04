<?php

class EmailHelper 
{
    //Simple mail function with HTML header
    public static function send($to, $subject, $message, $from) {
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        $headers .= 'From: ' . $from . "\r\n";
        
        $result = mail($to,$subject,$message,$headers);
        
        if ($result) return 1;
        else return 0;
    }
}