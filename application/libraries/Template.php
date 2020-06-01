 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Template {
 
		function show($view, $data=array()){
 
			$CI = & get_instance();
 
			// Load header
			$CI->load->view('template/header',$data);
 
			// Load content
			$CI->load->view($view,$data);
 
			// Load footer
			$CI->load->view('template/footer',$data);
 
			// Scripts
			$CI->load->view('template/script',$data);
		}

		function show_login($data = array()){
			$CI = & get_instance();

			$CI->load->view('template/login',$data);

		}

		function show_cadastro($data = array()){
			$CI = & get_instance();

			$CI->load->view('template/cadastro',$data);
			
		}
}
 
/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */