<?php
class Post extends CI_Model {
    
    public function create($data)
    {
        $this->load->database();
        $this->author = $data['author'];    
        $this->content = $data['content'];
        $this->title = $data['title'];
        $this->created_at = time();
        
        $this->db->insert('posts', $this);
    }
    
    public function load($id)
    {
        $this->load->database();
        
        $query = $this->db->get_where('posts',array('id' => $id));
                              
        foreach ($query->result() as $obj){
            return $obj;
        }
    }
}