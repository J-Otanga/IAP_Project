<?php
require 'ClassAutoLoad.php';
$ObjSendMail = new SendMail();

$mailCnt = [
    'name_from' => 'Monica Joy',
    'mail_from' => 'joy.otanga@strathmore.edu',
    'name_to' => 'Furaha',
    'mail_to' => 'furahaotanga@gmail.com',
    'subject' => 'Hello From ICS B',
    'body' => 'Welcome to ICS B! <br> This is a new semester. Let\'s have fun together.'
];

$ObjSendMail->Send_Mail($conf, $mailCnt);
?>