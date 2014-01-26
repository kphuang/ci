<?php
class News extends CI_Controller {
    
    public function __construct()
    {   
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('email');
    }   

    public function add($title, $comment)
    {   
        echo "title: " . $title . "<br>";
        echo "comment: " . $comment;
    }   

    public function del($news_id)
    {   
        echo "no. " . $news_id . " article is deleted";
    }   

    public function edit($news_id, $title, $comment)
    {   
        echo "article no. " . $news_id . " is modified as following:<br>";
        echo "title: " . $title . "<br>";
        echo "comment: " . $comment;
    }   
}
?>
