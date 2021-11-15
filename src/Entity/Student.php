<?php namespace Application\Entity;

use Atomino\Carbon\Attributes\Modelify;
use Application\Atoms\Entity\_Student;
use Atomino\Carbon\Attributes\Validator;
use Atomino\Carbon\Plugins\Created\Created;
use Atomino\Carbon\Plugins\Guid\Guid;
use Atomino\Carbon\Validation\UniqueEntity;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;

#[Created]
#[Guid]
#[Validator('name', NotBlank::class, ['message'=>"Név megadása kötelező!"])]
#[Validator('email', NotBlank::class, ['message'=>"Email cím megadása kötelező!"])]
#[Validator('email', Email::class, ['message'=>"Email formátum nem megfelelő!"])]
#[Validator('schooltype', NotBlank::class, ['message'=>"Intézmény típusának kiválasztása kötelező!"])]
#[Validator('city', NotBlank::class, ['message'=>"Város kiválasztása kötelező!"])]
#[Validator('school', NotBlank::class, ['message'=>"Intézmény kiválasztása kötelező!"])]
#[Validator('major', NotBlank::class, ['message'=>"<b>Az alábbi képzések érdekelnek:</b><br>Legalább 1 képzés kiválasztása kötelező!"])]
#[Validator('wherehear', NotBlank::class, ['message'=>"<b>Hol szereztél tudomást a nyílt napról?</b> <br> Legalább egy válasz megadása kötelező!"])]
#[Validator('whohelp', NotBlank::class, ['message'=>"<b>Ki segít a felvételi döntésedben?</b> <br> Legalább egy válasz megadása kötelező!"])]

#[Validator(null, UniqueEntity::class, ['fields'=>['email']])]
#[Modelify(\Application\Database\DefaultConnection::class, 'student', true)]
class Student extends _Student{

    public function getQRCode(){
        return "MIK51-openday-".$this->id.'-'.md5($this->guid);
    }

}