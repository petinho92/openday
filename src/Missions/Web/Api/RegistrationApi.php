<?php namespace Application\Missions\Web\Api;

use Application\Missions\Web\Services\EmailService;
use Application\Missions\Web\Services\GuestService;
use Application\Missions\Web\Services\StudentService;
use Atomino\Carbon\ValidationError;
use Atomino\Mercury\Responder\Api\Api;
use Atomino\Mercury\Responder\Api\Attributes\Route;

class RegistrationApi extends Api
{
    public function __construct(private StudentService $studentService, private GuestService $guestService, private EmailService $emailService)
    {
    }

    #[Route(self::POST, '/studentPost')]
    public function studentPost()
    {
        try
        {
            $student = $this->studentService->create($this->data->all());
            $this->emailService->create($student);
        }catch (ValidationError $error)
        {
            $this->setStatusCode(422);
            return $error->getMessages();
        }
        return array(
            'statusCode' => http_response_code(200)
        );

    }

    #[Route(self::POST, '/guestPost')]
    public function guestPost()
    {
        try
        {
            $this->guestService->create($this->data->all());
        }catch (ValidationError $error)
        {
            $this->setStatusCode(422);
            return $error->getMessages();
        }
        return array(
            'statusCode' => http_response_code(200)
        );
    }
}
