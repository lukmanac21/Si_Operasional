<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('main');
        $this->load->library('session');
    }
	public function index()
	{
        $id_role 				    = $this->session->userdata('id_role');
		$data['menu'] 			    = $this->main->get_menu_selected($id_role); 
        $data['kegiatan'] 		    = $this->main->get_data('tbl_kegiatan'); 
		$this->load->view('kegiatan/index',$data);
	}
	public function add_data(){
		$id_role 				    = $this->session->userdata('id_role');
        $data['menu'] 			    = $this->main->get_menu_selected($id_role); 
		$this->load->view('kegiatan/tambah',$data);
	}
	public function save_data(){
        $data['kode_kegiatan'] 	    = $this->input->post('kode_kegiatan');
        $data['nama_kegiatan']      = $this->input->post('nama_kegiatan');
		
		$this->main->insert_data('tbl_kegiatan',$data);
		redirect('kegiatan/index');
	}
	public function edit_data($id_kegiatan){
		$id_role 				    = $this->session->userdata('id_role');
		$data['menu'] 			    = $this->main->get_menu_selected($id_role); 
		$where 					    = ['id_kegiatan' => $id_kegiatan];
		$data['kegiatan'] 			= $this->main->get_data_where('tbl_kegiatan',$where);
		$this->load->view('kegiatan/ubah',$data);
	}
	public function update_data(){
		$where['id_kegiatan'] 		= $this->input->post('id_kegiatan');
        $data['kode_kegiatan'] 	    = $this->input->post('kode_kegiatan');
		$data['nama_kegiatan']      = $this->input->post('nama_kegiatan');

		$this->main->update_data('tbl_kegiatan',$data,$where);
		redirect('kegiatan/index');
	}
	public function delete_data(){
		$where['id_kegiatan'] 		= $this->input->post('id_kegiatan');
		
		$this->main->delete_data('tbl_kegiatan',$where);
		redirect('kegiatan/index');
	}
}
