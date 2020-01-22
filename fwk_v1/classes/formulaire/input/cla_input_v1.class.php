<?php
//require_once '/f';
class cla_input_v1 {
	
	protected $cs_idInput;
	protected $cs_nomObjetHtml;
	protected $cv_valeurObjetHtml;
	protected $cs_typeInput;
	
	public function __construct(
		string $ps_nomObjetHtml, 
		string $ps_typeInput, 
		$pv_valeurObjetHtml = null
	) {
		$this->cs_idInput = 'lo_inp_' . com_create_guid();
		$this->cs_nomObjetHtml = $ps_nomObjetHtml;
		$this->cv_valeurObjetHtml = $pv_valeurObjetHtml;
		$this->cs_typeInput = $ps_typeInput;
	}

	public function fct_getObjetHtml() {
		$fs_objetHtml = '<input';
		$fs_objetHtml .= ' type="' . $this->cs_typeInput . '"';
		$fs_objetHtml .= ' id="' . $this->cs_idInput . '"';
		$fs_objetHtml .= ' name="' . $this->cs_nomObjetHtml . '"';
		
		if (isset($this->cv_valeurObjetHtml)) $fs_objetHtml .= ' value="' . $this->cv_valeurObjetHtml . '"';
		
		return $fs_objetHtml; 
	}
}
