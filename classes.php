<?php

class HelloWorld {
    public function greet() {
        return "Hello, ICS!";
    }

    public function today() {
        return "<h1>Today is " . date("l") . "</h1>";
    }

    }
$hello = new HelloWorld();

print $hello ->greet();
print $hello->today();



?>