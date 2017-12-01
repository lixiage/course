<?php

return [


    'driver' => env('MAIL_DRIVER', 'smtp'),


    'host' => env('MAIL_HOST', 'smtp.mailgun.org'),


    'port' => env('MAIL_PORT', 25),



    'from' => ['address' => '18410178071@163.com', 'name' => "发件人"],



    'encryption' => env('MAIL_ENCRYPTION', 'tls'),



    'username' => env('MAIL_USERNAME'),



    'password' => env('MAIL_PASSWORD'),



    'sendmail' => '/usr/sbin/sendmail -bs',

];
