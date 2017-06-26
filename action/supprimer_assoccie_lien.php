<?php
/**
 * Utilisation de l'action supprimer pour l'objet assoccie_lien
 *
 * @plugin     Liens associés
 * @copyright  2017
 * @author     Rainer
 * @licence    GNU/GPL
 * @package    SPIP\Liens_associes\Action
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}



/**
 * Action pour supprimer un·e assoccie_lien
 *
 * Vérifier l'autorisation avant d'appeler l'action.
 *
 * @example
 *     ```
 *     [(#AUTORISER{supprimer, assoccie_lien, #ID_ASSOCCIE_LIEN}|oui)
 *         [(#BOUTON_ACTION{<:assoccie_lien:supprimer_assoccie_lien:>,
 *             #URL_ACTION_AUTEUR{supprimer_assoccie_lien, #ID_ASSOCCIE_LIEN, #URL_ECRIRE{assoccie_liens}},
 *             danger, <:assoccie_lien:confirmer_supprimer_assoccie_lien:>})]
 *     ]
 *     ```
 *
 * @example
 *     ```
 *     [(#AUTORISER{supprimer, assoccie_lien, #ID_ASSOCCIE_LIEN}|oui)
 *         [(#BOUTON_ACTION{
 *             [(#CHEMIN_IMAGE{assoccie_lien-del-24.png}|balise_img{<:assoccie_lien:supprimer_assoccie_lien:>}|concat{' ',#VAL{<:assoccie_lien:supprimer_assoccie_lien:>}|wrap{<b>}}|trim)],
 *             #URL_ACTION_AUTEUR{supprimer_assoccie_lien, #ID_ASSOCCIE_LIEN, #URL_ECRIRE{assoccie_liens}},
 *             icone s24 horizontale danger assoccie_lien-del-24, <:assoccie_lien:confirmer_supprimer_assoccie_lien:>})]
 *     ]
 *     ```
 *
 * @example
 *     ```
 *     if (autoriser('supprimer', 'assoccie_lien', $id_assoccie_lien)) {
 *          $supprimer_assoccie_lien = charger_fonction('supprimer_assoccie_lien', 'action');
 *          $supprimer_assoccie_lien($id_assoccie_lien);
 *     }
 *     ```
 *
 * @param null|int $arg
 *     Identifiant à supprimer.
 *     En absence de id utilise l'argument de l'action sécurisée.
**/
function action_supprimer_assoccie_lien_dist($arg=null) {
	if (is_null($arg)){
		$securiser_action = charger_fonction('securiser_action', 'inc');
		$arg = $securiser_action();
	}
	$arg = intval($arg);

	// cas suppression
	if ($arg) {
		sql_delete('spip_assoccie_liens',  'id_assoccie_lien=' . sql_quote($arg));
	}
	else {
		spip_log("action_supprimer_assoccie_lien_dist $arg pas compris");
	}
}
