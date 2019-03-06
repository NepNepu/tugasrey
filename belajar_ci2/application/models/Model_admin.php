<?php
class Model_admin extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}

	function get()
	{
		// Fungsi untuk menampilkan data
		$data=$this->db->query("SELECT * FROM admin");
		return $data->result_array();
	}

	function simpan($id, $username, $password)
	{
		// Fungsi simpan data
		$query="INSERT INTO admin VALUES ('$id', '$username', '$password')";
		$this->db->query($query);
	}

	function edit($id)
	{
		// Tampilkan data untuk di-edit
		$data=$this->db->query("SELECT * FROM admin WHERE id=$id");
		return $data;
	}

	function update($id,$username,$password)
	{
		// Ubah data
		$query="UPDATE admin SET username='$username', password='$password' WHERE id='$id'";
		$this->db->query($query);
	}

	function delete($id)
	{
		//hapus data sesuai id
		$data=$this->db->query("DELETE FROM admin WHERE id=$id");
		return $data;
	}
}
?>