<?php
class Stock extends AppModel{
	public $name = 'Stock';
    public $validate = array(
        'nama_barang' => array(
            'rule' => 'notEmpty'
        ),
		'jumlah_barang' => array(
        'rule'    => '/^[0-9]{1,}$/i',
        'message' => 'Hanya berupa angka, minimal 1 karakter.'
        )
    );
}