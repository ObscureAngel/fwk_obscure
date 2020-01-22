<?php

/**
 *
 * @author Maxime
 *        
 */
class cla_inputDate_v1 extends cla_input_v1 {

	/**
	 *
	 * @param string $ps_nomObjetHtml
	 *
	 * @param string $ps_typeInput
	 *
	 * @param
	 *        	$pv_valeurObjetHtml
	 *        	
	 */
	public function __construct(
		string $ps_nomObjetHtml, 
		string $ps_typeInput, 
		$pv_valeurObjetHtml = null
	) {
		parent::__construct (
			$ps_nomObjetHtml, 
			$ps_typeInput, 
			$pv_valeurObjetHtml = null 
		);
	}
}

