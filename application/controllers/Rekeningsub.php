<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekeningsub extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('Main_model', 'main');
        $this->load->library('session');
    }
	public function index()
	{
		$id_role 				= $this->session->userdata('id_role');
		$data['menu'] 			= $this->main->get_menu_selected($id_role); 
		$data['sub_rek'] 	    = $this->main->get_data_join('tbl_sub_rek','tbl_rekening','tbl_sub_rek.id_rekening = tbl_rekening.id_rekening');

		$this->load->view('sub_rekening/index',$data);
	}
	public function add_data(){
		$id_role 				= $this->session->userdata('id_role');
        $data['menu'] 			= $this->main->get_menu_selected($id_role);
        $data['rekening']       = $this->main->get_data('tbl_rekening'); 

		$this->load->view('sub_rekening/tambah',$data);
	}
	public function save_data(){
		$data['id_rekening'] 	= $this->input->post('id_rekening');
		$data['uraian_sub_rek'] = $this->input->post('uraian_sub_rek');


		$this->main->insert_data('tbl_sub_rek',$data);
		redirect('rekeningsub/index');
	}
	public function edit_data($id_sub_rek){
		$id_role 				= $this->session->userdata('id_role');
		$data['menu'] 			= $this->main->get_menu_selected($id_role); 
		$where 					= ['id_sub_rek' => $id_sub_rek];
		$data['sub_rekening'] 	= $this->main->get_data_where('tbl_sub_rek',$where);
		$data['rekening']       = $this->main->get_data('tbl_rekening'); 

		$this->load->view('sub_rekening/ubah',$data);
	}
	public function update_data(){
		$where['id_sub_rek'] 	= $this->input->post('id_sub_rek');
		$data['id_rekening'] 	= $this->input->post('id_rekening');
		$data['uraian_sub_rek'] = $this->input->post('uraian_sub_rek');

		$this->main->update_data('tbl_sub_rek',$data,$where);
		redirect('rekeningsub/index');
	}
	public function delete_data(){
		$where['id_sub_rek'] 	= $this->input->post('id_sub_rek');
		
		$this->main->delete_data('tbl_sub_rek',$where);
		redirect('rekeningsub/index');
	}
}
