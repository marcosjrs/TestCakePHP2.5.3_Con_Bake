<?php
App::uses('AppController', 'Controller');
/**
 * CategoriaPlatos Controller
 *
 * @property CategoriaPlato $CategoriaPlato
 * @property PaginatorComponent $Paginator
 */
class CategoriaPlatosController extends AppController {

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
		$this->CategoriaPlato->recursive = 0;
		$this->set('categoriaPlatos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CategoriaPlato->exists($id)) {
			throw new NotFoundException(__('Invalid categoria plato'));
		}
		$options = array('conditions' => array('CategoriaPlato.' . $this->CategoriaPlato->primaryKey => $id));
		$this->set('categoriaPlato', $this->CategoriaPlato->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CategoriaPlato->create();
			if ($this->CategoriaPlato->save($this->request->data)) {
				$this->Session->setFlash(__('The categoria plato has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categoria plato could not be saved. Please, try again.'));
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
		if (!$this->CategoriaPlato->exists($id)) {
			throw new NotFoundException(__('Invalid categoria plato'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CategoriaPlato->save($this->request->data)) {
				$this->Session->setFlash(__('The categoria plato has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categoria plato could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CategoriaPlato.' . $this->CategoriaPlato->primaryKey => $id));
			$this->request->data = $this->CategoriaPlato->find('first', $options);
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
		$this->CategoriaPlato->id = $id;
		if (!$this->CategoriaPlato->exists()) {
			throw new NotFoundException(__('Invalid categoria plato'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CategoriaPlato->delete()) {
			$this->Session->setFlash(__('The categoria plato has been deleted.'));
		} else {
			$this->Session->setFlash(__('The categoria plato could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
