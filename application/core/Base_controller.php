<?php

class Base_controller extends CI_Controller
{

	protected $template = 'template/dashboard/index';
	protected $data = array();

	protected $auth = true;

	public function __construct()
	{
		parent::__construct();

		if ($this->auth) {
			if (!$this->session->userdata('user')) {
				$this->session->set_flashdata('error', 'Anda harus login terlebih dahulu');
				redirect(site_url('Auth'));
			}
		}
	}

	protected function render($view)
	{
		$this->data['content'] = $this->load->view($view, $this->data, true);
		$this->load->view($this->template, $this->data);
	}
}
