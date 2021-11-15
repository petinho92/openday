<?php namespace Application\Missions\Admin\Services;

use Application\Entity\Student;
use Atomino\Carbon\Database\Finder\Filter;
use function Atomino\debug;

class StudentService
{
    public function getAll(): array
    {
        $data = Student::search()->collect();

        $array = array();
        foreach ($data as $adat) {
            array_push($array, (object)[
                'id' => $adat->id,
                'name' => $adat->name,
                'email' => $adat->email,
                'qrcode' => $adat->getQRCode(),
            ]);
        }
        return $array;
    }

    public function getCount(): int
    {
        return Student::search()->count();
    }

    public function checkByHash($id, $hash)
    {
        $student = Student::pick($id);
        if ($student) {
            if ($hash === md5($student->guid)) {
                return true;
            }
        }
        return false;
    }

    public function getStudentNamebyID($id)
    {
        if (Student::pick($id)) {
            $student = Student::pick($id);
            return $student->name;
        }
        return false;
    }

}