<?php
/**
 * Utilisation de l'action supprimer pour l'objet related_link
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
 * Action pour supprimer un·e related_link
 *
 * Vérifier l'autorisation avant d'appeler l'action.
 *
 * @example
 *     ```
 *     [(#AUTORISER{supprimer, related_link, #ID_RELATED_LINK}|oui)
 *         [(#BOUTON_ACTION{<:related_link:supprimer_related_link:>,
 *             #URL_ACTION_AUTEUR{supprimer_related_link, #ID_RELATED_LINK, #URL_ECRIRE{related_links}},
 *             danger, <:related_link:confirmer_supprimer_related_link:>})]
 *     ]
 *     ```
 *
 * @example
 *     ```
 *     [(#AUTORISER{supprimer, related_link, #ID_RELATED_LINK}|oui)
 *         [(#BOUTON_ACTION{
 *             [(#CHEMIN_IMAGE{related_link-del-24.png}|balise_img{<:related_link:supprimer_related_link:>}|concat{' ',#VAL{<:related_link:supprimer_related_link:>}|wrap{<b>}}|trim)],
 *             #URL_ACTION_AUTEUR{supprimer_related_link, #ID_RELATED_LINK, #URL_ECRIRE{related_links}},
 *             icone s24 horizontale danger related_link-del-24, <:related_link:confirmer_supprimer_related_link:>})]
 *     ]
 *     ```
 *
 * @example
 *     ```
 *     if (autoriser('supprimer', 'related_link', $id_related_link)) {
 *          $supprimer_related_link = charger_fonction('supprimer_related_link', 'action');
 *          $supprimer_related_link($id_related_link);
 *     }
 *     ```
 *
 * @param null|int $arg
 *     Identifiant à supprimer.
 *     En absence de id utilise l'argument de l'action sécurisée.
**/
function action_supprimer_related_link_dist($arg=null) {
	if (is_null($arg)){
		$securiser_action = charger_fonction('securiser_action', 'inc');
		$arg = $securiser_action();
	}
	$arg = intval($arg);

	// cas suppression
	if ($arg) {
		sql_delete('spip_related_links',  'id_related_link=' . sql_quote($arg));
	}
	else {
		spip_log("action_supprimer_related_link_dist $arg pas compris");
	}
}
