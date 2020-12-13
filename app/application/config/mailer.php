<?php defined('SYSPATH') or die('No direct script access.');

return array(
    // Sending method: smtp or mail
    'mode'  => 'smtp',

    /*
    // SMTP settings
    'smtp' => array(
        'host'      => 'smtp.mail.ru',
        'port'      => 465,
        'username'  => 'passwordrecovery.from.med4share@mail.ru',
        'password'  => 'Sop19#Tuk',
    ),

    // Sender
    'from' => array(
        'mail' => 'passwordrecovery.from.med4share@mail.ru',
        'name' => 'Сайт med4share.ru',
    ),*/
    
    
    // SMTP settings
    'smtp' => array(
        'host'      => 'smtp.mastermail.ru',
        'port'      => 2525,
        'username'  => 'passwordrecovery@med4share.ru',
        'password'  => 'w9rriststring',
    ),

    // Sender
    'from' => array(
        'mail' => 'passwordrecovery@med4share.ru',
        'name' => 'Сайт med4share.ru',
    ),
    
    
);
 