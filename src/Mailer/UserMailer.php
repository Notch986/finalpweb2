<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;

$mailer = new Mailer('default');
$mailer->setFrom(['me@example.com' => 'My Site'])
    ->setTo('eyberth96@gmail.com')
    ->setSubject('About')
    ->deliver('My message');
?>
