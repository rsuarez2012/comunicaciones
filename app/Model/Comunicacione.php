<?php
App::uses('AppModel', 'Model');
/**
 * Comunicacione Model
 *
 * @property Dependencia $Dependencia
 * @property Directivo $Directivo
 */
class Comunicacione extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $name ="Comunicacione";
	public $validate = array(
		'dependencia_id' => array(
			'numeric' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'directivo_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'asunto' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fecha' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cuerpo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'numero_comuni' => array(
			/*'numeric' => array(
				'rule' => array('isUnique' => array('on'=> 'create'), 'numeric'),
				'message' => 'El Numero de Comunicacion esta repetido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),*/
			/*'rule' => array(
					'on' => 'create',
					'rule' => array('isUnique', 'numeric'),
					'message' => 'El Numero de Comunicacion esta repetido',
				),*/
			/*'numeric'*/
			'unique'=>array('rule' => 'isUnique', 'on' => 'create', 'message' => 'El Numero de Comunicacion esta repetido',),
		),
		//'copia_a' => array(
			//'notEmpty' => array(
			//	'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			//),
		//),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Dependencia' => array(
			'className' => 'Dependencia',
			'foreignKey' => 'dependencia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Directivo' => array(
			'className' => 'Directivo',
			'foreignKey' => 'directivo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	public $hasAndBelongsToMany = array(
		'Dependencia'=> array(
			'className' => 'Dependencia',
			'joinTable' => 'comunicaciones_dependencias',
			'foreignKey' => 'comunicacione_id',
			'associationForeignKey' => 'dependencia_id'));
}
