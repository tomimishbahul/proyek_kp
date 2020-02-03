<?php

require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';
use chriskacerguis\RestServer\RestController;


class Login extends RestController{

  // construct
  public function __construct(){
  	parent::__construct();
  		// echo CI_VERSION;
  	$this->load->model('m_pasien');
  }


  	// untuk menambah Pendaftaran menaggunakan method post
	public function index_post(){
    $post = $this->input->post();
		$data['status'] = 'success';
		$data['message'] = 'berhasil';
		$data['norm'] = $post['pasien_norm'];
    $data['tgl'] = $post['pasien_tanggallahir'];
    $get_login = $this->m_pasien->get_login($data['norm'],$data['tgl']);

    if($get_login) {
      $this->session->set_userdata('pasien',$get_login);
      $data['get_login'] = $get_login;
    } else {
      $data['status'] = 'error';
      $data['message'] = 'gagal';
    }
		$this->response($data,200);
	}
} 
?>