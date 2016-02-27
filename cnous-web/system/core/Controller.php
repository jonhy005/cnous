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
	
	/**
	 * Reference to the CI singleton
	 *
	 * @var object
	 */
	private static $instance;
	private static $lg;
	
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
	// --------------------------------------------------------------------
	public function render($data = array(), $body = "commons/body", $head = "commons/header", $left = "commons/left", $footer = "commons/footer", $stringOutput = false) {

		if(!isset($data["removeBackground"])){
			$data["removeBackground"]=false;
		}
		$data ["menu"] = $this->getMenu ();
		$data ["title"] = $this->getTitle ();
		$data ["head"] = $head;
		$data ["left"] = $left;
		$data ["body"] = $body;
		$data ["footer"] = $footer;
		$data ["stringOutput"] = $stringOutput;
		
		$postEditMode = $this->input->post("editMode");
		$sessEditMode = $this->session->userdata ( 'editMode' );
		if (isset ( $postEditMode ) && $postEditMode != "") {
			$this->session->set_userdata ( 'editMode', $postEditMode );
		} else {
			if (isset ( $sessEditMode ) && $sessEditMode != "") {
				$this->session->set_userdata ( 'editMode', $sessEditMode );
			} else {
				$this->session->set_userdata ( 'editMode', "false" );
			}
		}
		$data ["editMode"]=$this->session->userdata ( 'editMode' )==="true";
		
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
				// Replacing styles from the "Styles tool"
		);
		
		$this->load->view ( "commons/main_layout", $data, $stringOutput );
	}
}
