<?php

namespace Controller\contact;

use includes\Components\ControllerComponents;
use Controller\contact\ModelContact;

include SITE_PATH . '/Controller/contact/ModelContact.php';

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
		$ModelContact = new ModelContact();

		switch ($this->_action) 
		{			
			default:
				$this->_view = 'contact/contact';
				break;
		}
	}
}