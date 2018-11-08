<?php namespace Ict\Core\Classes;

use Hash;

class Generator {

	public function make()
	{
		return md5(date('Y-m-d').Hash::make('Y-m-d'));
	}
}
