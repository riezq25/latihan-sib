<?php
class M_product extends CI_Model
{

	public $productTable = 'products';
	public $userTable = 'users';

	public function get()
	{
		$this->db->select([
			'p.*',
			'u.name as creator'
		]);
		$this->db->join($this->userTable . ' u', 'u.id = p.created_by');
		return $this->db->get($this->productTable . ' p')->result();
	}
}
