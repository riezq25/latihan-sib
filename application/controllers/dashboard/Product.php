<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'core/Base_controller.php';

class Product extends Base_controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model([
			'M_product'
		]);
	}

	public function index()
	{
		$this->data['title'] = "Products";
		$this->data['products'] = $this->M_product->get();
		$this->render('dashboard/product');
	}
}
