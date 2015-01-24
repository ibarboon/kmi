<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$option = array('option_key' => 'default_language', 'active_flag' => 'y');
		$default_language = $this->utility_model->get_option($option);
		$params['current_language'] = ($this->uri->segment(1))? $this->uri->segment(1): $default_language['option_value'];
		$option = array('option_type' => 'menu_'.$params['current_language'], 'active_flag' => 'y');
		$params['menu_list'] = $this->utility_model->get_option_list($option);
		$params['current_view'] = ($this->uri->segment(2))? $this->uri->segment(2): 'home';
		$product_type = array('parent_row_id' => 0);
		$params['product_type_list'] = $this->products_model->get_product_type_list($product_type);
		$this->load->view('header_view', $params);
		$this->load->view('home_view');
		$this->load->view('footer_view', $params);
/*
		echo '<pre>';
		print_r($params);
		echo '</pre>';
*/
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */