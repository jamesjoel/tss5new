<?php
class Studentmod extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function get_all()
	{
		$obj=$this->db->get("student_tbl");
		return $obj;
	}
	function get_user_by_id($id)
	{
		$this->db->where("id", $id);
		$obj=$this->db->get("student_tbl");
		return $obj;
	}
	function update($id, $arr)
	{
		$this->db->where("id", $id);
		$this->db->update("student_tbl", $arr);

	}
}
?>