<?php

class Template{

	public static function page()
	{

		if (Bootstrap::$router === 'ajax') {
			
			self::includeModule(Bootstrap::$page, Bootstrap::$action, Bootstrap::$router);
		}

		else
		{
			self::render('page',['page' => Bootstrap::$page, 'action' => Bootstrap::$action, 'router' => Bootstrap::$router]);
		}
	}

	public static function includeModule($module,$action ='', $router = '')
	{

		include_once SITE_PATH . '/Controller/' . $module . '/Controller.php';

		$Controller = '\Controller\\'.$module.'\Controller';

		$ctrl = new $Controller($module, $action, $router);
		$dataApp = $ctrl->get_data();

		self::render($dataApp['view'], $dataApp['data']);

	}

	public static function render($view, $dataApp)
	{
		include SITE_PATH . '/view/'. $view . '.php';
	}
}