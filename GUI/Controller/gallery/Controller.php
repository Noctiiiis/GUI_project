<?php

namespace Controller\gallery;

use includes\Components\ControllerComponents;
use Controller\gallery\ModelGallery;

include SITE_PATH . '/Controller/gallery/ModelGallery.php';

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
		$modelGallery = new ModelGallery();

		switch ($this->_action) 
		{
			/*case 'add':
				$this->_data = $modelGallery->postEmployee();
				echo $this->_data;
				exit();
				break;

			case 'edit':
			$this->_data = $modelGallery->editEmployee();
			print_r($this->_data);
			exit();
				break;

			case 'del':
			echo $this->_data = $modelGallery->delEmployee();
			exit;
			break;*/
			
			default:
				//$this->_data = $modelGallery->gallery();
				$this->_view = 'gallery/gallery';
				break;
		}
	}
}