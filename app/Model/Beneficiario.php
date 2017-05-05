<?php
App::uses('AppModel', 'Model');
/**
 * Beneficiario Model
 *
 * @property Titular $Titular
 */
class Beneficiario extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombres';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Titulare' => array(
			'className' => 'Titulare',
			'foreignKey' => 'titulare_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
