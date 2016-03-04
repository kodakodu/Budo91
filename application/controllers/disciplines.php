<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disciplines extends CI_Controller {

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
	 
	public function index()
	{
		$this->load->model('model_disciplines');
		
		$data = array();
		
		$data['disciplines_liste'] = $this->model_disciplines->get_disciplines();
		
		$this->load->view('templates/header.php');
		$this->load->view('pages/disciplines', $data);
		$this->load->view('templates/footer.php');
	}
}
