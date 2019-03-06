<?php
class Model_pengurus extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}

	function get()
	{
		// Fungsi untuk menampilkan data
		$data=$this->db->query("SELECT * FROM pengurus");
		return $data->result_array();
	}

	function simpan($id, $nama, $alamat, $gender, $gaji)
	{
		// Fungsi simpan data
		$query="INSERT INTO pengurus VALUES ('$id', '$nama', '$alamat', '$gender', '$gaji')";
		$this->db->query($query);
	}

	function edit($id)
	{
		// Tampilkan data untuk di-edit
		$data=$this->db->query("SELECT * FROM pengurus WHERE id=$id");
		return $data;
	}

	function update($id,$nama,$alamat,$gender,$gaji)
	{
		// Ubah data
		$query="UPDATE pengurus SET nama='$nama', alamat='$alamat', gender='$gender', gaji='$gaji' WHERE id='$id'";
		$this->db->query($query);
	}

	function delete($id)
	{
		//hapus data sesuai id
		$data=$this->db->query("DELETE FROM pengurus WHERE id=$id");
		return $data;
	}
}
?>