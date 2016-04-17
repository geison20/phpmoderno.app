<?php 

namespace PHPModerno\Classes\Config;

class Configuration
{
	public static function getNamespace()
	{
		echo json_encode(['namespace' => __NAMESPACE__]);
	}
	public static function getClass()
	{
		echo json_encode(['Class' => __CLASS__]);
	}
}