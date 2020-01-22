<?php
/**
 * 
 * @author Maxime
 *
 */
class cla_formulaire_v1 {
	
	private $cs_idFormulaire;
	private $cs_nomFormulaire;
	private $cs_actionFormulaire;
	private $cs_methodeFormulaire = 'POST';
	private $ca_listeInputFormulaire;
	
	public function __construct(string $ps_nomFormulaire, string $ps_actionFormulaire, string $ps_methodeFormulaire = 'POST') {
		$this->cs_idFormulaire = 'lo_frm_' . com_create_guid ();
		$this->cs_nomFormulaire = 'lo_frm_' . $ps_nomFormulaire;
		$this->cs_actionFormulaire = $ps_actionFormulaire;
		$this->cs_methodeFormulaire = $ps_methodeFormulaire;
	}
	
	public function fct_ajouterInput(cla_input_v1 $po_input) {
		$this->ca_listeInputFormulaire[] = $po_input;
	}
	
	public function fct_getObjetHtml() {
		$fs_objetHtml = '<form';
		$fs_objetHtml .= ' method="' . $this->cs_methodeFormulaire . '"';
		$fs_objetHtml .= ' name="' . $this->cs_nomFormulaire . '"';
		$fs_objetHtml .= ' action="' . $this->cs_actionFormulaire . '"';
		$fs_objetHtml .= ' >';
		
		$fs_objetHtml .= '<div class="divTable">';
		foreach ($this->ca_listeInputFormulaire as $fo_inputFormulaire) {
			$fs_objetHtml .= '<div class="divValeur">';
			$fs_objetHtml .= $fo_inputFormulaire->fct_getObjetHtml();
			$fs_objetHtml .= '</div>';
		}
		$fs_objetHtml .= '</div>';
		
		$fs_objetHtml .= '</form>';
		
		return $fs_objetHtml;
	}
}
