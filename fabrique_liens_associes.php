<?php

/**
 *  Fichier généré par la Fabrique de plugin v6
 *   le 2017-06-28 16:27:50
 *
 *  Ce fichier de sauvegarde peut servir à recréer
 *  votre plugin avec le plugin «Fabrique» qui a servi à le créer.
 *
 *  Bien évidemment, les modifications apportées ultérieurement
 *  par vos soins dans le code de ce plugin généré
 *  NE SERONT PAS connues du plugin «Fabrique» et ne pourront pas
 *  être recréées par lui !
 *
 *  La «Fabrique» ne pourra que régénerer le code de base du plugin
 *  avec les informations dont il dispose.
 *
**/

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$data = array (
  'fabrique' => 
  array (
    'version' => 6,
  ),
  'paquet' => 
  array (
    'prefixe' => 'liens_associes',
    'nom' => 'Liens associés',
    'slogan' => 'Gérer les liens associés',
    'description' => 'Gérer les liens associés',
    'logo' => 
    array (
      0 => '',
    ),
    'version' => '1.0.0',
    'auteur' => 'Rainer',
    'auteur_lien' => 'https://websimple.be',
    'licence' => 'GNU/GPL',
    'categorie' => 'divers',
    'etat' => 'dev',
    'compatibilite' => '[3.1.6;3.1.*]',
    'documentation' => '',
    'administrations' => 'on',
    'schema' => '1.0.0',
    'formulaire_config' => 'on',
    'formulaire_config_titre' => 'Configurations',
    'fichiers' => 
    array (
      0 => 'autorisations',
      1 => 'fonctions',
      2 => 'options',
      3 => 'pipelines',
    ),
    'inserer' => 
    array (
      'paquet' => '',
      'administrations' => 
      array (
        'maj' => '',
        'desinstallation' => '',
        'fin' => '',
      ),
      'base' => 
      array (
        'tables' => 
        array (
          'fin' => '',
        ),
      ),
    ),
    'scripts' => 
    array (
      'pre_copie' => '',
      'post_creation' => '',
    ),
    'exemples' => 'on',
  ),
  'objets' => 
  array (
    0 => 
    array (
      'nom' => 'Liens associés',
      'nom_singulier' => 'Lien associé',
      'genre' => 'masculin',
      'logo' => 
      array (
        0 => '',
        32 => '',
        24 => '',
        16 => '',
        12 => '',
      ),
      'logo_variantes' => 'on',
      'table' => 'spip_associe_liens',
      'cle_primaire' => 'id_associe_lien',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'associe_lien',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Lien interne',
          'champ' => 'lien_interne',
          'sql' => 'int(1) NOT NULL DEFAULT 0',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'oui_non',
          'explication' => 'S\'agit-il d\'un lien du même site (lien interne) ou non.',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'Objet',
          'champ' => 'objet',
          'sql' => 'varchar(55) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
            2 => 'obligatoire',
          ),
          'recherche' => '',
          'saisie' => 'choisir_objets',
          'explication' => 'Type de contenu',
          'saisie_options' => '',
        ),
        2 => 
        array (
          'nom' => 'Titre',
          'champ' => 'titre',
          'sql' => 'varchar(255) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
            2 => 'obligatoire',
          ),
          'recherche' => '10',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        3 => 
        array (
          'nom' => 'URL',
          'champ' => 'url',
          'sql' => 'varchar(255) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '5',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        4 => 
        array (
          'nom' => 'Déscriptif',
          'champ' => 'descriptif',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '6',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => 'conteneur_class=pleine_largeur, class=inserer_barre_edition, rows=4',
        ),
        5 => 
        array (
          'nom' => 'Titre ',
          'champ' => 'id_objet',
          'sql' => 'bigint(21) NOT NULL DEFAULT 0',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
      ),
      'champ_titre' => 'titre',
      'champ_date' => 'date',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Liens associés',
        'titre_objet' => 'Lien associé',
        'info_aucun_objet' => 'Aucun lien associé',
        'info_1_objet' => 'Un lien associé',
        'info_nb_objets' => '@nb@ liens associés',
        'icone_creer_objet' => 'Créer un lien associé',
        'icone_modifier_objet' => 'Modifier ce lien associé',
        'titre_logo_objet' => 'Logo de ce lien associé',
        'titre_langue_objet' => 'Langue de ce lien associé',
        'texte_definir_comme_traduction_objet' => 'Ce lien associé est une traduction du lien associé numéro :',
        'titre_\\objets_lies_objet' => 'Liés à ce lien associé',
        'titre_objets_rubrique' => 'Liens associés de la rubrique',
        'info_objets_auteur' => 'Les liens associés de cet auteur',
        'retirer_lien_objet' => 'Retirer ce lien associé',
        'retirer_tous_liens_objets' => 'Retirer tous les liens associés',
        'ajouter_lien_objet' => 'Ajouter ce lien associé',
        'texte_ajouter_objet' => 'Ajouter un lien associé',
        'texte_creer_associer_objet' => 'Créer et associer un lien associé',
        'texte_changer_statut_objet' => 'Ce lien associé est :',
        'supprimer_objet' => 'Supprimer cet lien associé',
        'confirmer_supprimer_objet' => 'Confirmez-vous la suppression de cet lien associé ?',
      ),
      'liaison_directe' => '',
      'table_liens' => 'on',
      'vue_liens' => 
      array (
        0 => 'spip_articles',
        1 => 'spip_documents',
      ),
      'afficher_liens' => 'on',
      'roles' => '',
      'auteurs_liens' => '',
      'vue_auteurs_liens' => '',
      'fichiers' => 
      array (
        'echafaudages' => 
        array (
          0 => 'prive/squelettes/contenu/objets.html',
          1 => 'prive/objets/infos/objet.html',
          2 => 'prive/squelettes/contenu/objet.html',
        ),
        'explicites' => 
        array (
          0 => 'action/supprimer_objet.php',
        ),
      ),
      'saisies' => 
      array (
        0 => 'objets',
      ),
      'autorisations' => 
      array (
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => '',
        'objet_supprimer' => '',
        'associerobjet' => '',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
      ),
    ),
  ),
  'images' => 
  array (
    'paquet' => 
    array (
      'logo' => 
      array (
        0 => 
        array (
          'extension' => 'png',
          'contenu' => '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',
        ),
      ),
    ),
    'objets' => 
    array (
      0 => 
      array (
        'logo' => 
        array (
          0 => 
          array (
            'extension' => 'png',
            'contenu' => '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',
          ),
        ),
      ),
    ),
  ),
);
