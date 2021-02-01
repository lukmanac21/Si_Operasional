<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jenisalat extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('Main_model', 'main');
        $this->load->library('session');
    }
	public function index()
	{
        $id_role 				    = $this->session->userdata('id_role');
		$data['menu'] 			    = $this->main->get_menu_selected($id_role); 
        $data['jenisalat'] 		    = $this->main->get_data('tbl_jenisalat'); 
		$this->load->view('jenisalat/index',$data);
	}
	public function add_data(){
		$id_role 				    = $this->session->userdata('id_role');
        $data['menu'] 			    = $this->main->get_menu_selected($id_role); 
		$this->load->view('jenisalat/tambah',$data);
	}
	public function save_data(){
        $data['nama_jenisalat']      = $this->input->post('nama_jenisalat');
		
		$this->main->insert_data('tbl_jenisalat',$data);
		redirect('jenisalat/index');
	}
	public function edit_data($id_jenisalat){
		$id_role 				    = $this->session->userdata('id_role');
		$data['menu'] 			    = $this->main->get_menu_selected($id_role); 
		$where 					    = ['id_jenisalat' => $id_jenisalat];
		$data['jenisalat'] 			= $this->main->get_data_where('tbl_jenisalat',$where);
		$this->load->view('jenisalat/ubah',$data);
	}
	public function update_data(){
		$where['id_jenisalat'] 		= $this->input->post('id_jenisalat');
		$data['nama_jenisalat']      = $this->input->post('nama_jenisalat');

		$this->main->update_data('tbl_jenisalat',$data,$where);
		redirect('jenisalat/index');
	}
	public function delete_data(){
		$where['id_jenisalat'] 		= $this->input->post('id_jenisalat');
		
		$this->main->delete_data('tbl_jenisalat',$where);
		redirect('jenisalat/index');
	}
}
