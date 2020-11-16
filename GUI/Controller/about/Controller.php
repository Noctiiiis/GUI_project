<?php

namespace Controller\about;

use includes\Components\ControllerComponents;
use Controller\about\ModelAbout;

include SITE_PATH . '/Controller/about/ModelAbout.php';

Class Controller extends ControllerComponents
{
	public function __construct($page, $action, $router)
	{
		$this->_page = $page;
		$this->_action = $action;
		$this->_router = $router;

		$this->_operate();
	}

	protected function _operate()
	{
		$modelAbout = new ModelAbout();

		switch ($this->_action) 
		{			
			default:
				$this->_view = 'about/about';
				break;
		}
	}
}