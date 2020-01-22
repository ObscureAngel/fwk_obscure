<?php

/**
 *
 * @author Maxime
 *        
 */
class cla_inputNombre_v1 extends cla_input_v1 {

	/**
	 *
	 * @param string $ps_nomObjetHtml
	 *
	 * @param string $ps_typeInput
	 *
	 * @param $pv_valeurObjetHtml
	 *        	
	 */
	public function __construct(
		string $ps_nomObjetHtml, 
		string $ps_typeInput, 
		$pv_valeurObjetHtml = null
	) {
		parent::__construct (
			$ps_nomObjetHtml, 
			'number',
			$pv_valeurObjetHtml
		);
	}
	
	public function fct_getObjetHtml() {
		$fs_objetHtml = parent::fct_getObjetHtml();
		
		$fs_objetHtml .= '>';
		
		return $fs_objetHtml;
	}
}

