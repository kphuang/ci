<?php
class Blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('email');
	}

	private function _utility() 
	{
		echo "Private function";
	}

	public function index()
	{
		echo "Hello World!";
	}

    public function edit($blog_id)
    {   
        echo $blog_id;
    } 
}
?>
