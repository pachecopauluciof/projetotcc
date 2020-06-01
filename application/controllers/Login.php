 <?php
 defined('BASEPATH') OR exit('no direct script access allowed');

 class Login extends CI_Controller{

 	public function index(){

 		$this->load->model("login_model");
 		#print_r($this->login_model->get_user_data("pachecopauluciof");

 		$data = array(
 			"title_pag" => "Login - Gestor",
 			"scripts" => array(
 				'js/login.js',
 				'js/util.js'
 			)

 		);

 		$this->template->show_login($data);


 	}

 	function ajax_login(){

 		$json = array();
 		$json["status"] = 1;
 		$username = $this->input->post("username");
 		$password = $this->input->post("password");

 		$this->load->model("login_model");
 		$result = $this->login_model->get_user_data($username);

 		if($result){
 			$user_id = $result->idusuario;
 			$password_hash = $result->senha;

 			if(password_verify($password, $password_hash)){
 				$this->session_set_userdata("user_id", $user_id);
 			}else {
 				$json["status"] = 0;
 			}
 		}

 		echo json_encode($json);


 	}

 	


 }