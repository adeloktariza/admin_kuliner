<?php 

class M_user extends CI_Model {

	var $limit = 10;
	var $order = 'ASC';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function user_login($username,$password){
		$password123=md5($password);
		$sql ="SELECT * FROM tbl_user WHERE fusername='$username' AND fuserpassword='$password123'";
		$query=$this->db->query($sql);
		return $query;
	}

	
}
?>