<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
      date_default_timezone_set("Asia/Jakarta");

class Riwayat_berobat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('m_auth','sdb');
        // $this->cname = 'auth';              
    }

    public function index()
    {
        $data['content'] = 'v_riwayat_berobat';    
        $this->load->view('back/template',$data);
    }  
    
}

/* End of file auth.php */
/* Location: ./application/modules/auth/controllers/auth.php */