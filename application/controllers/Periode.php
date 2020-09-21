<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Periode extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('main');
        $this->load->library('session');
    }
	public function index()
	{
        $id_role 				    = $this->session->userdata('id_role');
		$data['menu'] 			    = $this->main->get_menu_selected($id_role); 
        $data['periode'] 		    = $this->main->get_data('tbl_periode'); 
		$this->load->view('periode/index',$data);
	}
	public function add_data(){
		$id_role 				    = $this->session->userdata('id_role');
        $data['menu'] 			    = $this->main->get_menu_selected($id_role); 
		$this->load->view('periode/tambah',$data);
	}
	public function save_data(){
        $data['tgl_mulai'] 	    = $this->input->post('tgl_mulai');
        $data['tgl_akhir']    = $this->input->post('tgl_akhir');
		
		$this->main->insert_data('tbl_periode',$data);
		redirect('periode/index');
	}
	public function edit_data($id_periode){
		$id_role 				    = $this->session->userdata('id_role');
		$data['menu'] 			    = $this->main->get_menu_selected($id_role); 
		$where 					    = ['id_periode' => $id_periode];
		$data['periode'] 			= $this->main->get_data_where('tbl_periode',$where);
		$this->load->view('periode/ubah',$data);
	}
	public function update_data(){
		$where['id_periode'] 		= $this->input->post('id_periode');
        $data['tgl_mulai'] 	    = $this->input->post('tgl_mulai');
        $data['tgl_akhir']    = $this->input->post('tgl_akhir');

		$this->main->update_data('tbl_periode',$data,$where);
		redirect('periode/index');
	}
	public function delete_data(){
		$where['id_periode'] 		= $this->input->post('id_periode');
		
		$this->main->delete_data('tbl_periode',$where);
		redirect('periode/index');
	}
}
