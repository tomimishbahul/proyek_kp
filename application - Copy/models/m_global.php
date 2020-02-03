<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_global extends CI_Model {

	function get_all_karyawan()
	{
		$this->db->where('k.status',1);
		$this->db->join('tbl_ka_detail d','d.id_karyawan = k.id_karyawan');
		$result = $this->db->get('tbl_ka_karyawan k');
		return $result->result();
	}

	function get_detail_karyawan($id_karyawan='')
	{
		$this->db->where('id_karyawan',$id_karyawan);
		$result = $this->db->get('tbl_ka_karyawan');
		return $result->row();
	}	

	function get_option($nama=''){
		if(!empty($nama)){
			$this->db->where('nama',$nama);
			$result = $this->db->get('tbl_m_option');
			$result = $result->row();
			if($result){
				return $result->konten;
			}
			else return FALSE;
		}
		else return FALSE;
	}

	function get_level($id_level)
	{
		$this->db->where('l.id_level',$id_level);
		$this->db->join('tbl_m_level l','l.id_level = u.id_level');
		$result = $this->db->get('tbl_m_user u');
		$result = $result->row();
		return $result->fitur;
	}		

	function get_last_IdPDF()
	{	
		$this->db->order_by('IDPdf','DESC');	
		$result = $this->db->get('tbl_idpdf');
		$result = $result->row();
		return $result->IDPdf;		
	}		

	function cek_total_log_user()
	{
		$this->db->select('count(id_log_user) total');
		$result = $this->db->get('tbl_log_user');
		return $result->row();
	}

	function truncate($nama_tabel='')
	{
		$result = $this->db->truncate($nama_tabel);
		if($this->db->affected_rows() > 0)return TRUE;
		else return FALSE;
	}		

}

/* End of file m_global.php */
/* Location: ./application/models/m_global.php */