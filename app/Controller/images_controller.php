<?php
class ImagesController extends AppController {

	var $name = 'Images';
	var $helpers = array('Html', 'Form');
	var $components = array('Upload');
	
	function upload() {

		if (empty($this->data)) {
			$this->render();
		} else {
			$this->cleanUpFields();

			// set the upload destination folder
			$destination = realpath('../../app/webroot/img/uploads/') . '/';

			// grab the file
			$file = $this->data['Image']['filedata'];

			// upload the image using the upload component
			$result = $this->Upload->upload($file, $destination, null, array('type' => 'resizecrop', 'size' => array('400', '300'), 'output' => 'jpg'));

			if (!$result){
				$this->data['Image']['images'] = $this->Upload->result;
			} else {
				// display error
				$errors = $this->Upload->errors;
   
				// piece together errors
				if(is_array($errors)){ $errors = implode("<br />",$errors); }
   
					$this->Session->setFlash($errors);
					$this->redirect('/images/upload');
					exit();
				}
			if ($this->Image->save($this->data)) {
				$this->Session->setFlash('Image has been added.');
				$this->redirect('/images/index');
			} else {
				$this->Session->setFlash('Please correct errors below.');
				unlink($destination.$this->Upload->result);
			}
		}
	}
}
?>