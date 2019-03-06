<?php
class Pengurus extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		// Load helper URL dan FORM
		$this->load->helper(array('url','form'));
		// Load class Model_pengurus
		$this->load->model("Model_pengurus");
	}

	function index()
	{
		$data['judul']="Database in CI";
		$data['isi']="CRUD Data Pengurus";
		$data['data']=$this->Model_pengurus->get();
		$this->load->view('view_pengurus',$data);
	}

	function addpengurus()
	{
		//Simpan pengurus
		$id=$this->input->post('id',true);
		$nama=$this->input->post('nama',true);
		$alamat=$this->input->post('alamat',true);
		$gender=$this->input->post('gender',true);
		$gaji=$this->input->post('gaji',true);
		$this->Model_pengurus->simpan($id, $nama, $alamat, $gender, $gaji);
		redirect('pengurus');
	}

	function editpengurus()
	{
		// Tampil data
		$data['judul']="Database dalam CI";
		$data['isi']="Edit Data Pengurus";
		$id=$this->uri->segment(3);
		$data['data']=$this->Model_pengurus->edit($id);
		$this->load->view("vedit_pengurus",$data);
	}

	function edit_submit()
	{
		$id=$this->input->post('id',true);
		$nama=$this->input->post('nama',true);
		$alamat=$this->input->post('alamat',true);
		$gender=$this->input->post('gender',true);
		$gaji=$this->input->post('gaji',true);
		$this->Model_pengurus->update($id,$nama,$alamat,$gender,$gaji);
		redirect('pengurus');
	}

	function delete()
	{
		$id=$this->uri->segment(3);
		$this->Model_pengurus->delete($id);
		redirect('pengurus');
	}
}
?>