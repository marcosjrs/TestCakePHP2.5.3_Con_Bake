<?php
App::uses('AppController', 'Controller');
/**
 * Platos Controller
 *
 * @property Plato $Plato
 * @property PaginatorComponent $Paginator
 */
class PlatosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Plato->recursive = 0;
		$this->set('platos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Plato->exists($id)) {
			throw new NotFoundException(__('Invalid plato'));
		}
		$options = array('conditions' => array('Plato.' . $this->Plato->primaryKey => $id));
		$this->set('plato', $this->Plato->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Plato->create();
			if ($this->Plato->save($this->request->data)) {
				$this->Session->setFlash(__('The plato has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plato could not be saved. Please, try again.'));
			}
		}
		$categoriaPlatos = $this->Plato->CategoriaPlato->find('list');
		$cocineros = $this->Plato->Cocinero->find('list');
		$this->set(compact('categoriaPlatos', 'cocineros'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Plato->exists($id)) {
			throw new NotFoundException(__('Invalid plato'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Plato->save($this->request->data)) {
				$this->Session->setFlash(__('The plato has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plato could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Plato.' . $this->Plato->primaryKey => $id));
			$this->request->data = $this->Plato->find('first', $options);
		}
		$categoriaPlatos = $this->Plato->CategoriaPlato->find('list');
		$cocineros = $this->Plato->Cocinero->find('list');
		$this->set(compact('categoriaPlatos', 'cocineros'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Plato->id = $id;
		if (!$this->Plato->exists()) {
			throw new NotFoundException(__('Invalid plato'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Plato->delete()) {
			$this->Session->setFlash(__('The plato has been deleted.'));
		} else {
			$this->Session->setFlash(__('The plato could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
