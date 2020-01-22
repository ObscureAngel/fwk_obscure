<?php

require_once ('cla_input_v1.class.php');

class cla_inputText_v1 extends cla_input_v1 {
	
	public function __construct(
		string $ps_nomObjetHtml, 
		$pv_valeurObjetHtml = null
	) {
		parent::__construct (
			$ps_nomObjetHtml, 
			'text',
			$pv_valeurObjetHtml
		);
	}
	
	public function fct_getObjetHtml() {
		$fs_objetHtml = parent::fct_getObjetHtml();

		$fs_objetHtml .= '>';
		
		return $fs_objetHtml;
	}
}
