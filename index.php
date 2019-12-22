<?php
//ini_set('include_path', 'c:/wamp64/www/fwk_obscure');
require ('entetes.inc.php');
require (gs_racineInclude . 'fwk_v1/classes/input/cla_inputText_v1.class.php');
require (gs_racineInclude . 'fwk_v1/classes/cla_formulaire_v1.class.php');

$lo_testFormulaire = new cla_formulaire_v1('formTest', 'index.php');
$lo_testInput = new cla_inputText_v1('inputTest', 'test');
$lo_testFormulaire->fct_ajouterInput($lo_testInput);
$lo_testFormulaire->fct_ajouterInput($lo_testInput);
$lo_testFormulaire->fct_ajouterInput($lo_testInput);
$lo_testFormulaire->fct_ajouterInput($lo_testInput);

$ls_objetHtml = $lo_testFormulaire->fct_getObjetHtml();

echo $ls_objetHtml;

?>
