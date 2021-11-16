<?php namespace Application\Missions\Admin\Services;

use Application\Entity\Eventacs;
use Application\Entity\Student;
use function Atomino\debug;

class QRService
{
    public function __construct(private StudentService $studentService)
    {
    }

    public function checkByHash($code)
    {
        if(preg_match('(MIK51-[o][a-z]*-[0-9]+-[0-9a-zA-Z]*)', $code)){
            $data = explode("-", $code);
            if ($data[1] === 'openday') {
                if ($this->studentService->checkByHash($data[2], $data[3])) {
                    return $this->studentService->getStudentNamebyID($data[2]);
                } else {
                    return false;
                }
            }
        }
        return false;
    }

    public function createAccessQRCode(array $input)
    {
        $event = Eventacs::create();
        $event->station = $input['_programType'];
        $event->qrcode = $input['_qrCode'];
        $event->created = new \DateTime();
        $event->save();
        return $event;
    }
}
