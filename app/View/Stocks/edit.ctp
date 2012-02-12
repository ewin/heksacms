<!-- File: /app/View/Posts/edit.ctp -->

<h1>Ubah Keterangan Barang</h1><?php echo $this->Html->link('Kembali', array('action' => 'index'));?>
<?php
    echo $this->Form->create('Stock', array('action' => 'edit'));
    echo $this->Form->input('nama_barang');
    echo $this->Form->input('jumlah_barang');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Simpan');
	