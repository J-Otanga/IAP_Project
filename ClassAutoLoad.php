<?php
require 'Plugins/PHPMailer/src/Exception.php';
require 'Plugins/PHPMailer/src/PHPMailer.php';
require 'Plugins/PHPMailer/src/SMTP.php';

require 'conf.php';

$directories = ['Layouts', 'Global', 'Forms'];

spl_autoload_register(function ($class_name) use ($directories) {
    foreach ($directories as $directory) {
        $file = __DIR__ . '/' . $directory . '/' . $class_name . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
}); 

$ObjSendMail = new SendMail();
$ObjLayout = new Layouts();
$ObjForm = new Forms();



