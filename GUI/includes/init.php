<?php
session_start();
include SITE_PATH . '/includes/Bootstrap.php';
Bootstrap::url();

include SITE_PATH . '/includes/db.php';
include SITE_PATH . '/includes/Components/ControllerComponents.php';
include SITE_PATH . '/includes/Template.php';

Template::page();