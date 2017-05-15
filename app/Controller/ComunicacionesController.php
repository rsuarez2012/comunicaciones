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
        //auth check
        //return boolean
        if ($this->action === 'add') {
	        return true;
	    }
    }
	/*public function isAuthorized($user) {
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
	    }

	    return parent::isAuthorized($user);
	}*/

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
		$this->Comunicacione->recursive = 0;
		$this->paginate=array(
			'conditions'=>array('Comunicacione.id !=' => 'id'),
			'limit' => 5,
			'order' => array('id' => 'desc')
			);
		$comunicaciones = $this->paginate('Comunicacione');
		/*$this->Paginator->paginate=array(
			'limit' => 5
			);*/
		
		//$this->set('comunicaciones',$this->Paginator->paginate());
			$this->set('comunicaciones', $comunicaciones);

		//Buscar
		$title = array();
		if(isset($this->passedArgs['Search.keywords'])) {
			$keywords = $this->passedArgs['Search.keywords'];
			$this->paginate['conditions'][] = array(
				'OR' => array(
					'Comunicacione.asunto LIKE' => "%$keywords%",
					//'Comunicacione.body LIKE' => "%$keywords%",
				)
			);
			$this->request->data['Search']['keywords'] = $keywords;
			$title[] = __('Keywords',true).': '.$keywords;
		}

		$posts = $this->paginate();
		/*foreach($posts as $k=>$post) {
			$posts[$k]['CategoryPath'] = $this->Post->Category->getPath($post['Post']['category_id']);
			$posts[$k]['CategoryPath'] = $posts[$k]['CategoryPath']?$posts[$k]['CategoryPath']:array(); 
		}*/

		// set title
		$title = implode(' | ',$title);
		$title = (isset($title)&&$title)?$title:__('All Posts',true);
		
		// set related data
		//pr($title);
		$tags = $this->Comunicacione->find('list');
		$this->set(compact('posts','tags','title'));
		/*if(isset($this->passedArgs['Search.id'])) {
			// set the conditions
			$this->Paginator->paginate['conditions'][]['Comunicacione.id'] = $this->passedArgs['Search.id'];
			//$this->Paginator->options(array('url' => $this->passedArgs));

			// set the Search data, so the form remembers the option
			$this->request->data['Search']['id'] = $this->passedArgs['Search.id'];

			// set the Page Title (not required)
			$title[] = __('ID',true).': '.$this->passedArgs['Search.id'];
		}
		$comunicaciones = $this->paginate();
		$title = implode(' | ',$title);
		$title = (isset($title)&&$title)?$title:__('All Posts',true);
		
		// set related data
		$tags = $this->Comunicacione->find('list');
		$this->set(compact('comunicaciones','tags','title'));*/
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
			if ($this->Comunicacione->save($this->request->data)) {
				$this->Session->setFlash(__('La Comunicacion a sido Guardada.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La comunicacion no se pudo Guardar. Por Favor, Intente de Nuevo.'));
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
