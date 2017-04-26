<?php
App::uses('AppModel', 'Model');
/**
 * Dependencia Model
 *
 */
class Dependencia extends AppModel {

/**
 * Validation rules
 *
 * @var array

 */
	public $hasAndBelongsToMany = array('Comunicacione');

	public $displayField = 'nombre';
	public $validate = array(
		'nombre' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
