<?php
set_time_limit(0);

/**
 * @Author: Adnan Hussain Turki
 * @Website: www.myphpnotes.com
 * @Email Address: adnanhussainturki@gmail.com
=====================================
 * @Creation Time:   2017-03-07 23:05:56
 * @Last Modified by:   Adnan
 * @Last Modified time: 2018-10-03 02:24:33
=====================================
   PROPERTY OF WWW.MYPHPNOTES.COM
 */

$ports = [
    '80','8080',
    '81','8181',
    '82','8282',
    '83','8383',
    '84','8484',
    '85','8585',
    '86','8686',
    '87','8787',
    '88','8888',
    '89','8989',
];

foreach ($ports as $port) {
    $connection = @fsockopen('localhost', $port);
    if (!is_resource($connection))
    {
        die($port);
        return false;
    }
}

