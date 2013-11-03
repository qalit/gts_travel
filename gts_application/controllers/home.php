<?php if (! defined('BASEPATH')) exit (('No direct script access allowed'));

/**
 * HOME Class
 * untuk direct home addres,ketika http response diterima
 */
class Home extends CI_Controller {
	
	function __construct() { parent::__construct();}
    public function index (){
        $usersnip = $this->session->userdata('nip');
        if (($usersnip == '') || (!isset ($usersnip))){
            $this->load->view('view_login');
        } else {
            redirect('dashboard');
        }
    }
}