<?php

class Top extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data_contents = array();
		$data_contents['hoge'] = 'ほげほげほげ';
		$contents = $this->load->view('contents/top/index', $data_contents, TRUE);
		$data_frame = array();
		$data_frame['contents'] = $contents;
		$this->load->view('frame/main', $data_frame);
	}
}
