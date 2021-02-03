<?php

namespace App\Controllers;

class Homepage extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Baibai'
		];

		return view('frontend/index', $data);
	}
}
