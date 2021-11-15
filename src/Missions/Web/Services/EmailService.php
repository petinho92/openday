<?php namespace Application\Missions\Web\Services;

use Application\Entity\Emailsender;

class EmailService{

    /**
     * @throws \Atomino\Carbon\ValidationError
     */
    public function create($student){
        $dictionary = [
            '{{name}}' => $student->name,
            '{{site_url}}' => 'event.mik.pte.hu',
            '{{studentQRCode}}' => $student->getQRCode(),
        ];
        $template = file_get_contents(__DIR__. '/resources/email.html');
        $content = strtr($template,$dictionary);

        $email = Emailsender::create();
        $email->toName = $student->name;
        $email->toEmail = $student->email;
        $email->toQR = $student->getQRCode();
        $email->toContent = $content;
        $email->statusSent = false;
        $email->save();
    }
}
