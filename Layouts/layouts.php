<?php
class layouts {
    public function header($conf) {
        return "<h1>Welcome to " . $conf['site_name'] . "</h1>";
    }

    public function footer($conf) {
        return "<footer><p>&copy; " . date("Y") . " " . $conf['site_name'] . ". All rights reserved.</p></footer>";
    }

}

?>