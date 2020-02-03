<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_pasien extends CI_Model {

	function get_user($id)
	{
		$this->db->where('pasien_id',$id);
        $data = $this->db->get('m_pasien');
		return $data->row();
	}

	function get_riwayat_berobat($id)
	{
		$this->db->where('periksa_pasien_id',$id);
        $data = $this->db->get('t_riwayat_periksa');
		return $data->row();
	}

	function get_login($pasien_norm,$pasien_tanggallahir)
	{
		$this->db->where('pasien_norm',$pasien_norm);
		// $this->db->where('pasien_tanggallahir',$pasien_tanggallahir);
		$result = $this->db->get('m_pasien');
		$result = $result->row();
		return $result;		
	}
}

/* End of file m_pasien.php */
/* Location: ./application/modules/auth/models/m_auth.php */