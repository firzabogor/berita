<?php

class Berita_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function get($slug = FALSE){
        if($slug == FALSE){
            $data = $this->db->get('berita');
            return $data->result_array();
        }
        $data = $this->db->get_where('berita', array('slug' => $slug));
        return $data->row_array();
    }

    public function find($id){
        $data = $this->db->get_where('berita', array('id' => $id));
        return $data->row_array();
    }

    public function create(){
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'content' => $this->input->post('content')
        );

        return $this->db->insert('berita', $data);
    }

    public function update($id){
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'content' => $this->input->post('content')
        );

        $this->db->where('id',$id);
        return $this->db->update('berita', $data);
    }

    public function delete($id){
        return $this->db->delete('berita', array('id' => $id));
    }
}