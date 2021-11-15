<?php namespace Application\Missions\Web\Services;

use function Atomino\debug;

class QRService
{
    public function __construct(private StudentService $studentService)
    {
    }

    public function checkByHash($code)
    {
        //MIK51-openday-11-36cb21813152512ab8962874d5b1ba68
        if(preg_match('(MIK51-[o][a-z]*-[0-9]+-[0-9a-zA-Z]*)', $code))
        {
            debug('match');
            $data = explode("-", $code);
            if($data[1] === 'openday')
            {
                if($this->studentService->checkByHash($data[2],$data[3]))
                {
                    return $this->studentService->getStudentNamebyID($data[2]);
                }else{
                    return false;
                }
            }
            debug('no match');
            return false;
        }
    }
}
