<?php
class Kordinator extends AppModel{
	public $name = 'Kordinator';
    public $validate = array(
        'nama' => array( 'rule' => 'notEmpty'),
		'alamat' => array( 'rule'    => '/^.{10,}$/i', 'message' => 'Minimal 10 karakter.'),
		'tempat' => array ( 'rule'    => '/^[a-zA-Z]{4,}$/i', 'message' => 'Hanya berupa huruf, minimal 4 karakter.'),
		'tgl_lahir' => 'date',
		'no_telp' => array ( 'rule'    => '/^[0-9]{7,}$/i', 'message' => 'Hanya berupa angka, minimal 7 karakter.'),
		'tgl_gabung' => 'date',
    );
}