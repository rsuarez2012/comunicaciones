<?php
App::uses('AppController', 'Controller');
/**
 * Comunicaciones Controller
 *
 * @property Comunicacione $Comunicacione
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ComunicacionesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	public $helpers = array('Html', 'Form', 'Session');
	public function isAuthorized($user) {
	    // All registered users can add posts
	    if ($this->action === 'add') {
	        return true;
	    }

	    // The owner of a post can edit and delete it
	    /*if (in_array($this->action, array('edit', 'delete'))) {
	        $postId = (int) $this->request->params['pass'][0];
	        if ($this->Comunicacione->isOwnedBy($postId, $user['id'])) {
	            return true;
	        }
	    }*/

	    return parent::isAuthorized($user);
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Comunicacione->recursive = 0;
		$this->set('comunicaciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Comunicacione->exists($id)) {
			throw new NotFoundException(__('Invalid comunicacione'));
		}
		$options = array('conditions' => array('Comunicacione.' . $this->Comunicacione->primaryKey => $id));
		$this->set('comunicacione', $this->Comunicacione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Comunicacione->create();
			if ($this->Comunicacione->save($this->request->data)) {
				$this->Session->setFlash(__('The comunicacione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comunicacione could not be saved. Please, try again.'));
			}
		}
		$dependencias = $this->Comunicacione->Dependencia->find('list');
		$directivos = $this->Comunicacione->Directivo->find('list');
		$this->set(compact('dependencias', 'directivos'));
		//$this->set(compact('directivos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Comunicacione->exists($id)) {
			throw new NotFoundException(__('Invalid comunicacione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Comunicacione->save($this->request->data)) {
				$this->Session->setFlash(__('The comunicacione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comunicacione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Comunicacione.' . $this->Comunicacione->primaryKey => $id));
			$this->request->data = $this->Comunicacione->find('first', $options);
		}
		$dependencias = $this->Comunicacione->Dependencia->find('list');
		$directivos = $this->Comunicacione->Directivo->find('list');
		$this->set(compact('dependencias', 'directivos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Comunicacione->id = $id;
		if (!$this->Comunicacione->exists()) {
			throw new NotFoundException(__('Invalid comunicacione'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Comunicacione->delete()) {
			$this->Session->setFlash(__('The comunicacione has been deleted.'));
		} else {
			$this->Session->setFlash(__('The comunicacione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	public function comunicacion($id = null)
	{
		# code...
		$this->loadModel('Comunicacione');
		$this->loadModel('Dependencia');

		Configure::write('debug',2);
		$this->set('dependencia', $this->Dependencia->find('first', array('recursive' => 1)));
		$options = array('conditions' => array('Comunicacione.' . $this->Comunicacione->primaryKey => $id));
		//$this->set('comunicacione', $this->Comunicacione->find('first', $options));
		//$this->set('comunicacion', $this->Comunicacione->Dependencia->find('first',array('conditions' =>array('Dependencia.id' => $id))));
		//$dependencias = $this->Comunicacione->Dependencia->find('list');
		//$this->set(compact('dependencias', 'Comunicaciones'));
		//$this->set('comunicacion', $this->Comunicacione->find('first',array('conditions'=>array('Comunicacione.id'=>$id), 'recursive'=>3)));
		//$this->render();
		$this->set('post', $this->Comunicacione->find('first', array('conditions'=>array('Comunicacione.id'=>$id), 'recursive'=>3)));
	}
	public function pdf()
 {
    Configure::write('debug',0);
    $this->layout = 'pdf'; /* esto utilizara el layout 'pdf.
                    ctp' */
    /* Operaciones que deseamos realizar y variables que 
    pasaremos a la vista. */
    $this->render();
 }
}
