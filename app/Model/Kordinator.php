<?php
class Kordinator extends AppModel{
	public $name = 'Kordinator';
    public $validate = array(
        'Nama Lengkap' => array( 'rule' => 'notEmpty'),
		// 'Alamat' => array( 'rule'    => '/^[0-9]{1,}$/i', 'message' => 'Hanya berupa angka, minimal 1 karakter.'),
		'No Telp' => array ( 'rule'    => '/^[0-9]{7,}$/i', 'message' => 'Hanya berupa angka, minimal 7 karakter.'),
    );
}