<?php namespace Application\Entity;

use Atomino\Carbon\Attributes\Modelify;
use Application\Atoms\Entity\_Eventacs;
use Atomino\Carbon\Attributes\Validator;
use Atomino\Carbon\Plugins\Created\Created;
use Symfony\Component\Validator\Constraints\NotBlank;

#[Validator('station', NotBlank::class, ['message'=>'Állomás kiválasztása kötelező'])]
#[Validator('qrcode', NotBlank::class, ['message'=>'QR kód megadása kötelező'])]
#[Created]
#[Modelify(\Application\Database\DefaultConnection::class, 'eventacs', true)]
class Eventacs extends _Eventacs{

}