<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loisirs extends CI_Controller {

	public function index()
	{
		
		$this->form_validation->set_rules('libelle','Libelle','trim|required|xss_clean');
		
		if ($this->form_validation->run()){
			$data = array(
					'libelle' =>$this->input->post('libelle'),
			);
		
			$this->Loisirs_model->new_loisirs($data);
		
			$data = $this->session->set_flashdata('info','Un loisirs '.'<b> '.$this->input->post('libelle').'a été créer</b>');
			//$info['success'] = 'Insertion réussie';
		
		
		
		}else{
		
		
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('loisirs/loisirs_add');
			$this->load->view('templates/footer');
		}
		
	}
}
