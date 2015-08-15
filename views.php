<?php

namespace modules\footer;
use diversen\conf;
use diversen\lang;
use diversen\template;

class views {
    
    public static function main() {
        $site = conf::getSchemeWithServerName();
        $str = lang::translate('Footer license');
        $str = <<<EOF
<small>
© $site, $str
</small>
EOF;
        template::setEndContent($str);
    }

}