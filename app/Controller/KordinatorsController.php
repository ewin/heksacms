<?php
class KordinatorsController extends AppController {
    public $name = 'Kordinators';
    public $helpers = array('Html', 'Form');
	public function index() {
        $this->set('kordinators', $this->Kordinator->find('all', array(
        'order' => array('nama' => 'asc')
    )));
    }
	//fungsi tambah
	public function add() {
        if ($this->request->is('post')) {
            if ($this->Kordinator->save($this->request->data)) {
                $this->Session->setFlash('data telah tersimpan.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('tidak dapat menyimpan data.');
            }
        }
    }
	//edit
	function edit($id = null) {
    $this->Kordinator->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Kordinator->read();
    } else {
        if ($this->Kordinator->save($this->request->data)) {
            $this->Session->setFlash('Data telah diperbahrui.');
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash('Tidak dapat memperbahrui data.');
        }
    }
	}
	//view
	function view($id = null) {
	$this->set('kordinators', $this->Kordinator->find('first', array('conditions' => array('id' => $id)
    )));
    // $this->Kordinator->id = $id;
    // if ($this->request->is('get')) {
        // $this->request->data = $this->Kordinator->read();
    // } 
	}
	//delete
	function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Kordinator->delete($id)) {
			$this->Session->setFlash('Koordinator dengan ID ' . $id . ' dan Nama ' .$nama.' telah dihapus.');
			$this->redirect(array('action' => 'index'));
		}
	}

}