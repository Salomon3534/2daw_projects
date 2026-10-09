<?php

class SystemIO {
    public function ask(string $msg) {
        echo $msg;
        echo PHP_EOL;
        
        return (fgets(STDIN));
    }

}

?>