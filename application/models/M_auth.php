<?php
class M_auth extends CI_Model
{

	protected $userTable = 'users';
	protected $roleTable = 'roles';

	public function login($email, $password)
	{
		$this->db->select([
			'u.id',
			'u.name',
			'u.email',
			'u.role_id',
			'r.name as role_name'
		]);
		$this->db->where([
			'u.email' 		=> $email,
			'u.password'	=> $password
		]);
		$this->db->join($this->roleTable . ' r', 'r.id = u.role_id');
		return $this->db->get($this->userTable . ' u', 1)->row();
	}
}
