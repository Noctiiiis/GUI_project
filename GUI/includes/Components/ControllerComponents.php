<?php

namespace includes\Components;

class ControllerComponents
{
	protected $_page;
	protected $_action;
	protected $_data;
	protected $_view;
	protected $_router;

	public function __construct($page, $action, $router)
	{
		$this->_page = $page;
		$this->_action = $action;
		$this->_router = $router;
		
		$this->_operate();
	}

	public function get_data()
	{
		return ['data' => $this->_data, 'view'=> $this->_view];
	}
}