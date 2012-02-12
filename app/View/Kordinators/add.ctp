<!-- File: /app/View/Posts/add.ctp -->

<h1>Tambah </h1><?php echo $this->Html->link('Kembali', array('controller' => 'kordinators', 'action' => 'index')); ?>
<?php
echo $this->Form->create('Kordinator', array('enctype' => 'multipart/form-data')); 
echo $this->Form->input('nama');
echo $this->Form->input('alamat');
echo $this->Form->input('tempat');
echo $this->Form->input('tgl_lahir');
echo $this->Form->input('no_telp');
echo $this->Form->input('jml_kelompok');
echo $this->Form->input('tgl_gabung');
echo $this->Form->input('photo1',array('type'=>'file','label'=>'photo'));
echo $this->Form->end('Simpan');
?>