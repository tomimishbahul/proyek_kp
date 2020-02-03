<?php

require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';
use chriskacerguis\RestServer\RestController;


class Riwayat_berobat extends RestController{

  // construct
  public function __construct(){
  	parent::__construct();
  		// echo CI_VERSION;
  	$this->load->model('m_pasien');
  }


  	// untuk menambah Pendaftaran menaggunakan method post
	public function index_get(){
		$data['status'] = 'success';
		$data['message'] = 'berhasil';
		$data['data'] = $this->m_pasien->get_riwayat_berobat(12734);
		$this->response($data,200);
	}
} 
?>