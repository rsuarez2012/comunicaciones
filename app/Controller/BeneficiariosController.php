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
public function return_data(){
		$this->loadModel('Titulare');
		$id = $this->data['id'];
		//debug($id);//pasar para ver si capta el id
		$data = $this->Beneficiario->find('all',['conditions'=>['Beneficiario.id'=>$id]]);
		//$debug($data);exit;
		echo json_encode($data);
		$this->autoRender = false;
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
	public function add($titulare_id=null, $id=null) {
		$this->loadModel('Titulare');
		$titulare = $this->Titulare->read('titulare');
		$this->set('titulare', $this->Titulare->find('first', array('conditions'=>array('Titulare.id' => $titulare['id']))));
		if ($this->request->is('post')) {
			//debug($this->request->data);exit();
			$this->Beneficiario->create();
			if ($this->Beneficiario->save($this->request->data)) {
				$this->Session->setFlash('Beneficiario guardado con Exito.', 'msg_success');
				//return $this->redirect(array('controller'=>'titulares', 'action' => 'index'));
				//return $this->redirect(array('controller'=>'titulares', 'action' => 'view/'.$id));
				
				
				$this->redirect(array('controller'=>'titulares', 'action'=>'view', $this->data['Beneficiario']['titulare_id']));
				//$this->redirect('/titulares/view/'.$id);
				//return $this->redirect($this->request->here);
			} else {
				$this->Session->setFlash('El beneficiario no se pudo guardar. Por favor, Intente de nuevo.', 'msg_error');
			}
		}
		//$titulares = $this->Beneficiario->Titulare->find('list');
		//$this->set(compact('titulares'));
		//esta es la que va
		$this->set(compact('titulare_id', $titulare_id	));
		//$titulare_id = $this->Beneficiario->Titulare->find('list');
		//$this->set(compact('titulare_id', $titulare_id));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	/*public function return_data(){
			$id = $this->data['id'];
			//debug($id);//pasar para ver si capta el id
			$data = $this->Beneficiario->find('all',['conditions'=>['Beneficiario.id'=>$id]]);
			//$debug($data);exit;
			echo json_encode($data);
			$this->autoRender = false;
	}*/
	public function edit($id = null, $titulare_id=null) {
		$this->loadModel('Titulare');
		$id=$this->request->data['Beneficiario']['id'];		
		if (!$this->Beneficiario->exists($id)) {
			throw new NotFoundException(__('Invalid Cliente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Beneficiario->save($this->request->data)) {
				$this->Session->setFlash('The beneficiario has been saved.','msg_success');				return $this->redirect(array('controller'=>'titulares', 'action' => 'view', $this->data['Beneficiario']['titulare_id']));
			} else {
				$this->Session->setFlash(__('The beneficiario could not be saved. Please, try again.'));
				
				return $this->redirect(array('controller'=>'titulares', 'action'=>'view', $this->data['Beneficiario']['titulare_id']));
			}
		} 
		echo json_encode($result);
		$this->autoRender = false;
		/*if (!$this->Beneficiario->exists($id)) {
			throw new NotFoundException(__('Invalid beneficiario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Beneficiario->save($this->request->data)) {
				$this->Session->setFlash('The beneficiario has been saved.','msg_success');
				//$this->Flash->msg_success(__('Beneficiario Editado con exito.'),'msg_success');
				return $this->redirect(array('controller'=>'titulares', 'action' => 'index'));
				//$this->redirect(array('controller'=>'titulares', 'action'=>'view', $this->data['Beneficiario']['titulare_id']));
			} else {
				$this->Session->setFlash(__('The beneficiario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Beneficiario.' . $this->Beneficiario->primaryKey => $id));
			$this->request->data = $this->Beneficiario->find('first', $options);
		}
		$titulares = $this->Beneficiario->Titulare->find('list');
		$this->set(compact('titulares', 'titulare_id', $titulare_id));*/
		//echo json_encode($result);
		//$this->autoRender=false;
		//$this->set('titulares');
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function eliminar($id=null){
		$id = $this->data['id'];
		//$estado = 'I';
		$datanew = array('id'=>$id);
		//$this->Beneficiario->create();
		if($this->Beneficiario->delete($datanew)){
			$result = "Registro Eliminado";
		}else{
			$result = "A ocurrido un error";		
		}
		echo json_encode($result);
		$this->autoRender=false;
	}
	public function delete($id = null) {
		$this->Beneficiario->id = $id;
		if (!$this->Beneficiario->exists()) {
			throw new NotFoundException(__('Invalid beneficiario'));
		}
		//$this->request->allowMethod('post', 'delete');
		$this->request->allowMethod('get', 'delete');
		if ($this->Beneficiario->delete()) {
			$this->Session->setFlash('El Beneficiario fue eliminado con exito.', 'msg_success');
			//return $this->redirect(array('controller'=>'titulares', 'action'=>'index'));
		} else {
			$this->Session->setFlash('El beneficiario no se pudo eliminar. Por favor, intente de nuevo.', 'msg_error');
		}
		//return $this->redirect(array('action' => 'index'));
		$this->autoRender=false;
	}
}
