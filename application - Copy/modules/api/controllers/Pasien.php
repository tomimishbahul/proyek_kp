<?php

require APPPATH . 'libraries/RestController.php';
// require APPPATH . 'libraries/Format.php';
use chriskacerguis\RestServer\RestController;


class Pasien extends RestController{

  // construct
  public function __construct(){
  	parent::__construct();
  		echo CI_VERSION;
  }


  	// untuk menambah Pendaftaran menaggunakan method post
	public function index_get(){
		$data['code'] = 200;
		$data['status'] = 'success';
		$data['message'] = 'berhasil';
		// $this->response($data);
			var_dump($data);
	}
} 
?>