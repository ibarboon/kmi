<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index() {
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

		$params['header']['row_id'] = ($this->uri->segment(3))? $this->uri->segment(3): 0;

		$sql = 'select product_type_name_'.$params['header']['current_lang'].' as "product_type_name" from cm_product_type where row_id = ?;';
		$query = $this->db->query($sql, $params['header']['row_id']);
		$params['body'] = $query->row_array();

		//get product sub type by product type id
		$sql = 'select * from cm_product_type where parent_row_id = ? order by ?;';
		$query = $this->db->query($sql,
			array($params['header']['row_id'],
				'product_type_name_'.$params['header']['current_lang']
			)
		);
		$params['body']['product_type_list'] = $query->result_array();
		foreach($params['body']['product_type_list'] as $key => $value) {
			$sql = 'select row_id, product_name_'.$params['header']['current_lang'].' as "product_name", product_image from cm_products where product_type_id = ? order by ?;';
			$query = $this->db->query($sql,
					array($value['row_id'],
							'product_name_'.$params['header']['current_lang']
					)
			);
			$params['body']['product_type_list'][$key]['product_list'] = $query->result_array();
		}
		$this->load->view('header', $params['header']);
		$this->load->view('products/index', $params['body']);
		$this->load->view('footer', $params['footer']);
	}

	public function detail(){
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

		$params['header']['row_id'] = ($this->uri->segment(3))? $this->uri->segment(3): 0;
		
		$sql = 'select * from cm_products where row_id = ?;';
		$query = $this->db->query($sql, $params['header']['row_id']);
		$params['body'] = $query->row_array();
		
		$this->load->view('header', $params['header']);
		$this->load->view('product_detail', $params['body']);
		$this->load->view('footer', $params['footer']);
	}
}

/* End of file products.php */
/* Location: ./application/controllers/products.php */