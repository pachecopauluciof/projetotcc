 <?php
 defined('BASEPATH') OR exit('no direct script access allowed');

 class Mesas extends CI_Controller{

 	public function index(){

 		$this->load->model("mesas_model");

 		$mesas = $this->mesas_model->getMesas();

 		$data = array(
 			"title_pag" => "Gerencia Bar - Mesas",
 			"mesas" => $mesas,
 			"scripts" => array(
 				'js/mesas.js',
 				'plugins/jsgrid/js/jsgrid.min.js',
 				'js/plugins-init/jsgrid-init.js'
 			),
 			"estilos" => array(
 				'plugins/jsgrid/css/jsgrid.min.css',
 				'plugins/jsgrid/css/jsgrid-theme.min.css'
 			)

 		);


 		$this->template->show('mesas', $data);


 	}

 	public function ajax_save_mesa(){
 		if(!$this->input->is_ajax_request()){
 			exit('Não é possivel acesso direto!');
 		}



 		$dados = $this->input->post();

 		$output = array(
 				'idmesa' => $dados['idmesa'],
 				'mesa' => $dados['mesa'],
 				'senhamesa' => $dados['senhamesa'],
 				'descricao' => $dados['descricao']
 		);

 		unset($dados["idmesa"]);

 		$this->load->model("mesas_model");
 		$mesas = $this->mesas_model->insert($dados);

 		echo json_encode($mesas);


 	}

 	public function ajax_update_mesa(){
 		if(!$this->input->is_ajax_request()){
 			exit('Não é possivel acesso direto!');
 		}

 		$dados = $this->input->post();

 		echo json_encode($dados);

 		$id_mesa = $dados["idmesa"];
 		unset($dados["idmesa"]);

 		$this->load->model("mesas_model");
 		$mesas = $this->mesas_model->update($id_mesa, $dados);

 	}

 	public function ajax_delete_mesa(){
 		if(!$this->input->is_ajax_request()){
 			exit('Não é possivel acesso direto!');
 		}
 		//Dados POST
 		$dados = $this->input->post();
 		$mesa_id = $dados["idmesa"];

 		//Model
 		$this->load->model("mesas_model");
 		
 		$this->mesas_model->delete($mesa_id);

 	}

 	public function get_mesas_ajax(){
 		$this->load->model("mesas_model");
 		$mesas = $this->mesas_model->getMesas();


 		foreach($mesas as $mesa){
 			$output[] = array(

 				'idmesa' => $mesa['idmesa'],
 				'mesa' => $mesa['mesa'],
 				'senhamesa' => $mesa['senhamesa'],
 				'descricao' => $mesa['descricao']
 			);
 		}

 		if(isset($output)){
 			echo json_encode($output);
 		}else{
 			$output = array();

 			echo json_encode($output);
 		}
 	}


 }