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
	public function add($titulare_id=null) {
		$this->loadModel('Titulare');
		$titulare = $this->Titulare->read('titulare');
		$this->set('titulare', $this->Titulare->find('first', array('conditions'=>array('Titulare.id' => $titulare['id']))));
		if ($this->request->is('post')) {
			$this->Beneficiario->create();
			if ($this->Beneficiario->save($this->request->data)) {
				$this->Session->setFlash(__('The beneficiario has been saved.'));
				return $this->redirect(array('controller'=>'titulares', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The beneficiario could not be saved. Please, try again.'));
			}
		}
		//$titulares = $this->Beneficiario->Titulare->find('list');
		//$this->set(compact('titulares'));
		$this->set(compact('titulare_id', $titulare_id	));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null, $titulare_id=null) {
		if (!$this->Beneficiario->exists($id)) {
			throw new NotFoundException(__('Invalid beneficiario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Beneficiario->save($this->request->data)) {
				$this->Session->setFlash(__('The beneficiario has been saved.'));
				return $this->redirect(array('controller'=>'titulares', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The beneficiario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Beneficiario.' . $this->Beneficiario->primaryKey => $id));
			$this->request->data = $this->Beneficiario->find('first', $options);
		}
		$titulares = $this->Beneficiario->Titulare->find('list');
		$this->set(compact('titulares', 'titulare_id', $titulare_id));
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
		//$this->request->allowMethod('post', 'delete');
		$this->request->allowMethod('get', 'delete');
		if ($this->Beneficiario->delete()) {
			$this->Session->setFlash(__('The beneficiario has been deleted.'));
			return $this->redirect(array('controller'=>'titulares', 'action'=>'index'));
		} else {
			$this->Session->setFlash(__('The beneficiario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
