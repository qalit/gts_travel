<?php if (! defined('BASEPATH')) exit (('No direct script access allowed'));

/**
 * HOME Class
 * untuk direct home addres,ketika http response diterima
 */
class Home extends CI_Controller {
	
	function __construct() { parent::__construct();}
    public function home (){
        $breadcumb = array(
        "Home" => "/home",
        "city" => "/home/city",
        "Aceh" => ""
        );
        $data['breadcumb'] = $breadcumb;
        $this->load->view('home.php', $data);
    }
}
?>