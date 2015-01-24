<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index(){
		$sql = "select lower(option_value) as option_value from cm_options where option_type = 'CONFIG' and option_name = 'DEFAULT_LANGUAGE'";
		$query = $this->db->query($sql);
		$default_language = $query->row_array();
		$params['header']['current_lang'] = ($this->uri->segment(1))? $this->uri->segment(1): $default_language['option_value'];
		$params['footer']['current_lang'] = $params['header']['current_lang'];
		$sql = "select option_name, option_value from cm_options where option_type = upper(?) order by row_id;";
		$query = $this->db->query($sql, 'menus_'.$params['header']['current_lang']);
		$params['header']['menus'] = $query->result_array();
		$sql = "select row_id, product_type_name_".$params['header']['current_lang']." as product_type_name from cm_product_type where parent_row_id = 0 order by 1;";
		$query = $this->db->query($sql);
		$params['header']['menus'][2]['dropdown'] = $query->result_array();
		$params['header']['current_view'] = ($this->uri->segment(2))? $this->uri->segment(2): 'home';
		$params['footer']['current_view'] = $params['header']['current_view'];

		$this->load->view('header', $params['header']);
		$this->load->view('contact_view');
		$this->load->view('footer', $params['footer']);
	}
}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */