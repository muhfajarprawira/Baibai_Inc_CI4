<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Halaman Dashboard'
		];

		return view('dashboard/index', $data);
	}
}
