<?php
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		// Load helper URL dan FORM
		$this->load->helper(array('url','form'));
		// Load class Model_pengurus
		$this->load->model("Model_admin");
	}

	function index()
	{
		$data['judul']="Database in CI";
		$data['isi']="CRUD Data Pengurus";
		$data['data']=$this->Model_admin->get();
		$this->load->view('view_admin',$data);
	}

	function addadmin()
	{
		//Simpan pengurus
		$id=$this->input->post('id',true);
		$username=$this->input->post('username',true);
		$password=$this->input->post('password',true);
		$this->Model_admin->simpan($id, $username, $password);
		redirect('admin');
	}

	function editadmin()
	{
		$id=$this->uri->segment(3);
		$data['data']=$this->Model_admin->edit($id);
		$this->load->view("vedit_admin",$data);
	}

	function edit_submit()
	{
		$id=$this->input->post('id',true);
		$username=$this->input->post('username',true);
		$password=$this->input->post('password',true);
		$this->Model_admin->update($id,$username,$password);
		redirect('admin');
	}

	function delete()
	{
		$id=$this->uri->segment(3);
		$this->Model_admin->delete($id);
		redirect('admin');
	}
}
?>