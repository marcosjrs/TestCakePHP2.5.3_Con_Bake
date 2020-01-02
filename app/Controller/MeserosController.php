<?php
App::uses('AppController', 'Controller');
/**
 * Meseros Controller
 *
 * @property Mesero $Mesero
 * @property PaginatorComponent $Paginator
 */
class MeserosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','RequestHandler','Session');

	public $helpers =array('Html','Form','Js','Time');
/**
 * Paginamos de 5 en 5 registro, y ordenamos por id de forma asc, de 1 a ....
 */
public $paginate = array(
	'limit' => 5,
	'order' => array(
		'Mesero.id'=>'asc'
	)
);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Mesero->recursive = 0;
		$this->Paginator->settings = $this->paginate;
		$this->set('meseros', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mesero->exists($id)) {
			throw new NotFoundException(__('Invalid mesero'));
		}
		$options = array('conditions' => array('Mesero.' . $this->Mesero->primaryKey => $id));
		$this->set('mesero', $this->Mesero->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mesero->create();
			if ($this->Mesero->save($this->request->data)) {
				$this->Session->setFlash(__('The mesero has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mesero could not be saved. Please, try again.'));
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
		if (!$this->Mesero->exists($id)) {
			throw new NotFoundException(__('Invalid mesero'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mesero->save($this->request->data)) {
				$this->Session->setFlash(__('The mesero has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mesero could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mesero.' . $this->Mesero->primaryKey => $id));
			$this->request->data = $this->Mesero->find('first', $options);
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
		$this->Mesero->id = $id;
		if (!$this->Mesero->exists()) {
			throw new NotFoundException(__('Invalid mesero'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Mesero->delete()) {
			$this->Session->setFlash(__('The mesero has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mesero could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
