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
 * @method static \Application\Atoms\EntityFinder\_Student search( Filter $filter = null )
 * #[Immutable( 'guid', true )]
 * #[Protect( 'guid', true, false )]
 * #[RequiredField('guid', StringField::class)]
 * @method static \Atomino\Carbon\Database\Finder\Comparison id($isin = null)
 * @property-read int|null $id
 * @method static \Atomino\Carbon\Database\Finder\Comparison name($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison email($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison schooltype($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison city($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison school($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison major($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison wherehear($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison whohelp($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison created($isin = null)
 * @property-read \DateTime|null $created
 * @method static \Atomino\Carbon\Database\Finder\Comparison guid($isin = null)
 */
#[RequiredField('id', \Atomino\Carbon\Field\IntField::class)]
#[Immutable("created", true)]
#[Protect("created", true, false)]
#[RequiredField("created", \Atomino\Carbon\Field\DateTimeField::class)]
#[Field("id", \Atomino\Carbon\Field\IntField::class)]
#[Protect("id", true, false)]
#[Immutable("id",false)]
#[Validator("name", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>100])]
#[Field("name", \Atomino\Carbon\Field\StringField::class)]
#[Validator("email", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>100])]
#[Field("email", \Atomino\Carbon\Field\StringField::class)]
#[Validator("schooltype", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>20])]
#[Field("schooltype", \Atomino\Carbon\Field\StringField::class)]
#[Validator("city", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>30])]
#[Field("city", \Atomino\Carbon\Field\StringField::class)]
#[Validator("school", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>250])]
#[Field("school", \Atomino\Carbon\Field\StringField::class)]
#[Field("major", \Atomino\Carbon\Field\JsonField::class)]
#[Field("wherehear", \Atomino\Carbon\Field\JsonField::class)]
#[Field("whohelp", \Atomino\Carbon\Field\JsonField::class)]
#[Field("created", \Atomino\Carbon\Field\DateTimeField::class)]
#[Validator("guid", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>36])]
#[Field("guid", \Atomino\Carbon\Field\StringField::class)]
abstract class _Student extends Entity {
	static null|Model $model = null;
	use \Atomino\Carbon\Plugins\Created\CreatedTrait;
	use \Atomino\Carbon\Plugins\Guid\GuidTrait;
	const id = 'id';
	protected int|null $id = null;
	protected function getId():int|null{ return $this->id;}
	const name = 'name';
	public string|null $name = null;
	const email = 'email';
	public string|null $email = null;
	const schooltype = 'schooltype';
	public string|null $schooltype = null;
	const city = 'city';
	public string|null $city = null;
	const school = 'school';
	public string|null $school = null;
	const major = 'major';
	public array $major = [];
	const wherehear = 'wherehear';
	public array $wherehear = [];
	const whohelp = 'whohelp';
	public array $whohelp = [];
	const created = 'created';
	protected \DateTime|null $created = null;
	protected function getCreated():\DateTime|null{ return $this->created;}
	const guid = 'guid';
	public string|null $guid = null;
}





