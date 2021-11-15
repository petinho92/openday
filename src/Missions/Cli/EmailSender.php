<?php namespace Application\Missions\Cli;

use Atomino\Carbon\Database\Finder\Filter;
use Atomino\Core\Cli\Attributes\Command;
use Atomino\Core\Cli\CliCommand;
use Atomino\Core\Cli\CliModule;
use Atomino\Core\Cli\Style;
use PHPMailer\PHPMailer\PHPMailer;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\Console\Output\Output;
use function Atomino\debug;

class EmailSender extends CliModule
{

    #[Command('email')]
    public function sendEmail(CliCommand $command){
        $command->define(function (Input $input, Output $output, Style $style) {
            $file = 'working.txt';

            if(!is_file($file)){
                try{
                    file_put_contents($file, "");
                    $data = \Application\Entity\Emailsender::search(Filter::where(\Application\Entity\Emailsender::statusSent(false)))->collect();
                    $mail = new PHPMailer(true);
                    $mail->isSMTP();
                    $mail->isHTML();
                    $mail->SMTPDebug = 0;
                    $mail->SMTPOptions = array(
                      'ssl' => array(
                          'verify_peer' => false,
                          'verify_peer_name' => false,
                          'allow_self_signed' => true
                      )
                    );
                    $mail->Host = gethostbyname('smtp.mik.pte.hu');
                    $mail->Port = 25;
                    $mail->SMTPAuth = false;
                    $mail->SMTPAutoTLS = false;
                    $mail->CharSet = 'UTF-8';

                    foreach ($data as $email){
                        $mail->clearAddresses();;
//                        $mail->addAddress($email->toEmail, $email->toName);
                        $mail->addAddress('petinho92@gmail.com', $email->toName);
                        $mail->msgHTML($email->toContent);
                        $mail->setFrom('noreply@mik.pte.hu');
                        $mail->Subject = 'MIK Nyílt Nap Regisztráció';
                        $mail->AltBody = 'MIK Nyílt Nap Regisztráció';

                        if(!$mail->send()){
                            debug('Mailer Error: ' . $mail->ErrorInfo);
                            file_put_contents('logmail00112233.txt', $mail->ErrorInfo, FILE_APPEND | LOCK_EX);
                        }else{
                            debug('Message sent!');
                            $mail->smtpClose();
                            $email->statusSent = true;
                            $email->sentTime = new \DateTime();
                            $email->save();
                        }
                    }
                }catch (\Exception $e){
                    debug($e);
                } finally {
                    unlink($file);
                }

            }
        });
    }
}
