<?php

require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';
use chriskacerguis\RestServer\RestController;


class Pasien extends RestController{

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
		$data['data'] = $this->m_pasien->get_user($post['pasien_norm']);
    	$data['data'] = $this->m_pasien->get_user($post['pasien_tanggallahir']);
		$this->response($data,200);
	}
} 
?>