<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {

	public function index($halaman = 'index')
	{

        if(!file_exists(APPPATH.'views/halaman/'.$halaman.'.php')){
            show_404();
        }
        
        $data = array('title' => $halaman);

        $this->load->view('fragment/header', $data);
		$this->load->view('halaman/'.$halaman);
        $this->load->view('fragment/footer');
	}
}
