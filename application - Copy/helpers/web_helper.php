<?php
class CI_Pdf {
function pdf_create($html, $filename, $paper, $orientation, $stream=TRUE)
{
require_once("dompdf/dompdf_config.inc.php");
spl_autoload_register('DOMPDF_autoload');
$dompdf = new DOMPDF();
$dompdf->set_paper($paper,$orientation);
$dompdf->load_html($html);
$dompdf->render();
if ($stream) {
$dompdf->stream($filename.".pdf");
} else {
$CI =& get_instance();
$CI->load->helper("file");
write_file($filename, $dompdf->output());
}
}
}
?>
<?php 
function format_date_indo($date){
    $BulanIndo = array("Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agt", "Sep", "Okt", "Nov", "Des");
 
    $tahun  = substr($date, 0, 4);
    $bulan  = substr($date, 5, 2);
    $tgl    = substr($date, 8, 2);

    $jam    = substr($date, 11, 2);
    $menit  = substr($date, 14, 2);
    $detik  = substr($date, 17, 2);
 
    $result = $tgl . "-" . $BulanIndo[(int)$bulan-1] . "-". $tahun . "  " .$jam.":".$menit.":".$detik;        
    return($result);
}

function format_date($date){
    $tahun  = substr($date, 0, 4);
    $bulan  = substr($date, 5, 2);
    $tgl    = substr($date, 8, 2);

    $jam    = substr($date, 11, 2);
    $menit  = substr($date, 14, 2);
    $detik  = substr($date, 17, 2);
 
    $result = $tgl . "-" . $bulan . "-". $tahun . "  " .$jam.":".$menit.":".$detik;        
    return($result);
}

function date_indo($date){
    $BulanIndo = array("Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Dec");
 
    $tahun  = substr($date, 0, 4);
    $bulan  = substr($date, 5, 2);
    $tgl    = substr($date, 8, 2);
 
    $result = $tgl . "-" . $BulanIndo[(int)$bulan-1] . "-". $tahun;        
    return($result);
}

function date_indo2($date){
    $tahun  = substr($date, 0, 4);
    $bulan  = substr($date, 5, 2);
    $tgl    = substr($date, 8, 2);
 
    $result = $tgl."/".$bulan."/".$tahun;        
    return($result);
}

function date_indo3($date){
    $BulanIndo = array("Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agt", "Sep", "Okt", "Nov", "Des");

    $tahun  = substr($date, 0, 4);
    $bulan  = substr($date, 5, 2);
    $tgl    = substr($date, 8, 2);
 
    $result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;        
    return($result);
}

function tanggal_indo($date){
    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
 
    $tahun = substr($date, 0, 4);
    $bulan = substr($date, 5, 2);
    $tgl   = substr($date, 8, 2);
 
    $result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;        
    return($result);
}

function tanggal_absensi($date){
    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
 
    $tgl   = substr($date, 0, 2);
    $bulan = substr($date, 3, 2);
    $tahun = substr($date, 6, 4);
 
    $result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;        
    return($result);
}
 
function bulan_indo($bulan){
    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
 
    $bulan = $bulan;    
 
    $result = $BulanIndo[(int)$bulan-1];        
    return($result);
}

