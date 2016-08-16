<?php

namespace modules\footer;
use diversen\conf;
use diversen\lang;
use diversen\template;

class views {
    
    public static function main() {
        $site = conf::getSchemeWithServerName();
        $str = lang::translate('Footer license');
        $year = strftime("%Y");
        $str = <<<EOF
<small>
© $site, $year. $str
</small>
EOF;
        template::setEndContent($str);
    }

}