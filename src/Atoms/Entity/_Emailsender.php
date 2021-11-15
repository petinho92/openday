<?php namespace Application\Atoms\Entity;

use Atomino\Carbon\Database\Finder\Filter;
use Atomino\Carbon\Attributes\Field;
use Atomino\Carbon\Attributes\Immutable;
use Atomino\Carbon\Attributes\Protect;
use Atomino\Carbon\Attributes\Validator;
use Atomino\Carbon\Entity;
use Atomino\Carbon\Model;
use Atomino\Carbon\Attributes\RequiredField;


/**
 * @method static \Application\Atoms\EntityFinder\_Emailsender search( Filter $filter = null )
 * @method static \Atomino\Carbon\Database\Finder\Comparison id($isin = null)
 * @property-read int|null $id
 * @method static \Atomino\Carbon\Database\Finder\Comparison toName($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison toEmail($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison toQR($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison toContent($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison statusSent($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison sentTime($isin = null)
 */
#[RequiredField('id', \Atomino\Carbon\Field\IntField::class)]
#[Field("id", \Atomino\Carbon\Field\IntField::class)]
#[Protect("id", true, false)]
#[Immutable("id",false)]
#[Validator("toName", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>150])]
#[Field("toName", \Atomino\Carbon\Field\StringField::class)]
#[Validator("toEmail", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>150])]
#[Field("toEmail", \Atomino\Carbon\Field\StringField::class)]
#[Validator("toQR", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>150])]
#[Field("toQR", \Atomino\Carbon\Field\StringField::class)]
#[Validator("toContent", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>65535])]
#[Field("toContent", \Atomino\Carbon\Field\StringField::class)]
#[Field("statusSent", \Atomino\Carbon\Field\BoolField::class)]
#[Field("sentTime", \Atomino\Carbon\Field\DateTimeField::class)]
abstract class _Emailsender extends Entity {
	static null|Model $model = null;
	const id = 'id';
	protected int|null $id = null;
	protected function getId():int|null{ return $this->id;}
	const toName = 'toName';
	public string|null $toName = null;
	const toEmail = 'toEmail';
	public string|null $toEmail = null;
	const toQR = 'toQR';
	public string|null $toQR = null;
	const toContent = 'toContent';
	public string|null $toContent = null;
	const statusSent = 'statusSent';
	public bool|null $statusSent = null;
	const sentTime = 'sentTime';
	public \DateTime|null $sentTime = null;
}





