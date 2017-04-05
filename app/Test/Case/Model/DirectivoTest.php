<?php
App::uses('Directivo', 'Model');

/**
 * Directivo Test Case
 *
 */
class DirectivoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.directivo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Directivo = ClassRegistry::init('Directivo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Directivo);

		parent::tearDown();
	}

}
