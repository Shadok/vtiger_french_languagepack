<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.  
 ************************************************************************************/
$languageStrings = array(
	'LBL_ADD_RECORD'               => 'Ajouter liste dépendante'     , 
	'LBL_PICKLIST_DEPENDENCY'      => 'Liste dépendante'         , 
	'LBL_SELECT_MODULE'            => 'Module'                      , 
	'LBL_SOURCE_FIELD'             => 'Champ source'                , 
	'LBL_TARGET_FIELD'             => 'Champ cible'                , 
	'LBL_SELECT_FIELD'             => 'Choisir champ'                , 
	'LBL_CONFIGURE_DEPENDENCY_INFO' => 'Cliquez sur la cellule correspondante pour modifier le mappage pour les valeurs de la liste dépendante du champ cible',
	'LBL_CONFIGURE_DEPENDENCY_HELP_1' => 'Seules les valeurs de listes mappées du champ d\'origine apparaitront ici (sauf la première fois)', 
	'LBL_CONFIGURE_DEPENDENCY_HELP_2' =>  "Si vous voulez voir ou modifier pour les autres valeurs du champ d'origine, <br/>
										vous pouvez sélectionner les valeurs en cliquant sur le bouton <b>'Sélectionner les valeurs d'origine'</b> à droite",
	'LBL_CONFIGURE_DEPENDENCY_HELP_3' => 'les valeurs séléctionnées du champ de destination sont en surbrillance',
	'LBL_SELECT_SOURCE_VALUES'     => 'Choisir les valeurs de source'        ,
	'LBL_SELECT_SOURCE_PICKLIST_VALUES' => 'Choisir les valeurs de la liste source',
	'LBL_ERR_CYCLIC_DEPENDENCY'    => 'Cette configuration de valeurs liées est refusée car une autre dépendance liée interfère.', 
	'PickListDependency' => 'Liste dépendante',
	'Source Field'             => 'Champ source'                , 
	'Target Field'             => 'Champ cible'                ,
	'Module'	 => 	'Module' ,
	
	// 7.1
	'LBL_SELECT_ALL_VALUES' => 'Sélectionner tout',
	'LBL_UNSELECT_ALL_VALUES' => 'Désélectionner tout',
    'LBL_CYCLIC_DEPENDENCY_ERROR' => 'Cela pourrait créer une redondance cyclique car le champ %s est déjà configuré pour le champ %s',
);
$jsLanguageStrings = array(
	'JS_LBL_ARE_YOU_SURE_YOU_WANT_TO_DELETE' => 'Confirmer la suppression ?', 
	'JS_DEPENDENCY_DELETED_SUEESSFULLY' => 'Liste dépendante supprimée', 
	'JS_PICKLIST_DEPENDENCY_SAVED' => 'Liste dépendante enregistrée'   , 
	'JS_DEPENDENCY_ATLEAST_ONE_VALUE' => 'Sélectionner au moins une valeur', 
	'JS_SOURCE_AND_TARGET_FIELDS_SHOULD_NOT_BE_SAME' => 'Le Champ Source et le Champ Cible doivent être différents', 
	'JS_SELECT_SOME_VALUE'         => 'Choisir une valeur'           , 
);