<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2016, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

/**
 * Application Controller Class
 *
 * This class object is the super class that every library in
 * CodeIgniter will be assigned to.
 *
 * @package CodeIgniter
 * @subpackage Libraries
 * @category Libraries
 * @author EllisLab Dev Team
 * @link https://codeigniter.com/user_guide/general/controllers.html
 */
class CI_Controller {
	
	
	// -------------------------------------------------------------------- PRIVATE ATTRIBUTES
	
	/**
	 * Reference to the CI singleton
	 *
	 * @var object
	 */
	private static $instance;
	private static $lg;
	
	// -------------------------------------------------------------------- PUBLIC CONSTRUCTOR
	/**
	 * Class constructor
	 *
	 * @return void
	 */
	public function __construct() {
		self::$instance = & $this;
		
		// Assign all the class objects that were instantiated by the
		// bootstrap file (CodeIgniter.php) to local class variables
		// so that CI can run as one big super object.
		foreach ( is_loaded () as $var => $class ) {
			$this->$var = & load_class ( $class );
		}
		
		$this->load = & load_class ( 'Loader', 'core' );
		$this->load->initialize ();
		
		log_message ( 'info', 'Controller Class Initialized' );
	}
	
	/**
	 * Get the CI singleton
	 *
	 * @static
	 *
	 * @return object
	 */
	public static function &get_instance() {
		return self::$instance;
	}
	// -------------------------------------------------------------------- PRIVATE METHODS
	private function _isEditMode($data){
		if(isset($data['updateSessionEditMode'])){
			$this->session->set_userdata ('editMode', $data['updateSessionEditMode'] );
		}
		return $this->session->userdata('editMode');
	}
	// -------------------------------------------------------------------- PUBLIC METHODS
	public function followLink($body,$data=array()) {
		$this->render ( $data, $body );
	}
	private function alert($value){
		echo "<script>alert('".$value."');</script>";
	}
	public function getProperty($key){
		$query =$this->db->select()->from("cn_config")->where(array (
				'name' => $key
		))->get();
		if($query-> num_rows() == 1){
			$currentRow =$query->result();
			return $currentRow[0]->value;
		}else{
			return false;
		}
	}
	
	public function render($data = array(), $body = "commons/body", $head = "commons/header", $left = "commons/left", $footer = "commons/footer", $stringOutput = false) {

		if(!isset($data["removeBackground"])){
			$data["removeBackground"]=false;
		}
		$data ["head"] = $head;
		$data ["left"] = $left;
		$data ["body"] = $body;
		$data ["footer"] = $footer;
		$data ["stringOutput"] = $stringOutput;
		$data ["editMode"]=$this->_isEditMode($data);
		
		
		$this->load->helper ( 'ckeditor' );
		// Ckeditor's configuration
		$data ['ckeditor'] = array (
				
				// ID of the textarea that will be replaced
				'id' => 'content',
				'path' => 'scripts/ckeditor',
				'config' => array (
						'toolbar' => 'Full',
						'height' => '300px' 
						),
				'styles' => array(
							
						//Creating a new style named "style 1"
						'style 1' => array (
								'name' 		=> 	'Titre',
								'element' 	=> 	'h2',
								'styles' => array(
										'color' 	=> 	'#17954c',
										'font-weight' 	=> 	'bold',
										'font-size:'=>'200%',
										'border-bottom'=>'1px solid #17954c',
										'text-align'=>'left'
								)
						)
				
						
				)
				// Replacing styles from the "Styles tool"
		);
		
		$this->load->view ( "commons/main_layout", $data, $stringOutput );
	}
}
