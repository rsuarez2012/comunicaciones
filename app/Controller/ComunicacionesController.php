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
	public function beforeFilter(){
		parent::beforeFilter();
	}
	public function isAuthorized($user){
		if($user['role'] == 'usuario'){
			if(in_array($this->action, array('add', 'edit', 'view', 'index', 'comunicacion'))){
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

	//paginador
	/*public $paginate = array('fields' => array('Comunicacione.id', 'Comunicacione.asunto'),'limit' => 5, 'order' => array('Comunicacione.id' => 'desc'));
	public function lista_comunicaciones() {
    $this->Paginator->settings = $this->paginate;

    // similar to findAll(), but fetches paged results
    $data = $this->Paginator->paginate('Comunicacione');
    $this->set('data', $data);
}*/


/**
 * index method
 *
 * @return void
 */

	public function index() {
		$this->set('comunicaciones', $this->Comunicacione->find('all', array('order' => 'numero_comuni')));

		//$this->Comunicacione->recursive = 0;
		/*$this->paginate=array(
			'conditions'=>array('Comunicacione.id !=' => 'id'),
			'limit' => 5,
			'order' => array('id' => 'desc')
			);
		$comunicaciones = $this->paginate('Comunicacione');
		/*$this->Paginator->paginate=array(
			'limit' => 5
			);*/
		
		//$this->set('comunicaciones',$this->Paginator->paginate());
			//$this->set('comunicaciones', $this->Paginator->paginate());

			//$this->set('comunicaciones', $comunicaciones);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->loadModel('ComunicacionesDependencia');
		$copias = $this->ComunicacionesDependencia->find('all', array('conditions'=>array('ComunicacionesDependencia.comunicacione_id'=>$id), 'recursive'=>1));
		if (!$this->Comunicacione->exists($id)) {
			throw new NotFoundException(__('Invalid comunicacione'));
		}
		$options = array('conditions' => array('Comunicacione.' . $this->Comunicacione->primaryKey => $id), 'recursive'=>2);
		$this->set('comunicacione', $this->Comunicacione->find('first', $options));
		$this->set('copias', $this->ComunicacionesDependencia->find('all', array('conditions'=>array('ComunicacionesDependencia.comunicacione_id'=>$id), 'recursive'=>1)));
		
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$ult_comunicacion = $this->Comunicacione->find('first');
		//$this->set('numero_comunicacion', $ult_comunicacion["Comunicacione"]["id"]);
		if ($this->request->is('post')) {
			$this->Comunicacione->create();
			if ($this->Comunicacione->save($this->request->data)) {

				$this->Session->setFlash(__('La Comunicacion a sido Guardada.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La comunicacion no se pudo Guardar. Por Favor, Intente de Nuevo.'));
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
			$this->Comunicacione->id = $id;
			if ($this->Comunicacione->save($this->request->data)) {
				$this->Session->setFlash(__('La Comunicacion a sido Guardada.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La comunicacion no se pudo Guardar. Por Favor, Intente de Nuevo.'),array('div'=>array('class'=>'danger')));
			}
			debug($this->Comunicacione->validationErrors);
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
			$this->Session->setFlash(__('La Comunicacion a sido Eliminada.'));
		} else {
			$this->Session->setFlash(__('La comunicacion no se pudo Eliminar. Por Favor, Intente de Nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	public function comunicacion($id = null)
	{
		# code...
		$this->loadModel('Comunicacione');
		$this->loadModel('Dependencia');
		$this->loadModel('ComunicacionesDependencia');

		Configure::write('debug',2);
		$dependencia = $this->Dependencia->find('first', array('conditions'=>'Dependencia.nombre'));

		$this->set('copias', $this->ComunicacionesDependencia->find('all', array('conditions' => array('ComunicacionesDependencia.comunicacione_id' => $id), 'recursive' => 1)));



		$this->set('dependencia', $this->Dependencia->find('first', array('recursive' => 1)));
		$options = array('conditions' => array('Comunicacione.' . $this->Comunicacione->primaryKey => $id));
		
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


 function search($id=null) {
		// the page we will redirect to
		/*$url['action'] = 'index';
		
		// build a URL will all the search elements in it
		// the resulting URL will be 
		// example.com/cake/posts/index/Search.keywords:mykeyword/Search.tag_id:3
		foreach ($this->request->data as $k=>$v){ 
			foreach ($v as $kk=>$vv){ 
				if ($vv) {
					$url[$k.'.'.$kk]=$vv; 
				}
			} 
		}

		// redirect the user to the url
		$this->redirect($url, null, true);*/


		




       		$url['action'] = 'index';
		
 			//$ori = $this->data['Comunicacione']['asunto'];
            if ($this->request->is('post')){
                //$ori = $this->request->data['Comunicacione']['id']; 
                $this->set('comunicaciones', $this->Comunicacione->find('all',array('conditions'=>array('Comunicacione.id' => $id))));

        	} else {   
               $this->Session->setFlash(__('No se encuentran datos'));
        	}
        	//pr();
        	$this->redirect($url, null, true);
        


	}
}
