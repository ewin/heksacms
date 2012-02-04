<?php
class StocksController extends AppController {
    public $name = 'Stocks';
    public $helpers = array('Html', 'Form');
	public function index() {
        $this->set('stocks', $this->Stock->find('all', array(
        'order' => array('id' => 'asc')
    )));
    }
	public function add() {
        if ($this->request->is('post')) {
            if ($this->Stock->save($this->request->data)) {
                $this->Session->setFlash('data telah tersimpan.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('tidak dapat menyimpan data.');
            }
        }
    }
	function edit($id = null) {
    $this->Stock->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Stock->read();
    } else {
        if ($this->Stock->save($this->request->data)) {
            $this->Session->setFlash('Data telah diperbahrui.');
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash('Tidak dapat memperbahrui data.');
        }
    }
	}

	function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Stock->delete($id)) {
			$this->Session->setFlash('Stock ' . $id . ' has been deleted.');
			$this->redirect(array('action' => 'index'));
		}
	}

}