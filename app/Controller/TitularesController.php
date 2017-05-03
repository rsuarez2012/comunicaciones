<?php
App::uses('AppController', 'Controller');
/**
 * Titulares Controller
 *
 * @property Titulare $Titulare
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TitularesController extends AppController {

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
		$this->Titulare->recursive = 0;
		$this->set('titulares', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Titulare->exists($id)) {
			throw new NotFoundException(__('Invalid titulare'));
		}
		$options = array('conditions' => array('Titulare.' . $this->Titulare->primaryKey => $id));
		$this->set('titulare', $this->Titulare->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Titulare->create();
			if ($this->Titulare->save($this->request->data)) {
				$this->Session->setFlash(__('The titulare has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The titulare could not be saved. Please, try again.'));
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
		if (!$this->Titulare->exists($id)) {
			throw new NotFoundException(__('Invalid titulare'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Titulare->save($this->request->data)) {
				$this->Session->setFlash(__('The titulare has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The titulare could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Titulare.' . $this->Titulare->primaryKey => $id));
			$this->request->data = $this->Titulare->find('first', $options);
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
		$this->Titulare->id = $id;
		if (!$this->Titulare->exists()) {
			throw new NotFoundException(__('Invalid titulare'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Titulare->delete()) {
			$this->Session->setFlash(__('The titulare has been deleted.'));
		} else {
			$this->Session->setFlash(__('The titulare could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
