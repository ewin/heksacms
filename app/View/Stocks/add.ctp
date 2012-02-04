<!-- File: /app/View/Posts/add.ctp -->

<h1>Tambah Jenis Barang</h1>
<?php
echo $this->Form->create('Stock');
echo $this->Form->input('nama_barang');
echo $this->Form->input('jumlah_barang');
echo $this->Form->end('Simpan');
?>