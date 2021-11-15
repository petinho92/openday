<?php namespace Application\Missions\Admin\Api;

use Application\Missions\Admin\Services\StudentService;
use Atomino\Mercury\Responder\Api\Api;
use Atomino\Mercury\Responder\Api\Attributes\Route;
use function Atomino\debug;

class StatApi extends Api
{
    public function __construct(private StudentService $studentService)
    {
    }

    #[Route(self::GET, '/getList')]
    public function getList()
    {
        $alma = "teszt";
        debug(password_hash($alma, PASSWORD_BCRYPT));
        return $this->studentService->getAll();

    }

    #[Route(self::GET, '/getCount')]
    public function getCount()
    {
        return $this->studentService->getCount();
    }

}
