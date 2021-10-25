<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	public function home()
	{
		return view('home');
	}
	public function grupo() {
		return view('grupo_brasil_atuarial');
	}
	public function setChoice() {
		$session = session();
		// $choice = $session->get('atuarial');

		$newdata = [
				'atuarial'  => true
		];
		
		$session->set($newdata);
		return redirect()->route('hoome');
	}
	public function clearChoice() {
		$session = session();
		$session->remove('atuarial');
		return redirect()->route('grupo');
	}
}
