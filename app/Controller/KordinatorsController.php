<?php
class KordinatorsController extends AppController {
    public $name = 'Kordinators';
    public $helpers = array('html', 'Form');
	public function index() {
        $this->set('kordinators', $this->Kordinator->find('all', array(
        'order' => array('nama' => 'asc')
    )));
    }
	
	function pa($arr) {
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
	}
	
	//fungsi tambah
	public function add() {
        
		if ($this->request->is('post')) { 
		$fileOK = $this->uploadFiles('img/files', $this->data['Photo']); 
		$asas= $this->data ;
		if(array_key_exists('urls', $fileOK)) {
			$asas['Kordinator']['photo'] = $fileOK['urls'][0];
		}	
		 
		// $this->pa($this->data); 
		// $this->pa($asas);
	
			
           if ($this->Kordinator->save($asas)) {
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
			$this->redirect(array('action' => 'index'));
		}
	}
	
	
	///-------------------------
	function uploadFiles($folder, $formdata, $itemId = null) {
	// setup dir names absolute and relative
	$folder_url = WWW_ROOT.$folder;
	$rel_url = $folder;
	
	// create the folder if it does not exist
	if(!is_dir($folder_url)) {
		mkdir($folder_url);
	}
		
	// if itemId is set create an item folder
	if($itemId) {
		// set new absolute folder
		$folder_url = WWW_ROOT.$folder.'/'.$itemId; 
		// set new relative folder
		$rel_url = $folder.'/'.$itemId;
		// create directory
		if(!is_dir($folder_url)) {
			mkdir($folder_url);
		}
	}
	
	// list of permitted file types, this is only images but documents can be added
	$permitted = array('image/gif','image/jpeg','image/pjpeg','image/png');
	
	// loop through and deal with the files
	foreach($formdata  as $file) {
		// replace spaces with underscores
		$filename = str_replace(' ', '_', $file['name']);
		// assume filetype is false
		$typeOK = false;
		// check filetype is ok
		foreach($permitted as $type) {
			if($type == $file['type']) {
				$typeOK = true;
				break;
			}
		}
		
		// if file type ok upload the file
		if($typeOK) {
			// switch based on error code
			switch($file['error']) {
				case 0:
					// check filename already exists
					if(!file_exists($folder_url.'/'.$filename)) {
						// create full filename
						$full_url = $folder_url.'/'.$filename;
						$url = $rel_url.'/'.$filename;
						// upload the file
						$success = move_uploaded_file($file['tmp_name'], $url);
					} else {
						// create unique filename and upload file
						ini_set('date.timezone', 'Europe/London');
						$now = date('Y-m-d-His');
						$full_url = $folder_url.'/'.$now.$filename;
						$url = $rel_url.'/'.$now.$filename;
						$success = move_uploaded_file($file['tmp_name'], $url);
					}
					// if upload was successful
					if($success) {
						// save the url of the file
						$result['urls'][] = $url;
					} else {
						$result['errors'][] = "Error uploaded $filename. Please try again.";
					}
					break;
 
				case 3:
					// an error occured
					$result['errors'][] = "Error uploading $filename. Please try again.";
					break;
				default:
					// an error occured
					$result['errors'][] = "System error uploading $filename. Contact webmaster.";
					break;
			}
		} elseif($file['error'] == 4) {
			// no file was selected for upload
			$result['nofiles'][] = "No file Selected";
		} else {
			// unacceptable file type
			$result['errors'][] = "$filename cannot be uploaded. Acceptable file types: gif, jpg, png.";
		}
	}
return $result;
}

}