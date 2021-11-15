<?php namespace Application\Missions\Web\Api;

use Application\Missions\Web\Services\QRService;
use Application\Missions\Web\Services\StudentService;
use Atomino\Mercury\Responder\Api\Api;
use Atomino\Mercury\Responder\Api\Attributes\Route;

class QRcodeApi extends Api
{
    public function __construct(private StudentService $studentService, private QRService $qrService)
    {
    }

    #[Route(self::GET, '/qr/:code(MIK51-[o][a-z]*-[0-9]+-[0-9a-zA-Z]*)')]
    public function qrGet(string $code)
    {
        //MIK51-student-263-5be164ef006b27adc41690096165fee5
        $result = $this->qrService->checkByHash($code);
        if($result){
            return $code;
        }else return false;
    }

}
