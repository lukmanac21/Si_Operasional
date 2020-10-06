<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jenis extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('main');
        $this->load->library('session');
    }
	public function index()
	{
        $id_role 				    = $this->session->userdata('id_role');
		$data['menu'] 			    = $this->main->get_menu_selected($id_role); 
        $data['jenis'] 		    = $this->main->get_data('tbl_jenis'); 
		$this->load->view('jenis/index',$data);
	}
	public function add_data(){
		$id_role 				    = $this->session->userdata('id_role');
        $data['menu'] 			    = $this->main->get_menu_selected($id_role); 
		$this->load->view('jenis/tambah',$data);
	}
	public function save_data(){
        $data['nama_jenis']      = $this->input->post('nama_jenis');
		
		$this->main->insert_data('tbl_jenis',$data);
		redirect('jenis/index');
	}
	public function edit_data($id_jenis){
		$id_role 				    = $this->session->userdata('id_role');
		$data['menu'] 			    = $this->main->get_menu_selected($id_role); 
		$where 					    = ['id_jenis' => $id_jenis];
		$data['jenis'] 			= $this->main->get_data_where('tbl_jenis',$where);
		$this->load->view('jenis/ubah',$data);
	}
	public function update_data(){
		$where['id_jenis'] 		= $this->input->post('id_jenis');
		$data['nama_jenis']      = $this->input->post('nama_jenis');

		$this->main->update_data('tbl_jenis',$data,$where);
		redirect('jenis/index');
	}
	public function delete_data(){
		$where['id_jenis'] 		= $this->input->post('id_jenis');
		
		$this->main->delete_data('tbl_jenis',$where);
		redirect('jenis/index');
	}
}
