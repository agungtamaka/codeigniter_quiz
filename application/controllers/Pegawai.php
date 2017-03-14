<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pegawai_Model');
		//Do your magic here
	}

	public function index()
	{
		$data['pegawai']=$this->Pegawai_Model->getDataPegawai();
		$this->load->view('pegawai',$data);
	}

}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */

 ?>