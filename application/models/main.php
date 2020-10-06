<?php
defined('BASEPATH') or exit('No direct script access allowed');

class main extends CI_MODEL
{
    function check_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    function get_login_data($table, $where)
    {
        $query = $this->db->get_where($table, $where);
        return $query->row_array();
    }
    function get_data($table)
    {
        $query = $this->db->get($table);
        return $query->result();
    }
    function get_data_where($table, $where)
    {
        $query = $this->db->get_where($table, $where);
        return $query->result();
    }
    function get_data_periode($table, $where)
    {
        $query = $this->db->get_where($table, $where);
        return $query->row();
    }
    function get_data_where_dinas($table, $where)
    {
        $query = $this->db->select('*')->from($table)->where($where)->get();
        return $query->result();
    }
    function get_data_join($table, $table_join, $where)
    {
        $query = $this->db->select('*')->from($table)->join($table_join, $where)->get();
        return $query->result();
    }
    function get_data_two($table, $table_join, $where, $table_joins, $wheres)
    {
        $query = $this->db->select('*')->from($table)->join($table_join, $where)->join($table_joins, $wheres)->get();
        return $query->result();
    }
    function get_data_three($table, $table_join_one, $where_one, $table_join_two, $where_two, $table_join_three, $where_three)
    {
        $query = $this->db->select('*')->from($table)->join($table_join_one, $where_one)->join($table_join_two, $where_two)->join($table_join_three, $where_three)->get();
        return $query->result();
    }
    function get_data_join_where($table, $table_join, $where_join, $where)
    {
        $query = $this->db->select('*')->from($table)->join($table_join, $where_join)->where($where)->get();
        return $query->result();
    }
    function get_data_sub_rek($id)
    {
        $query = $this->db->select('*')
            ->from('tbl_sub_rek as sr')
            ->join('tbl_anggaran as a', 'a.id_sub_rek = sr.id_sub_rek', 'left')
            ->join('tbl_periode as p', 'a.id_periode = p.id_periode', 'left')
            ->where($id)
            ->group_by('a.id_sub_rek')
            ->get();
        return $query->result();
    }
    function get_data_rekening($id = "")
    {
        $query = $this->db->select('*')
            ->from('tbl_anggaran as a')
            ->join('tbl_periode as b', ' a.id_periode = b.id_periode', 'left')
            ->join('tbl_rekening as c', ' c.id_rekening = a.id_sub_rek', 'left')
            ->where('a.id_anggaran', $id)->get();
        return $query->result_array();
    }
    function get_data_two_where($table, $table_join_one, $where_one, $table_join_two, $where_two, $where)
    {
        $query = $this->db->select('*')->from($table)->join($table_join_one, $where_one)->join($table_join_two, $where_two)->where($where)->get();
        return $query->result();
    }
    function get_data_three_where($table, $table_join_one, $where_one, $table_join_two, $where_two, $table_join_three, $where_three, $where)
    {
        $query = $this->db->select('*')->from($table)->join($table_join_one, $where_one)->join($table_join_two, $where_two)->join($table_join_three, $where_three)->where($where)->get();
        return $query->result();
    }
    function get_data_sub_detail($where)
    {
        // echo'<pre>';print_r($where);
        // exit;
        $query = $this->db->select('*')
            ->from('tbl_npd')
            ->join('tbl_npd_detail', 'tbl_npd.id_npd = tbl_npd_detail.id_npd', 'left')
            ->join('tbl_npd_detail_sub', 'tbl_npd_detail_sub.id_npd_detail = tbl_npd_detail.id_npd_detail', 'left')
            ->join('tbl_sub_rek', 'tbl_sub_rek.id_sub_rek = tbl_npd_detail_sub.id_sub_rek', 'left')
            ->join('tbl_rekening', 'tbl_rekening.id_rekening = tbl_sub_rek.id_rekening', 'left')
            ->where($where)
            ->get();
        return $query->result();
    }
    function get_where($where)
    {
        // echo'<pre>';print_r($where);
        // exit;
        $query = $this->db->select('*')
            ->from('tbl_npd')
            ->join('tbl_npd_detail', 'tbl_npd.id_npd = tbl_npd_detail.id_npd', 'left')
            ->where($where)
            ->get();
        return $query->row();
    }
    function get_menu_selected($role_id)
    {
        $this->db->select('*')
            ->from('tbl_user_access')
            ->join('tbl_sub_menu', 'tbl_user_access.id_sub_menu = tbl_sub_menu.id_sub_menu')
            ->join('tbl_menu', 'tbl_menu.id_menu = tbl_sub_menu.id_menu')
            ->where('tbl_user_access.id_role =', $role_id)
            ->group_by('tbl_menu.id_menu');
        $query = $this->db->get();
        return $query->result();
    }
    function insert_data($table, $data)
    {
        $this->db->insert($table, $data);
    }
    function update_data($table, $data, $where)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function delete_data($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function upload_file_barang()
    {

        $this->load->library('upload'); // Load librari upload


        $config['upload_path'] = './assets/img/barang/';
        $config['allowed_types'] = '*';
        $config['overwrite'] = true;
        $config['file_name'] = '';
        $this->upload->initialize($config); // Load konfigurasi uploadnya
        if ($this->upload->do_upload('file')) { // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }
}
