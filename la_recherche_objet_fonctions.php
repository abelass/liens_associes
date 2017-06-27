<?php

function la_recherche_objets($table) {
	// Le sonnées de l'objet.
	$trouver_table = charger_fonction('trouver_table', 'base');
	$desc = $trouver_table($table);
	$id_table = $desc['key']['PRIMARY KEY'];
	$titre = explode(',', $desc['titre']);

	$champ_titre= $titre[0];
	$champs = array($id_table,$champ_titre);
	$where = array(
		'statut LIKE "publie"',
		$champ_titre . ' LIKE ' . sql_quote('%' . _request('term') . '%')
	);


	// La requête.
	$sql = sql_select($champs, $table, $where);
	$objets = array();
	while ($data = sql_fetch($sql)) {
		$objets[] = array(
			'label' => $data[$champ_titre],
			'data' => [$data[$id_table]],
			);
	}

	return json_encode($objets);
}
