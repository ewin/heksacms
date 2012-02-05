<!-- File: /app/View/Posts/edit.ctp -->

<h1>Ubah Keterangan Kordinator</h1>
<?php
    echo $this->Form->create('Kordinator', array('action' => 'edit'));
    echo $this->Form->input('nama');
	echo $this->Form->input('alamat');
	echo $this->Form->input('no_telp');
	echo $this->Form->input('jk');
	echo $this->Form->input('no_ktp');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Simpan');
	