<?php
App::uses('AppController', 'Controller');
/**
 * Directivos Controller
 *
 * @property Directivo $Directivo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DirectivosController extends AppController {

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
		$this->Directivo->recursive = 0;
		$this->set('directivos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Directivo->exists($id)) {
			throw new NotFoundException(__('Invalid directivo'));
		}
		$options = array('conditions' => array('Directivo.' . $this->Directivo->primaryKey => $id));
		$this->set('directivo', $this->Directivo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Directivo->create();
			if ($this->Directivo->save($this->request->data)) {
				$this->Session->setFlash(__('The directivo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The directivo could not be saved. Please, try again.'));
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
		if (!$this->Directivo->exists($id)) {
			throw new NotFoundException(__('Invalid directivo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Directivo->save($this->request->data)) {
				$this->Session->setFlash(__('The directivo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The directivo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Directivo.' . $this->Directivo->primaryKey => $id));
			$this->request->data = $this->Directivo->find('first', $options);
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
		$this->Directivo->id = $id;
		if (!$this->Directivo->exists()) {
			throw new NotFoundException(__('Invalid directivo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Directivo->delete()) {
			$this->Session->setFlash(__('The directivo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The directivo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
