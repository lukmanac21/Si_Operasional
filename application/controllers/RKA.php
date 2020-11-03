<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RKA extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('Main_model', 'main');
        $this->load->library('session');
    }
	public function index()
	{
        $id_role 				    = $this->session->userdata('id_role');
		$data['menu'] 			    = $this->main->get_menu_selected($id_role); 
        $data['rka'] 		        = $this->main->get_data('tbl_rka'); 
        var_dump($data['rka']);
		$this->load->view('rka/index',$data);
	}
	public function add_data(){
		$id_role 				    = $this->session->userdata('id_role');
        $data['menu'] 			    = $this->main->get_menu_selected($id_role); 
		$this->load->view('rka/tambah',$data);
	}
	public function save_data(){
        $data['kode_rka'] 	    = $this->input->post('kode_rka');
        $data['uraian_rka']    = $this->input->post('uraian_rka');
		
		$this->main->insert_data('tbl_rka',$data);
		redirect('rka/index');
	}
	public function edit_data($id_rka){
		$id_role 				    = $this->session->userdata('id_role');
		$data['menu'] 			    = $this->main->get_menu_selected($id_role); 
		$where 					    = ['id_rka' => $id_rka];
		$data['rka'] 			    = $this->main->get_data_where('tbl_rka',$where);
		$this->load->view('rka/ubah',$data);
	}
	public function update_data(){
		$where['id_rka'] 		= $this->input->post('id_rka');
        $data['kode_rka'] 	    = $this->input->post('kode_rka');
        $data['uraian_rka']    = $this->input->post('uraian_rka');

		$this->main->update_data('tbl_rka',$data,$where);
		redirect('rka/index');
	}
	public function delete_data(){
		$where['id_rka'] 		= $this->input->post('id_rka');
		
		$this->main->delete_data('tbl_rka',$where);
		redirect('rka/index');
	}
}
