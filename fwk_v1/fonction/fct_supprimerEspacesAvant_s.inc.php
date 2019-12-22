<?php
function fct_supprimeEspacesAvant_s(string $ps_chaineAvecEspacesAvant) {
	$fs_chaineSansEspacesAvant = '';

	try {
		if (!is_string($ps_chaineAvecEspacesAvant))
			throw new exc_erreurChaine();

		$fs_chaineSansEspacesAvant = ltrim($ps_chaineAvecEspacesAvant, ' ');
	} catch (exc_erreurChaine $e) {
		throw $e;
	}

	return $fs_chaineSansEspacesAvant;
}