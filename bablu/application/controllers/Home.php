<?php

class Home extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
	}
	function index()
	{
		$this->load->view("home");
	}
	function file_upload()
	{

		if($this->input->post("submit"))
		{
			$conf['max_size']=2048;
			$conf['allowed_types']="jpg|png|gif|jpeg";
			$conf['upload_path']="user_image/";
			$this->load->library("upload", $conf);
			if($this->upload->do_upload()==false)
			{
				$a=$this->upload->display_errors();
				$this->session->set_flashdata("msg", $a);
				redirect("home/file_upload");
			}
			else
			{
				// print_r($this->upload->data());
				echo $this->upload->data("file_name");
			}

		}
		else
		{

			$this->load->view("file_upload");
		}

	}
	function view_all()
	{
		$this->load->model("studentmod");
		$obj=$this->studentmod->get_all();
		$pagedata['student']=$obj;
		$this->load->view("view_all", $pagedata);
	}
	function edit($a)
	{
		$this->load->model("studentmod");
		
		if($this->input->post("submit"))
		{
			$arr['full_name']=$this->input->post("f_name");
			$arr['fee']=$this->input->post("f");
			$this->studentmod->update($a, $arr);
			redirect("home/view_all");
		}
		else
		{
			
			$obj=$this->studentmod->get_user_by_id($a);
			$pagedata['student']=$obj;
			$this->load->view("edit", $pagedata);
		}



	}
}

?>