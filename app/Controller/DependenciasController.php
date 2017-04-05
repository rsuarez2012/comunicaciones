<?php
App::uses('AppController', 'Controller');
/**
 * Dependencias Controller
 *
 * @property Dependencia $Dependencia
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DependenciasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Dependencia->recursive = 0;
		$this->set('dependencias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Dependencia->exists($id)) {
			throw new NotFoundException(__('Invalid dependencia'));
		}
		$options = array('conditions' => array('Dependencia.' . $this->Dependencia->primaryKey => $id));
		$this->set('dependencia', $this->Dependencia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dependencia->create();
			if ($this->Dependencia->save($this->request->data)) {
				$this->Session->setFlash(__('The dependencia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dependencia could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Dependencia->exists($id)) {
			throw new NotFoundException(__('Invalid dependencia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Dependencia->save($this->request->data)) {
				$this->Session->setFlash(__('The dependencia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dependencia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Dependencia.' . $this->Dependencia->primaryKey => $id));
			$this->request->data = $this->Dependencia->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Dependencia->id = $id;
		if (!$this->Dependencia->exists()) {
			throw new NotFoundException(__('Invalid dependencia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Dependencia->delete()) {
			$this->Session->setFlash(__('The dependencia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dependencia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
