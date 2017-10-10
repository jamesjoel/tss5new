<?php
class Usermod extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function get_user($id)
	{
		$this->db->where("id", $id);
		$obj=$this->db->get("user_tbl");
		// SELECT * FROM user_tbl WHERE id=2
		return $obj;
	}
	function update($id, $data)
	{
		$this->db->where("id", $id);
		$this->db->update("user_tbl", $data);
	}


}

?>