function hari_indo($hari){
    $HariIndo = array("Minggu","Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
 
    $hari = $hari;    
 
    $result = $HariIndo[(int)$hari];        
    return($result);
}

function konversi_bulan($stringbulan){
    $bulan=array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
    $bulan_angka=array('01','02','03','04','05','06','07','08','09','10','11','12');
    $konversi=str_ireplace($bulan,$bulan_angka,$stringbulan);
    return $konversi;    
}

function format_rupiah($angka)
{
    $jadi = "Rp " . number_format((double)$angka,2,',','.');
    return $jadi;
}

function format_harga($angka)
{
    $jadi = number_format((double)$angka,0,',','.');
    return $jadi;
}

function format_harga2($angka)
{
    $jadi = number_format((double)$angka,2,',','.');
    return $jadi;
}

// function Terbilang($satuan){
//     $huruf = array("","Satu","Dua","Tiga","Empat","Lima","Enam","Tujuh","Delapan","Sembilan","Sepuluh","Sebelas");

//     if($satuan < 12)
//         return " " . $huruf[$satuan];
//     else if($satuan < 20)
//         return Terbilang($satuan - 10) . " Belas";
//     else if($satuan < 100)
//         return Terbilang($satuan / 10) . " Puluh" . Terbilang($satuan % 10);
//     else if($satuan < 200)
//         return " Seratus" . Terbilang($satuan - 100);
//     else if($satuan < 1000)
//         return Terbilang($satuan / 100) . " Ratus" . Terbilang($satuan % 100);
//     else if($satuan < 2000)
//         return " Seribu" . Terbilang($satuan - 1000);
//     else if($satuan < 1000000)
//         return Terbilang($satuan / 1000) . " Ribu" . Terbilang($satuan % 1000);
//     else if($satuan < 1000000000)
//         return Terbilang($satuan / 100000000) . " Juta" . Terbilang($satuan % 1000000);
//     else if($satuan >= 1000000000)
//         echo "Hasil terbilang tidak dapat diproses karena nilai terlalu besar !";
// }

function penyebut($nilai) {
    $nilai = abs($nilai);
    $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    // $temp = "";
    if ($nilai < 12) {
        $temp = " ". $huruf[$nilai];
    } else if ($nilai <20) {
        $temp = penyebut($nilai - 10). " belas";
    } else if ($nilai < 100) {
        $temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
    } else if ($nilai < 200) {
        $temp = " seratus" . penyebut($nilai - 100);
    } else if ($nilai < 1000) {
        $temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
    } else if ($nilai < 2000) {
        $temp = " seribu" . penyebut($nilai - 1000);
    } else if ($nilai < 1000000) {
        $temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
    } else if ($nilai < 1000000000) {
        $temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
    } else if ($nilai < 1000000000000) {
        $temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
    } else if ($nilai < 1000000000000000) {
        $temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
    }     
    return $temp;
}

function Terbilang($nilai) {
    if($nilai<0) {
        $hasil = "minus ". trim(penyebut($nilai));
    } else {
        $hasil = trim(penyebut($nilai));
    }           
    return ucfirst($hasil);
}

function selisih_tanggal($date1, $date2){
    $tanggal = new DateTime($date1);
    $sekarang = new DateTime($date2);
    $selisih = $tanggal->diff($sekarang);
    
    $selisih_tahun = $selisih->y;
    $selisih_bulan = $selisih->m;
    $selisih_hari = $selisih->d;

    if($selisih_tahun == 0 && $selisih_bulan == 0){
        return $selisih_hari.' hari';
    }
    else if($selisih_bulan == 0 && $selisih_hari == 0){
        return $selisih_tahun.' tahun';
    }
    else if($selisih_tahun == 0){
        return $selisih_bulan.' bulan '.$selisih_hari.' hari';
    }
    else if($selisih_bulan == 0){
        return $selisih_tahun.' tahun '.$selisih_hari.' hari'; 
    }
    else if($selisih_hari == 0){
        return $selisih_tahun.' tahun '.$selisih_bulan.' bulan';
    }  
    else{
        return $selisih_tahun.' tahun '.$selisih_bulan.' bulan '.$selisih_hari.' hari';
    }
}

// function selisih_tanggal($date1, $date2){
//     $diff = abs(strtotime($date2) - strtotime($date1));
//     $years = floor($diff / (365*60*60*24));
//     $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
//     $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
//     if($years == 0 && $months == 0){
//         return $days.' hari';
//     }
//     else if($months == 0 && $days == 0){
//         return $years.' tahun';
//     }
//     else if($years == 0){
//         return $months.' bulan '.$days.' hari';
//     }
//     else if($months == 0){
//         return $years.' tahun '.$days.' hari'; 
//     }
//     else if($days == 0){
//         return $years.' tahun '.$months.' bulan';
//     }  
//     else{
//         return $years.' tahun '.$months.' bulan '.$days.' hari';
//     }
// }

function selisih_tahun($date1, $date2){
    $diff = abs(strtotime($date2) - strtotime($date1));
    $years = floor($diff / (365*60*60*24));
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
    return $years;    
}

function selisih_hari($date1, $date2){
    $diff = abs(strtotime($date2) - strtotime($date1));
    $years = floor($diff / (365*60*60*24));
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
    return $days+1;    
}

// function jml_minggu($date1, $date2){
//     $minggu = 0;
//     $date1 = strtotime($date1);
//     $date2 = strtotime($date2);
//     for ($i=$date1; $i <= $date2; $i += (60 * 60 * 24)) {
//         if (date("w", $i) == "0"){
//             $minggu++;
//         }
//     }
//     return $minggu;
// }

function jml_hari($date1, $date2){
    $hari = 0;    
    $date1 = strtotime($date1);
    $date2 = strtotime($date2);    
    for ($i=$date1; $i <= $date2; $i += (60 * 60 * 24)) {
        $hari++;
    }
    return $hari;
}

function selisih_menit($jam_awal,$jam_akhir)
{
    list($h,$m) = explode(":",$jam_awal);
    $dtAwal = mktime($h,$m,1,1);
    list($h,$m) = explode(":",$jam_akhir);
    $dtAkhir = mktime($h,$m,1,1);
    $dtSelisih = $dtAkhir-$dtAwal;

    return ($dtSelisih/60);     
}

function terbilang_jam_menit($menit='')
{
    if($menit > 60){
        $a = sprintf("%01d jam %01d menit", floor($menit/60), $menit%60);
    }
    else{
        $a = $menit.' menit';
    }
    return $a;     
}

function get_option($nama)
{
    $CI =& get_instance();
    $CI->load->model('M_global');

    $konten = $CI->M_global->get_option($nama);
    if($konten) return $konten; 
    else return FALSE;
}

function update_setting($config_key,$value)
{
    $CI =& get_instance();
    $CI->load->model('M_global');

    $value = $CI->M_global->update_web_config($config_key,$value);
    if($value) return $value; 
    else return FALSE;
}

function get_session($att='')
{
    $CI =& get_instance();
    $data = $CI->session->userdata('simonka_user');
    if(empty($att)) return $data;
    else return $data->$att;
}

//fungsi untuk mengecek apakah session masih ada
function cek_auth(){
    $CI =& get_instance();
    $data = $CI->session->userdata('simonka_user');
    if(empty($data))
    {
        return FALSE;
    }
    else
    {
        return TRUE;
    }
}

// fungsi untuk mengecek apakah user memiliki hak akses ke fitur pada parameter
function cek_fitur($nama_fitur){
    if(cek_auth())
    {
        $CI =& get_instance();
        $CI->load->model('M_global');

        $data = $CI->session->userdata('simonka_user');
        $allowed = explode('|', $CI->M_global->get_level($data->id_level));

        if(in_array($nama_fitur, $allowed))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    else
    {
        return FALSE;
    }
}

function flash_succ($msg)
{
  $CI =& get_instance();
  $msg = succ_msg($msg);
  if($old = $CI->session->flashdata('message')!='')
  {
    $msg = $old.$msg;
    $CI->session->set_flashdata('message',$msg);
  }
  else $CI->session->set_flashdata('message',$msg);
}

function flash_err($msg)
{
  $CI =& get_instance();
  $msg = err_msg($msg);
  $CI->session->set_flashdata('message',$msg);
}

function flash_warn($msg)
{
  $CI =& get_instance();
  $msg = warn_msg($msg);
  $CI->session->set_flashdata('message',$msg);
}

function flash_info($msg)
{
  $CI =& get_instance();
  $msg = info_msg($msg);
  $CI->session->set_flashdata('message',$msg);
}

function cetak_flash_msg()
{
  $CI =& get_instance();
  echo $CI->session->flashdata('message');
}

function succ_msg($param)
{
  return '<div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    '.$param.'
                  </div>';
}

function err_msg($param){
  return '<div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    '.$param.'
                  </div>';
}

function warn_msg($param){
  return '<div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    '.$param.'
                  </div>';
}

function info_msg($param){
  return '<div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    '.$param.'
                  </div>';
}

// Function to get the client IP address
function get_client_ip()
{
    $ipaddress = '';
    if (@$_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(@$_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(@$_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(@$_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(@$_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(@$_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function upload_file($path = '', $input_name = '',$max_size = 200000000, $valid_formats = array()){
    if (isset($_FILES[$input_name])) {
        if(empty($valid_formats)){
            $valid_formats = array("jpg", "png", "gif", "bmp", "JPG", "PNG", "GIF", "BMP", "jpeg", "JPEG", "pdf");
        }

        if(isset($_FILES[$input_name]) and $_SERVER['REQUEST_METHOD'] == "POST"){

            $name = $_FILES[$input_name]['name'];
            $size = $_FILES[$input_name]['size'];
            if($size > $max_size) return 0;
     
            
            if(strlen($name)){
                $ext= end(explode(".", $name));
                if(in_array($ext,$valid_formats)){
                    $logual_image_name = time().mt_rand(10,99).'.'.$ext;
                    $tmp = $_FILES[$input_name]['tmp_name'];
                    
                    while(file_exists($path.$logual_image_name)){
                        $logual_image_name = time().mt_rand(10,99).'.'.$ext;
                    }

                    if(!is_dir($path))mkdir($path);

                    if(move_uploaded_file($tmp, $path.$logual_image_name)){
                        return $logual_image_name;
                    } 
                    else 
                        return 0; //failed upload
                } else
                    return 0; //wrong format file                   
            }
        }
    }
    return 0; //no file
}

function upload_file2($path = '', $file = '',$filename ='', $max_size = 500000000, $valid_formats = array()){
    if (isset($_FILES[$file])) {
        if(empty($valid_formats)){
            $valid_formats = array("jpg", "png", "gif", "bmp", "pdf", "JPG", "PNG", "GIF", "BMP", "jpeg", "JPEG", "txt", "doc", "docx", "xls", "xlsx", "mdb", "csv", "opt", "ppt", "pptx", "zip", "rar");
        }
        if(isset($_FILES[$file]) and $_SERVER['REQUEST_METHOD'] == "POST"){
            $name = $_FILES[$file]['name'];
            $size = $_FILES[$file]['size'];
            if($size > $max_size) return 0;
                 
            if(strlen($name)){
                $ext= end((explode('.', $name)));
                if(in_array($ext,$valid_formats)){
                    $actual_image_name = $filename.'.'.$ext;
                    $tmp = $_FILES[$file]['tmp_name'];                

                    if(!is_dir($path))mkdir($path);

                    if(move_uploaded_file($tmp, $path.$actual_image_name)){
                        return $actual_image_name;
                    } 
                    else 
                     return 0; //failed upload
                } else
                    return 0; //wrong format file                   
            }
        }
    }
    return 0; //no file
}

function upload_file_spt($path = '', $spt_file = '',$spt_filename ='', $max_size = 200000000, $valid_formats = array()){
    if (isset($_FILES[$spt_file])) {
        if(empty($valid_formats)){
            $valid_formats = array("jpg", "png", "gif", "bmp", "JPG", "PNG", "GIF", "BMP", "jpeg", "JPEG", "txt", "doc", "docx", "xls", "xlsx", "mdb", "csv", "opt", "pdf", "ppt", "pptx", "zip", "rar");
        }
        if(isset($_FILES[$spt_file]) and $_SERVER['REQUEST_METHOD'] == "POST"){
            $name = $_FILES[$spt_file]['name'];
            $size = $_FILES[$spt_file]['size'];
            if($size > $max_size) return 0;
                 
            if(strlen($name)){
                $ext= end((explode('.', $name)));
                if(in_array($ext,$valid_formats)){
                    $actual_image_name = $spt_filename.'.'.$ext;
                    $tmp = $_FILES[$spt_file]['tmp_name'];                

                    if(!is_dir($path))mkdir($path);

                    if(move_uploaded_file($tmp, $path.$actual_image_name)){
                        return $actual_image_name;
                    } 
                    else 
                     return 0; //failed upload
                } else
                    return 0; //wrong format file                   
            }
        }
    }
    return 0; //no file
}


function pdf_create($html, $filename, $paper, $orientation, $stream=TRUE)
{
    require_once("assets/dompdf/dompdf_config.inc.php");
    spl_autoload_register('DOMPDF_autoload');
    $dompdf = new DOMPDF();
    $dompdf->set_paper($paper,$orientation);
    $dompdf->load_html($html);
    $dompdf->render();
    if ($stream) {
        $dompdf->stream($filename.".pdf");
    } 
    else {
        $CI =& get_instance();
        $CI->load->helper("file");
        write_file($filename, $dompdf->output());
    }
}

// untuk KRIPTOGRAFI

define('CLASS_ENCRYPT', dirname(__FILE__));
include('cryptography/AES.class.php');
include('cryptography/class.hash_crypt.php');

// $keypass=md5('inv'.md5('store'));
// $key1=md5('inv');

function keypass()
{
    return md5('inv'.md5('store'));
}

function paramEncrypt($x)
{
    
    $first_output = '';
    $count = 0;
    
    
   $Cipher = new AES();
   $key_256bit = keypass();
    
   $n = ceil(strlen($x)/16);
   $encrypt = "";

   for ($i=0; $i<=$n-1; $i++)
   {
      $cryptext = $Cipher->encrypt($Cipher->stringToHex(substr($x, $i*16, 16)),$key_256bit);
      $encrypt .= $cryptext;   
   }
   

   return $encrypt;
}

function paramDecrypt($x)
{
   $Cipher = new AES();
   $key_256bit = keypass();
      
   $n = ceil(strlen($x)/32);
   $decrypt = "";

   for ($i=0; $i<=$n-1; $i++)
   {
      $result = $Cipher->decrypt(substr($x, $i*32, 32), $key_256bit);
      $decrypt .= $Cipher->hexToString($result);
   }
   
   return $decrypt;
}

function paging($url, $total, $perpage=NULL, $uri_segment=2, $num_links=2)
{
    $ci =& get_instance();
    $ci->load->library('pagination');

    $config['base_url'] = @$url;
    $config['num_links'] = $num_links;
    $config['uri_segment'] = $uri_segment;
    $config['total_rows'] = @$total;
    $config['per_page'] = @$perpage ? $perpage : 10;

    $config['full_tag_open'] = '<div class="box-paging"><ul class="pagination pagination-sm no-margin pull-right">';
    $config['full_tag_close'] = '</ul></div>';

    $config['first_link'] = 'First';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';

    $config['last_link'] = 'Last';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';

    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';

    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';

    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';

    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';

    $ci->pagination->initialize($config);

    return $ci->pagination->create_links();
}

function IdPDF(){
    $CI =& get_instance();
    $CI->load->model('M_global');

    $last_IdPDF = $CI->M_global->get_last_IdPDF();
    if($last_IdPDF){
        $a=substr($last_IdPDF,1,9)+1;
        if(strlen($a)==1){ $konten='000000000'.$a; }
        else if(strlen($a)==2){ $konten='00000000'.$a; }
        else if(strlen($a)==3){ $konten='0000000'.$a; }
        else if(strlen($a)==4){ $konten='000000'.$a; }
        else if(strlen($a)==5){ $konten='00000'.$a; }
        else if(strlen($a)==6){ $konten='0000'.$a; }
        else if(strlen($a)==7){ $konten='000'.$a; }
        else if(strlen($a)==8){ $konten='00'.$a; }
        else if(strlen($a)==9){ $konten='0'.$a; }
        else if(strlen($a)==10){ $konten=$a; }
    }
    
    if($konten) return $konten; 
    else return FALSE; 
}

function AutoNIK(){
    $CI =& get_instance();
    $CI->load->model('M_global');

    $last_NIK = $CI->M_global->get_last_NIK();   
    if($last_NIK){
        $a=substr($last_NIK,1,15)+1;
        if(strlen($a)==1){ $konten='B00000000000000'.$a; }
        else if(strlen($a)==2){ $konten='B0000000000000'.$a; }
        else if(strlen($a)==3){ $konten='B000000000000'.$a; }
        else if(strlen($a)==4){ $konten='B00000000000'.$a; }
        else if(strlen($a)==5){ $konten='B0000000000'.$a; }
        else if(strlen($a)==6){ $konten='B000000000'.$a; }
        else if(strlen($a)==7){ $konten='B00000000'.$a; }
        else if(strlen($a)==8){ $konten='B0000000'.$a; }
        else if(strlen($a)==9){ $konten='B000000'.$a; }
        else if(strlen($a)==10){ $konten='B00000'.$a; }
        else if(strlen($a)==11){ $konten='B0000'.$a; }
        else if(strlen($a)==12){ $konten='B000'.$a; }
        else if(strlen($a)==13){ $konten='B00'.$a; }
        else if(strlen($a)==14){ $konten='B0'.$a; }
        else if(strlen($a)==15){ $konten='B'.$a; }
    }

    if($konten) return $konten; 
    else return FALSE; 
}

function absensi_config($config_name)
{
  $CI =& get_instance();
  $CI->load->model('M_global');

  $value = $CI->M_global->get_absensi_config_value($config_name);
  if($value) return $value; 
  else return FALSE;
}

function cuti_value($config_name)
{
  $CI =& get_instance();
  $CI->load->model('M_global');

  $value = $CI->M_global->get_cuti_config_value($config_name);
  if($value) return $value; 
  else return FALSE;
}
?>

<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
if(!function_exists('active_link')) {
    function activate_menu($controller) {
        $CI = get_instance();
        $class = $CI->router->fetch_class();
        return ($class == $controller) ? 'active' : "";
    }
}
?>