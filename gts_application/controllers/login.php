<?php if(!defined ('BASEPATH')) exit ('No direct script allowed');

/**
 * Login form
 */
class Login extends CI_Controller {
	
	function __construct() {
		parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        
	}
    
    public function index(){
        $this->load->view('view_login');
        $this->load->view('home');
    }
    
    public function proses_login(){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        
        $sqlquery = "call sp_GetUserByUsernameAndPassword (?,?)";
        $result = $this->db->query($sqlquery, 
        array(mysql_escape_string($username), mysql_escape_string($password)), TRUE) -> $result();
        if (count($result) > 0 ){
            $sessionDataUser = array();
            foreach ($result as $row){
                $sessionDataUser = array('username' => $row->username, 'nip' => $row->nip );
            }
            $this->session->set_userdata($sessionDataUser);
            redirect('dashborad', 'refresh');
            } else {
                redirect('home', 'refresh');
            }             
               
    }
}
