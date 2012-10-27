<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Class for post controller
 */
class Posts extends CI_Controller {

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
        $this->load->helper('url');
        $data['title'] = 'Create a new Blog Post';
        $this->load->view('header',$data);
        $this->load->view('posts/create');
    }
    
    /**
     * This action will process post information from create action
     * @todo after saving the model , do SOMETHING
     * @todo FIX the timestamp
     * @return void
     */
    public function postCreate()
    {
        if ($this->_validateCreateForm()){
            $this->load->model('post');
            $this->post->create($this->input->post());
        }
        else{
            
        }
        $this->load->helper('url');
        redirect('posts/create');
    }
    
    /**
     * Will return FALSE if the form is NOT VALID
     * Will return TRUE if the form is VALID
     * @return bool
     */
    protected function _validateCreateForm()
    {
        //we grab the POST data from the form
        $postData = $this->input->post();
        //we check that each value from the key/value pairs is not NULL
        foreach ($postData as $value){
            if ($value == null){
                return FALSE;    
            }  
        }
        return TRUE;
    }
    
    /**
     *Action view
     *
     */
    public function view()
    { 
        $postId = (int)$this->uri->segment(3);
        $this->load->model('post');
        $postModel = $this->post->load($postId);
        $data['post'] = $postModel;
        $this->load->view('posts/view',$data);
        
        
    }
}