<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratKeluar extends CI_Controller {
	function __construct(){
        parent::__construct();
        
        $this->load->model('Main_model', 'main');
        $this->load->library('session');
    }
	public function index()
	{
		$data['user'] 		    = $this->session->userdata('nama_user');
		$id_role 				= $this->session->userdata('id_role');
		$data['menu'] 			= $this->main->get_menu_selected($id_role); 
        $data['surat_keluar']   = $this->main->get_data_join('tbl_surat_keluar','tbl_opd','tbl_surat_keluar.id_opd = tbl_opd.id_opd');

		$this->load->view('suratkeluar/index',$data);
    }
    public function add_data(){
        $data['user'] 		    = $this->session->userdata('nama_user');
		$id_role 				= $this->session->userdata('id_role');
		$data['menu'] 			= $this->main->get_menu_selected($id_role); 
        $data['opd']            = $this->main->get_data('tbl_opd');
        $data['ket_kegiatan']   = $this->main->get_data('tbl_ket_kegiatan');
        $data['tools']          = $this->main->get_data('tbl_jenisalat');

		$this->load->view('suratkeluar/tambah',$data);
    }
    public function save_data(){
        $data['id_opd']         = $this->input->post('id_opd');
        $data['tgl_surat']      = $this->input->post('tgl_surat');
        $data['nama_pelaksana'] = $this->input->post('nama_pelaksana');
        $data['check_fiber']    = $this->input->post('check_fiber');
        $data['check_router']   = $this->input->post('check_router');
        $data['note_router']    = $this->input->post('note_router');
        $data['check_firewall'] = $this->input->post('check_firewall');
        $data['check_bandwidth']= $this->input->post('check_bandwidth');
        $data['check_hotspot']  = $this->input->post('check_hotspot');
        $data['note_nms']       = $this->input->post('note_nms');
        $data['check_finger']   = $this->input->post('check_finger');
        $data['note_finger']    = $this->input->post('note_finger');
        $data['jml_konektor']   = $this->input->post('jml_konektor');
        $data['jml_utp']        = $this->input->post('jml_utp');
        $data['note_tambahan']  = $this->input->post('note_tambahan');

        $this->main->insert_data('tbl_surat_keluar',$data);
        $id_surat = $this->db->insert_id();
        $data['jenis_kegiatan'] = $this->input->post('jenis_kegiatan');
        foreach($data['jenis_kegiatan'] as $row_data){
            $data_detail = array(
                'id_surat' => $id_surat,
                'id_kegiatan'   => $row_data
            );
            $this->main->insert_data('tbl_detail_kegiatan',$data_detail);
        }
        $data['jenis_alat'] = $this->input->post('jenis_alat');
        foreach($data['jenis_alat'] as $row_data){
            $data_detail = array(
                'id_surat' => $id_surat,
                'id_jenis'   => $row_data
            );
            $this->main->insert_data('tbl_detail_alat',$data_detail);
        }
        redirect('suratkeluar/index');
    }

    public function cetak_data($id){
		$mpdf = new \Mpdf\Mpdf();
        $data['data_surat']= $this->main->print_data_surat($id);
        // $data['data_detail_detail']= $this->main->print_data_detail($id);
        $data['data_kegiatan'] = $this->main->get_data_detail_kegiatan_surat($id);
        $data['data_alat'] = $this->main->get_data_detail_alat_surat($id);
        // echo $this->db->last_query();die();
        $html = $this->load->view('suratkeluar/cetak',$data,true);
        // $data = $this->load->view('suratkeluar/cetak', [], TRUE);
        // echo $this->db->last_query();die();
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }
    public function delete_data(){
        $where['id_surat'] 		= $this->input->post('id_surat');
		
        $this->main->delete_data('tbl_surat_keluar',$where);
        $this->main->delete_data('tbl_detail_kegiatan',$where);
        $this->main->delete_data('tbl_detail_alat',$where);
		redirect('suratkeluar/index');
    }
}