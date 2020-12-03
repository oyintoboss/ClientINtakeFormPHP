<?php
    switch($_SERVER['SERVER_NAME']) {

        case 'localhost':
            include(__DIR__.'/config.localhost.php');
            break;

        default:
            include('config.production.php');
            break;
    }

    define('PERCH_LICENSE_KEY', 'R3-LOCAL-JNX201-LPB130-TGB027');
    define('PERCH_EMAIL_FROM', 'isreal.oyinloye11@gmail.com');
    define('PERCH_EMAIL_FROM_NAME', 'ISREAL OYINLOYE');

    define('PERCH_LOGINPATH', '/ncif/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
    define('PERCH_TZ', 'UTC');