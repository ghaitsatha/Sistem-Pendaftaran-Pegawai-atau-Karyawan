<?php 
	/**
	 * 
	 */
	class Formkrywn_model extends CI_Model
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->helper('url');
			$this->load->database();
		}
		function save($data){
			$this->db->insert('karyawan',$data);
			echo $this->db->last_query();
		}
		function get_all_karyawan(){
			return $this->db->get('karyawan');
		}
		function get_karyawan(){
			return $this->db->get_where("karyawan", array('nik' => $id));
		}
		public function tambah(){
			$data = array('nama'=>$this->input->post('nama'), 'jenis_kelamin'=>$this->input->post('jenis_kelamin'), 'tempat_lahir'=>$this->input->post('tempat_lahir'), 'provinsi'=>$this->input->post('rpovinsi'), 'tanggal_lahir'=>$this->input->post('tanggal_lahir'), 'warga_negara'=>$this->input->post('warga_negara'), 'agama'=>$this->input->post('agama'), 'alamat'=>$this->input->post('alamat'), 'pendidikan'=>$this->input->post('pendidikan'), 'no_telp'=>$this->input->post('no_telp'));
			$this->db->insert('karyawan',$data);
		}
		public function update($id){
			$data = array('nama'=>$this->input->post('nama'), 'jenis_kelamin'=>$this->input->post('jenis_kelamin'), 'tempat_lahir'=>$this->input->post('tempat_lahir'), 'provinsi'=>$this->input->post('rpovinsi'), 'tanggal_lahir'=>$this->input->post('tanggal_lahir'), 'warga_negara'=>$this->input->post('warga_negara'), 'agama'=>$this->input->post('agama'), 'alamat'=>$this->input->post('alamat'), 'pendidikan'=>$this->input->post('pendidikan'), 'no_telp'=>$this->input->post('no_telp'));
			$this->db->update('karyawan',$data,"nik =$id");
		}
		public function hapus($nik){
			return $this->db->delete('maba',array('nik'=>$nik));
		}
	}
 ?>