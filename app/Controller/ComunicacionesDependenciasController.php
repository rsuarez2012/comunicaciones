<?php
App::uses('AppController', 'Controller');
/**
 * ComunicacionesDependencias Controller
 *
 * @property ComunicacionesDependencia $ComunicacionesDependencia
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ComunicacionesDependenciasController extends AppController {

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
		$this->ComunicacionesDependencia->recursive = 0;
		$this->set('comunicacionesDependencias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ComunicacionesDependencia->exists($id)) {
			throw new NotFoundException(__('Invalid comunicaciones dependencia'));
		}
		$options = array('conditions' => array('ComunicacionesDependencia.' . $this->ComunicacionesDependencia->primaryKey => $id));
		$this->set('comunicacionesDependencia', $this->ComunicacionesDependencia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ComunicacionesDependencia->create();
			if ($this->ComunicacionesDependencia->save($this->request->data)) {
				$this->Session->setFlash(__('The comunicaciones dependencia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comunicaciones dependencia could not be saved. Please, try again.'));
			}
		}
		$comunicacions = $this->ComunicacionesDependencia->Comunicacion->find('list');
		$dependencias = $this->ComunicacionesDependencia->Dependencium->find('list');
		$this->set(compact('comunicacions', 'dependencias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ComunicacionesDependencia->exists($id)) {
			throw new NotFoundException(__('Invalid comunicaciones dependencia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ComunicacionesDependencia->save($this->request->data)) {
				$this->Session->setFlash(__('The comunicaciones dependencia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comunicaciones dependencia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ComunicacionesDependencia.' . $this->ComunicacionesDependencia->primaryKey => $id));
			$this->request->data = $this->ComunicacionesDependencia->find('first', $options);
		}
		$comunicacions = $this->ComunicacionesDependencia->Comunicacion->find('list');
		$dependencias = $this->ComunicacionesDependencia->Dependencium->find('list');
		$this->set(compact('comunicacions', 'dependencias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ComunicacionesDependencia->id = $id;
		if (!$this->ComunicacionesDependencia->exists()) {
			throw new NotFoundException(__('Invalid comunicaciones dependencia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ComunicacionesDependencia->delete()) {
			$this->Session->setFlash(__('The comunicaciones dependencia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The comunicaciones dependencia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
