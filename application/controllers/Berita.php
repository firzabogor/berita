<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('berita_model');
        $this->load->helper('url_helper');
    }

	public function index()
	{
		$data['berita'] = $this->berita_model->get();
        $this->load->view('berita/index', $data);
	}

    public function detail($slug = NULL)
    {
        $data['berita_item'] = $this->berita_model->get($slug);

        $this->load->view('berita/detail', $data);
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('berita/create');
        } else {
            $this->berita_model->create();
            redirect('berita');
        }
    }

    public function update($id)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');

        if($this->form_validation->run() === FALSE){
            $data['berita_item'] = $this->berita_model->find($id);
            $this->load->view('berita/update', $data);
        } else {
            $this->berita_model->update($id);
            redirect('berita');
        }
    }

    public function delete($id)
    {
        $this->berita_model->delete($id);
        redirect('berita');
    }
}
