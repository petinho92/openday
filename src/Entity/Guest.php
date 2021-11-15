<?php namespace Application\Entity;

use Atomino\Carbon\Attributes\Modelify;
use Application\Atoms\Entity\_Guest;
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
#[Validator(null, UniqueEntity::class, ['fields'=>['email']])]
#[Modelify(\Application\Database\DefaultConnection::class, 'guest', true)]
class Guest extends _Guest{

}