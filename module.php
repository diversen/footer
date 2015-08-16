<?php

namespace modules\footer;

use diversen\conf;
use diversen\moduleloader;

use modules\footer\views;

class module {

    public function runLevel($level){
        // run after language has been loaded
        if ($level == 7){      
            if (conf::getModuleIni('footer_enable')) {
                if ($mods = conf::getModuleIni('footer_modules')) {
                    $mods = explode(',', $mods);
                    moduleloader::$running;
                    if (!in_array(moduleloader::$running, $mods)) {
                        return;
                    }
                }
                views::main();
            }
        }
    }
}
