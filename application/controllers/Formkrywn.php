<?php 
/**
 * 
 */
class Formkrywn extends CI_Controller
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }
	var $arrField = array('nik' => "required|min_length[5]",'nama' => "required", 'jenis_kelamin' => "required", 'tempat_lahir' => "required", 'provinsi' => "required", 'tanggal_lahir' => "required", 'warga_negara' => "required", 'agama' => "required", 'alamat' => "required", 'pendidikan' => "required", 'no_telp' => "required");
	var $data = array();
	public function __construct(){
		parent::__construct();
		$this->load->model('formkrywn_model');
	}
	public function index(){
		global $arrField;
		$this->load->helper('form');
		$this->load->view('formkrywn_view');

		foreach ($this->arrField as $field => $rules) {
			# code...
			$this->data($field);
		}
	}
	public function data(){
		global $arrField;
		$arrField = array('nik','nama','jk','TL','tgl','pvs','wn','agm','almt','pndkk','nohp','Foto');
		$this->load->helper(array('html','form'));
		$this->load->library(array('form_validation'));
		$this->load->view('formdata');
		$data = array();
		foreach ($arrField as $field) {
			# code...
			if($field == 'jk'){
				$this->form_validation->set_rules($field, $field, "required");
			}
			else{
				$this->form_validation->set_rules($field, $field, "requires|max_length[25]");
			}
			$field = $data[$field] = form_error($field) ? "" :$this->input->post($field,true);
		}
		if($this->form_validation->run()){
			$data = array();
			$data['valid'] = 'Valid';

			$data = array('nik'=>$this->data['nik'], 'nama'=>$this->data['nama'], 'jk'=>$this->data['jk'], 'TL'=>$this->data['TL'], 'pvs'=>$this->data['pvs'], 'tgl'=>$this->data['tgl'], 'wn'=>$this->data['wn'], 'agm'=>$this->data['agm'], 'almt'=>$this->data['almt'], 'pndkk'=>$this->data['pndkk'], 'nohp'=>$this->data['nohp'],);
			$this->load->view('formkrywn_view');
			$this->load->model("Formkrywn_model","formlrywn_model");
		}
		else{
			$this->data['err'] = "Invalid";
		}
	}
	public function view_karyawan(){
		$this->load->model("Formkrywn_model", "formkrywn_model");
		$this->load->view('list_krywn');
	}
	public function proses($act, $no_pendaftara=false){
		if($act=="tambah"){
			$this->formkrywn_model->tambah();
			$this->load->view('formdata');
		}
		elseif ($act=="hapus") {
			# code...
			$this->formkrywn_model->hapus($no_pendaftaran);
			echo "<meta http-equiv='refresh' content='0; url=../../view_mahasiswa'/>";
		}
		elseif ($act="update") {
			# code...
			$this->formkrywn_model->update($no_pendaftaran);
			$this->load->view('formdata');
		}
	}
	public function update($id){
		global $arrField;
		$this->load->helper('form');
		$data['row']=$this->formkrywn_model->get_karyawan($id);
		$data['ra']=$data['row']->result_array();
		$this->load->view('edit_formkrywn',$data);
		foreach ($this->arrField as $field => $rules) {
			# code...
			$this->dara[$field] = '';
		}
	}
}
 ?>