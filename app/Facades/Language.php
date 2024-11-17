<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;


class Language extends Facade
{

	public static $languages = [
		'de',
		'en',
	];

	public static function getLanguages()
	{
		return self::$languages;
	}
}
