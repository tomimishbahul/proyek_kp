<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_auth extends CI_Model {

	function cek_user($username,$password){
		$this->db->where('u.username',$username);
		$this->db->where('u.password',$password);
		$this->db->join('tbl_ka_karyawan k','k.id_karyawan = u.id_karyawan');
		$this->db->join('tbl_m_jabatan j','j.id_jabatan = k.id_jabatan');
		$this->db->join('tbl_m_level l','l.id_level = u.id_level');
		$result = $this->db->get('tbl_m_user u');
		$result = $result->row();
		return $result;		
	}

	function update_user($username,$data)
	{
		$this->db->where('username',$username);
        $update = $this->db->update('tbl_m_user',$data);
		return $this->db->affected_rows();
	}			

	function get_total_log()
	{		
		return $this->db->select('count(id_log_user) total')->get('tbl_log_user')->row();
	}	

	function cek_log($id_karyawan='',$date='',$log_name='')
	{
		$this->db->where('log_id_karyawan',$id_karyawan);
		$this->db->where('DATE(log_time)',$date);
		$this->db->where('log_name',$log_name);
		$result = $this->db->get('tbl_log_user');
		return $result->row();
	}

	function add_log($data='')
	{
		$result = $this->db->insert('tbl_log_user',$data);
		if($this->db->affected_rows() > 0)return TRUE;
		else return FALSE;
	}		

	function update_log($date='',$id_karyawan='',$log_name='',$data='')
	{
		$this->db->where('DATE(log_time)',$date);
		$this->db->where('log_id_karyawan',$id_karyawan);
		$this->db->where('log_name',$log_name);
		$this->db->update('tbl_log_user',$data);
		if($this->db->affected_rows() > 0)return TRUE;
		else return FALSE;
	}
	
}

/* End of file m_auth.php */
/* Location: ./application/modules/auth/models/m_auth.php */