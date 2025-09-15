<?php
require 'ClassAutoLoad.php';

 print $layout->header($conf);
    
    $form->signup();
    print $layout->footer($conf);


?>