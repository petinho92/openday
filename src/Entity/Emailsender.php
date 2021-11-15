<?php namespace Application\Entity;

use Atomino\Carbon\Attributes\Modelify;
use Application\Atoms\Entity\_Emailsender;

#[Modelify(\Application\Database\DefaultConnection::class, 'emailsender', true)]
class Emailsender extends _Emailsender{

}