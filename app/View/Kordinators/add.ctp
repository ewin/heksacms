<!-- File: /app/View/Posts/add.ctp -->

<h1>Tambah Jenis Barang</h1>
<?php
echo $this->Form->create('Kordinator');
echo $this->Form->input('nama');
echo $this->Form->input('alamat');
echo $this->Form->input('no_telp');
echo $this->Form->input('jk');
echo $this->Form->input('no_ktp');
echo $this->Form->end('Simpan');
?>