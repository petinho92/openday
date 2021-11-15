<?php namespace Application\Missions\Web\Page;

use Atomino\Mercury\Responder\Smart\SmartResponder;
use Atomino\Mercury\Responder\Smart\Attributes\{Cache, Args, CSS, JS, Init};
use Symfony\Component\HttpFoundation\Response;
use function Atomino\debug;

#[Init( 'web', 'index.twig')]
#[Args( title: 'MIK Nyilt Nap',favicon: "mik_favico.png" )]
#[Cache( 0 )]
#[CSS('/~web/index.css')]
#[JS('/~web/index.js')]
class Index extends SmartResponder{
	public array $users;
	protected function prepare(Response $response){	}
}

