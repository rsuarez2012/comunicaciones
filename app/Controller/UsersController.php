<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {
	/*public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }*/
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash');
	public function beforeFilter(){
		parent::beforeFilter();
	}
	public function isAuthorized($user){
		if($user['role'] == 'usuario'){
			if(in_array($this->action, array('add', 'index'))){
				return true;
			}
			else{
				if($this->Auth->user('id')){
					$this->Session->setFlash('no puede ingresar');
					$this->redirect($this->Auth->redirect());
				}
			}
		}
		return parent::isAuthorized($user);
	}
	/*public function isAuthorized($user) {
	    // All registered users can add posts
	    if ($this->action === 'add') {
	        return true;
	    }

	    // The owner of a post can edit and delete it
	    if (in_array($this->action, array('edit', 'delete'))) {
	        $postId = (int) $this->request->params['pass'][0];
	        if ($this->Comunicacione->isOwnedBy($postId, $user['id'])) {
	            return true;
	        }
	    }

	    return parent::isAuthorized($user);
	}*/

/**
 * index method
 *
 * @return void
 */

	/*public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add+', 'logout');
    }*/
    public function login() {
    	$this->layout = 'sesion';
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            return $this->redirect($this->Auth->redirectUrl());
	        }
	        $this->Session->setFlash(__('Usuario o Clave Invalidos, Por Favor Intente de Nuevo'));
	    	}
	}

	public function logout() {
	    return $this->redirect($this->Auth->logout());
	}

	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				//$this->Session->setFlash(__('The user has been saved.'));
				$this->Session->setFlash('Usuario guardado con éxito!', 'default', array(), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				//$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
				$this->Session->setFlash('El usuario no pudo guardarse, Intente nuevamente!', 'default', array(), 'error');
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
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	/*public function login() {
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            return $this->redirect($this->Auth->redirectUrl());
        	}
        	//$this->Session->setFlash->error(__('Invalid username or password, try again'));
        	$this->Session->setFlash('Usuario o clave incorrectos!', 'default', array(), 'error');
    	}
	}

	public function logout() {
	    return $this->redirect($this->Auth->logout());
	}*/
}
