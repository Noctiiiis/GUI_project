<?php 
class Bootstrap
{
	public static $page ='';
	public static $action ='';
	public static $router ='';

	public static function url()
	{
		if (isset($_GET['page'])) 
		{
			$urlPath = explode('/', $_GET['page']);

			if (isset($urlPath[0])) {
				self::$page = $urlPath[0];
				self::_urlValidate();
			}

			if(isset($urlPath[1]))
			{
				self::$action = $urlPath[1];
			}

			if(isset($urlPath[2]))
			{
				self::$router = $urlPath[2];
			}
		}
		else
		{
			self::$page = 'gallery';
		}
	}

	private static function _urlValidate()
	{
		if (!file_exists(SITE_PATH . '/Controller/' . self::$page . '/Controller.php')) 
		{
			header('HTTP/1.0 404 Not Found');
			include SITE_PATH . '/view/404.php';
			exit;
		}
	}
}