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
    
    /**
     * Create action for new blog post
     * @return void
     */
    public function create()
    {
        $this->load->view('post/create');
    }
    
    /**
     * This action will process post information from create action
     * @return
     */
    public function postCreate()
    {
        
    }
}