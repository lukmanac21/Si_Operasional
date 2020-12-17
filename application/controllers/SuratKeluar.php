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

		$this->load->view('suratkeluar/tambah',$data);
    }
}