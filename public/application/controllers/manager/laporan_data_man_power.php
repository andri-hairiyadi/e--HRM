<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Laporan_data_man_power extends CI_Controller {

public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('masuk');
		}
		$this->load->helper('text');
				$this->load->helper('tgl_indonesia');
	}

	public function index()
	{
		$data['nama'] = $this->session->userdata('nama');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['isi']	= $this->model_data_man_power->tampil();
		$data['data']	= $this->model_data_user->login_manager();
		$data['content']='manager/laporan_data_man_power/tampilan_laporan_data_man_power';
		$this->load->view('manager/tampilan_home',$data);
	}
	public function aktif()
{
	$data['nama'] = $this->session->userdata('nama');
	$data['id_user'] = $this->session->userdata('id_user');
	$data['data'] = $this->model_data_user->login_hrd();
	$data['isi']  = $this->model_data_man_power->tampil_aktif();
	$data['content']='manager/laporan_data_man_power/tampilan_data_man_power_aktif';
	$this->load->view('manager/tampilan_home',$data);
}
public function non_aktif()
{
$data['nama'] = $this->session->userdata('nama');
$data['id_user'] = $this->session->userdata('id_user');
$data['data'] = $this->model_data_user->login_hrd();
$data['isi']  = $this->model_data_man_power->tampil_non_aktif();
$data['content']='manager/laporan_data_man_power/tampilan_data_man_power_non_aktif';
$this->load->view('manager/tampilan_home',$data);
}

  public function detail($id)
  {
    $data['nama'] = $this->session->userdata('nama');
    $data['id_user'] = $this->session->userdata('id_user');
    $data['data'] = $this->model_data_user->login_hrd();
    $data['pendidikan'] = $this->model_data_man_power->pendidikan($id);
    $data['riwayat']  = $this->model_data_man_power->riwayat($id);
    $data['pengalaman'] = $this->model_data_man_power->pengalaman($id);
    $data['anak'] = $this->model_data_man_power->anak($id);
    $data['saudara']  = $this->model_data_man_power->saudara($id);
    $data['detail'] = $this->model_data_man_power->detail($id);
    $data['content']='manager/laporan_data_man_power/detail_data_man_power';
    $this->load->view('manager/tampilan_home',$data);

  }

 public function cetak()
  {
     $data['isi']    = $this->model_data_man_power->tampil();

    ob_start();
    $content = $this->load->view('hrd/data_man_power/tampilan_cetak_data_man_power',$data);
    $content = ob_get_clean();
    $this->load->library('html2pdf');
    try
    {
      $html2pdf = new HTML2PDF('L', 'A4', 'fr');
      $html2pdf->pdf->SetDisplayMode('fullpage');
      $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
      $html2pdf->Output('Data_Man_Power.pdf');
    }
    catch(HTML2PDF_exception $e) {
      echo $e;
      exit;
    }
  }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
