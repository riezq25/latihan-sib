<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'core/Base_controller.php';

class Index extends Base_controller
{
	public function index()
	{
		$this->data['title'] = 'Dashboard';
		$this->render('dashboard/index');
	}
}
