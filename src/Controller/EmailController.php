<?php
    namespace App\Controller;

    use App\Controller\AppController;    
    use Cake\Mailer\Mailer;

    class EmailController extends AppController{
        
        public function enviar(){
            $mailer = new Mailer('default');
            $mailer->setSender('eyberth96@gmail.com');
            $mailer->setFrom(['eyberth96@gmail.com' => 'My Site'])
                ->setTo('emacedop@unsa.edu.pe')
                ->setSubject('Bienvenida')
                ->deliver('Bienvenido a nuestro sitio');
        }
    }
