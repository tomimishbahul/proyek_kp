<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
      date_default_timezone_set("Asia/Jakarta");

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('m_auth','sdb');
        // $this->cname = 'auth';              
    }

    public function index()
    {
        $this->login();
    }

    public function login()
    {
        // if(cek_auth())//cek masih ada data login atau tidak
        // {
        //     redirect(base_url('beranda')); 
        // }
        $this->load->view('v_login');        
    }    

    public function do_login()
    {
        $post = $this->input->post();
        $result = $this->sdb->cek_user($post['username'],md5($post['password']));

        if($result)
        {
            unset($result->password);
            $this->session->set_userdata('simonka_user',$result);
            $cek_log = $this->sdb->cek_log(get_session('id_karyawan'),date('Y-m-d'),'Login User');

            if(empty($cek_log))
            {
                $data = array(
                    'log_name'=>'Login User',
                    'log_time'=>date('Y-m-d H:i:s'),
                    'log_id_karyawan'=>get_session('id_karyawan')
                );

                $add_log = $this->sdb->add_log($data);
            }
            else{
                $data = array(
                    'log_time'=>date('Y-m-d H:i:s')
                );

                $update_log = $this->sdb->update_log(date('Y-m-d'),get_session('id_karyawan'),'Login User',$data);                
            }

            $data2 = array('last_login'=>date('Y-m-d H:i:s'));
            $update_user = $this->sdb->update_user(get_session('username'),$data2);
            
        }
        else
        {
            flash_err('Username atau Password salah!');
        }
        redirect(base_url($this->cname));
    }

    public function logout()
    {
        $id_karyawan = get_session('id_karyawan');
        $cek_log = $this->sdb->cek_log($id_karyawan,date('Y-m-d'),'Logout User');

        if(empty($cek_log))
        {           
            $data = array(
                'log_name'=>'Logout User',
                'log_time'=>date('Y-m-d H:i:s'),
                'log_id_karyawan'=>$id_karyawan
            );

            $add_log = $this->sdb->add_log($data);            
        }
        else
        {   
            $data = array(
                'log_time'=>date('Y-m-d H:i:s')
            );

            $update_log = $this->sdb->update_log(date('Y-m-d'),$id_karyawan,'Logout User',$data);                     
        }  

        $user = $this->session->userdata('simonka_user');
        $this->session->sess_destroy();
        redirect(base_url($this->cname));
    }   
    
}

/* End of file auth.php */
/* Location: ./application/modules/auth/controllers/auth.php */