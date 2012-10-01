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
    
}