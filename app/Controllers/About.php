<?php

namespace App\Controllers;

class About extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Tentang Kami'
		];

		return view('frontend/page/about', $data);
	}
}
