 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{

		$data = array(
			"title_pag" => "Gerencia Bar - Home"
		);

		$this->template->show('home', $data);
	}

	public function novo(){
		echo "Teste";
	}

}
