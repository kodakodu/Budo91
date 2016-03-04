<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clubs extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 /**public function view($pages = 'accueil')
	{
		if (! file_exists(APPPATH.'/views/pages/'.$pages.'.php'))
		{
			show_404();
		}
	
	
	//$data['title']= ucfirst($pages);
	
	$this->load->view('templates/header', $data);
	//$this->load->view('pages/'.$pages, $data);
	$this->load->view('pages/accueil', $data);
	$this->load->view('templates/footer', $data);
	}**/
	 	/*public function add_club()
	{
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		
		$this->email->from('kodakodu@gmail.com','kodakodu');
		$this->email->to('kodakodu@gmail');
		$this->email->subject('Test email');
		$this->email->message('Ceci est un test ');
		
		if($this->email->send())
		{
			echo 'Mail bien envoye';
		}
		else
		{
			show_error($this->email->print_debugger());
		}
	}*/
	public function index()
	{
		$this->load->model('model_clubs');
		
		$data = array();
		
		$data['clubs_liste'] = $this->model_clubs->get_clubs();
		$data['count_clubs'] = $this->model_clubs->count_clubs();
		$this->load->view('templates/header.php');
		$this->load->view('pages/clubs', $data);
		//$this->add_club();
		$this->load->view('templates/footer.php');
	}
	

}
