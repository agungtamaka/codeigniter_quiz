<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pegawai_Model');
		//Do your magic here
	}

	public function index($idPegawai)
	{
		$data['jabatan']=$this->Pegawai_Model->getJabatanByPegawai($idPegawai);
		$this->load->view('jabatan',$data);
	}

}

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */

 ?>