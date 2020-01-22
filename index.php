<?php
//ini_set('include_path', 'c:/wamp64/www/');
require ('entetes.inc.php');
require (gs_racineInclude . 'fwk_v1/classes/formulaire/input/cla_inputText_v1.class.php');
require (gs_racineInclude . 'fwk_v1/classes/formulaire/cla_formulaire_v1.class.php');
require (gs_racineInclude . 'fwk_v1/classes/formulaire/input/nombre/cla_inputNombre_v1.class.php');

$lo_testFormulaire = new cla_formulaire_v1('formTest', 'index.php');
$lo_testInput1 = new cla_inputText_v1('inputTest', 'test');
$lo_testInput2 = new cla_inputNombre_v1('inputTest', '1234');
$lo_testFormulaire->fct_ajouterInput($lo_testInput1);
$lo_testFormulaire->fct_ajouterInput($lo_testInput2);
////$lo_testFormulaire->fct_ajouterInput(null);
//$lo_testFormulaire->fct_ajouterInput(null);

$ls_objetHtml = $lo_testFormulaire->fct_getObjetHtml();

echo $ls_objetHtml;

?>
