<?php
App::uses('Dependencia', 'Model');

/**
 * Dependencia Test Case
 *
 */
class DependenciaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dependencia'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Dependencia = ClassRegistry::init('Dependencia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dependencia);

		parent::tearDown();
	}

}
