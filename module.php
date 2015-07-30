<?php

use diversen\conf;
use diversen\moduleloader;

class footer {

    public function runLevel($level){
        // run after language has been loaded
        if ($level == 7){      
            if (conf::getModuleIni('footer_enable')) {
                if ($mods = conf::getModuleIni('footer_modules')) {
                    $mods = explode(',', $mods);
                    if (!in_array(moduleloader::$running, $mods)) {
                        return;
                    }
                }
                footer_views::main();
            }
        }
    }
}
