<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Class for post controller
 */
class Post extends CI_Controller {

	/**
     * Index action
     * @return void
     */
    public function index()
	{
	    $this->load->view('welcome_message');
	}
}