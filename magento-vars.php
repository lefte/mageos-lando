<?php
// enable, adjust and copy this code for each store you run
// Store #0, default one

//Local Domains used by Lando
if (isHttpHost('mageos.lndo.site')) {
    $_SERVER['MAGE_RUN_CODE'] = 'default';
    $_SERVER['MAGE_RUN_TYPE'] = 'store';
}


function isHttpHost($host)
{
    if (!isset($_SERVER['HTTP_HOST'])) {
        return false;
    }
    return $_SERVER['HTTP_HOST'] ===  $host;
}
