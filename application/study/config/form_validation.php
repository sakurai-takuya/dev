<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array(
	'hoge' => array(
		array(
			'field' => 'dummy',
			'label' => 'ダミー',
			'rules' => 'convert[single]|convert[space_strip]|trim|strtoupper|name|strip_tags|xss_clean|required'
		),
	),
);

/* End of file form_validation.php */
/* Location: ./application/config/form_validation.php */
