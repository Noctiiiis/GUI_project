<?php

namespace Controller\blog;

use includes\Components\ControllerComponents;
use Controller\blog\ModelBlog;

include SITE_PATH . '/Controller/blog/ModelBlog.php';

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
		$modelBlog = new ModelBlog();

		switch ($this->_action) 
		{			
			
			case 'post':
				//$this->_data = $modelEmployees->getEmpsByEnt($this->_router);
				$this->_view = 'blog/blog-post';
				break;

			default:
				$this->_view = 'blog/blog';
				break;
		}
	}
}