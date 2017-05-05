<?php
App::uses('AppController', 'Controller');
/**
 * Beneficiarios Controller
 *
 * @property Beneficiario $Beneficiario
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class BeneficiariosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	public $helpers = array('Html', 'Form', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Beneficiario->recursive = 0;
		$this->set('beneficiarios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Beneficiario->exists($id)) {
			throw new NotFoundException(__('Invalid beneficiario'));
		}
		$options = array('conditions' => array('Beneficiario.' . $this->Beneficiario->primaryKey => $id));
		$this->set('beneficiario', $this->Beneficiario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Beneficiario->create();
			if ($this->Beneficiario->save($this->request->data)) {
				$this->Session->setFlash(__('The beneficiario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The beneficiario could not be saved. Please, try again.'));
			}
		}
		$titulares = $this->Beneficiario->Titulare->find('list');
		$this->set(compact('titulares'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Beneficiario->exists($id)) {
			throw new NotFoundException(__('Invalid beneficiario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Beneficiario->save($this->request->data)) {
				$this->Session->setFlash(__('The beneficiario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The beneficiario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Beneficiario.' . $this->Beneficiario->primaryKey => $id));
			$this->request->data = $this->Beneficiario->find('first', $options);
		}
		$titulares = $this->Beneficiario->Titulare->find('list');
		$this->set(compact('titulares'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Beneficiario->id = $id;
		if (!$this->Beneficiario->exists()) {
			throw new NotFoundException(__('Invalid beneficiario'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Beneficiario->delete()) {
			$this->Session->setFlash(__('The beneficiario has been deleted.'));
		} else {
			$this->Session->setFlash(__('The beneficiario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
