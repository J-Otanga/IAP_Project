<?php
require 'ClassAutolad.php';




$form->signIn();
print $hello->today();
print $layout->header($conf);
print $layout->footer($conf);
?>