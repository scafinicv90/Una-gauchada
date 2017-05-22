<?php
class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$config = [
			'debug' => true,
			'paths' => ['../views/', VIEWPATH],
			'cache' => '../cache',
		];
		$this->load->library('twig');
		$this->twig->getTwig()->addExtension(new Twig_Extension_Debug());

	}

	public function index()
	{
		
		$this->twig->display('index', array('path' => "http://localhost/catedra/application"));

	}
	public function login()
	{
		$this->twig->display('indexLog', array('path' => "http://localhost/catedra/application"));

	}
}