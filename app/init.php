<?php

define('ROOT', dirname(dirname(__FILE__)));
define('APP',  ROOT.'/app/');
define('LIB',  ROOT.'/lib/');
define('MODEL', ROOT.'/app/model/');
define('DATA', ROOT.'/data/');
define('VIEW', ROOT.'/app/view');
define('CONTROLLER', '/app/controller');



/*$inc_folder = array(
    LIB.'controllers',
    LIB.'definations',
    LIB.'functions'
);

foreach ($inc_folder as $directory) {
    if (file_exists($directory)) {
        foreach (glob($directory."/*") as $filename) {
            include $filename;
        }
    }
}*/

?>
