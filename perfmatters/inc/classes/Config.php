<?php
namespace Perfmatters;

class Config
{
	public static $options;
	public static $cdn;

	//initialize config
	public static function init()
	{
		//load plugin options
		self::$options = get_option('perfmatters_options');
		self::$cdn = get_option('perfmatters_cdn');
	}
}