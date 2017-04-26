<?php
App::uses('AppModel', 'Model');
/**
 * ComunicacionesDependencia Model
 *
 * @property Comunicacione $Comunicacione
 * @property Dependencia $Dependencia
 */
class ComunicacionesDependencia extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'dependencia_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'comunicacione_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'dependencia_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Comunicacione' => array(
			'className' => 'Comunicacione',
			'foreignKey' => 'comunicacione_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Dependencia' => array(
			'className' => 'Dependencia',
			'foreignKey' => 'dependencia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
