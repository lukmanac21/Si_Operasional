<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RKA extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model', 'main');
		$this->load->library('session');
	}
	public function index()
	{
		$id_role 				    = $this->session->userdata('id_role');
		$data['menu'] 			    = $this->main->get_menu_selected($id_role);
		$data['rka'] 		        = $this->main->get_data('tbl_rka');
		$this->load->view('rka/index', $data);
	}
	public function add_data()
	{
		$id_role 				    = $this->session->userdata('id_role');
		$data['menu'] 			    = $this->main->get_menu_selected($id_role);
		$this->load->view('rka/tambah', $data);
	}
	public function save_data()
	{
		$data['nama_rka'] 	    = $this->input->post('nama_rka');
		$data['pagu']    = $this->input->post('pagu');

		$this->main->insert_data('tbl_rka', $data);
		redirect('rka/index');
	}
	public function edit_data($id_rka)
	{
		$id_role 				    = $this->session->userdata('id_role');
		$data['menu'] 			    = $this->main->get_menu_selected($id_role);
		$where 					    = ['id_rka' => $id_rka];
		$data['rka'] 			    = $this->main->get_data_where('tbl_rka', $where);
		$this->load->view('rka/ubah', $data);
	}
	public function update_data()
	{
		$where['id_rka'] 		= $this->input->post('id_rka');
		$data['kode_rka'] 	    = $this->input->post('kode_rka');
		$data['uraian_rka']    = $this->input->post('uraian_rka');

		$this->main->update_data('tbl_rka', $data, $where);
		redirect('rka/index');
	}
	public function delete_data()
	{
		$where['id_rka'] 		= $this->input->post('id_rka');

		$this->main->delete_data('tbl_rka', $where);
		redirect('rka/index');
	}
	public function detail_data($id)
	{
		$id_role 				    = $this->session->userdata('id_role');
		$data['menu'] 			    = $this->main->get_menu_selected($id_role);
		$data['detail_rka'] 		= $this->main->get_data_three('tbl_detail_rka', 'tbl_rka', 'tbl_detail_rka.id_rka = tbl_rka.id_rka', 'tbl_rekening', 'tbl_detail_rka.id_rekening = tbl_rekening.id_rekening', 'tbl_satuan', 'tbl_detail_rka.id_satuan = tbl_satuan.id_satuan', 'tbl_detail_rka.id AS id, tbl_detail_rka.id_rekening AS id_rekening, sub_total_detail, kode_rekening, uraian_rekening, nama_satuan, jumlah, harga, keterangan', 'id_rekening');
		$this->load->view('rka/detailrka', $data);
	}
	public function add_detail()
	{
		$id_role 				    = $this->session->userdata('id_role');
		$data['menu'] 			    = $this->main->get_menu_selected($id_role);
		$data['rka']				= $this->main->get_data('tbl_rka');
		$data['rekening']			= $this->main->get_data('tbl_rekening');
		$data['satuan']				= $this->main->get_data('tbl_satuan');

		$this->load->view('rka/tambahdetail', $data);
	}
	public function save_detail()
	{
		$data['id_rka'] 	    	= $this->input->post('id_rka');
		$data['id_rekening']    	= $this->input->post('id_rekening');
		$data['id_satuan']    		= $this->input->post('id_satuan');
		$data['keterangan']    		= $this->input->post('keterangan');
		$data['jumlah']    			= $this->input->post('jumlah');
		$data['harga']    			= $this->input->post('harga');
		$data['sub_total_detail']   = $this->input->post('sub_total');

		$this->main->insert_data('tbl_detail_rka', $data);
		// echo $this->db->last_query();
		redirect('rka/index');
	}
	public function edit_detail($id_detailrka)
	{
		$id_role 				    = $this->session->userdata('id_role');
		$data['menu'] 			    = $this->main->get_menu_selected($id_role);
		$data['rka']				= $this->main->get_data('tbl_rka');
		$data['rekening']			= $this->main->get_data('tbl_rekening');
		$data['satuan']			= $this->main->get_data('tbl_satuan');
		$where 					    = ['id' => $id_detailrka];
		$data['detail_rka'] 		= $this->main->get_data_where_one_row('tbl_detail_rka', $where);
		$this->load->view('rka/ubahdetail', $data);
	}
	public function update_detail()
	{
		$where['id'] 				= $this->input->post('id_detail');
		$data['id_rka'] 	    	= $this->input->post('id_rka');
		$data['id_rekening']    	= $this->input->post('id_rekening');
		$data['id_satuan']    		= $this->input->post('id_satuan');
		$data['keterangan']    		= $this->input->post('keterangan');
		$data['jumlah']    			= $this->input->post('jumlah');
		$data['harga']    			= $this->input->post('harga');
		$data['sub_total_detail']   = $this->input->post('sub_total');

		$this->main->update_data('tbl_detail_rka', $data, $where);
		redirect('rka/detail_data/' . $this->input->post('id_detail'));
	}
	public function delete_detail()
	{
		$where['id'] 		= $this->input->post('id');

		$this->main->delete_data('tbl_detail_rka', $where);
		redirect('rka/detail_data/' . $this->input->post('id'));
	}
	public function detail_sub_data($id)
	{
		$id_role 				    = $this->session->userdata('id_role');
		$data['menu'] 			    = $this->main->get_menu_selected($id_role);
		$data['detail_rka'] 		= $this->main->get_data_two('tbl_detail_rka', 'tbl_rka', 'tbl_detail_rka.id_rka = tbl_rka.id_rka', 'tbl_rekening', 'tbl_detail_rka.id_rekening = tbl_rekening.id_rekening', 'tbl_detail_rka.id AS id, total, kode_rekening, uraian_rekening, sub_total_detail');
		// echo $this->db->last_query();
		$this->load->view('rka/detailsubrka', $data);
	}
}
