<!-- File: /app/View/kordinators/add.ctp 
form kordinator revisi 1.3
-->

<h1>Tambah Kordinator </h1><?php echo $this->Html->link('Kembali', array('controller' => 'kordinators', 'action' => 'index')); ?>


<form action="<?php echo $this->Html->url('/kordinators/add'); ?>" method="post" enctype="multipart/form-data">
<?php
echo $this->Form->input('Kordinator.nama',array('label'=>'Nama'));
echo $this->Form->input('Kordinator.alamat',array('label'=>'Alamat'));
echo $this->Form->input('Kordinator.tempat',array('label'=>'Tempat Lahir'));
echo $this->Form->input('Kordinator.tgl_lahir',array('type'=>'date','dateFormat'=>'DMY', 'empty'=>true,'minYear' => date('Y') - 70, 'maxYear' => date('Y') - 18,'label'=>'Tanggal Lahir'));
echo $this->Form->input('Kordinator.no_telp',array( 'label'=>'No. Telp'));
echo $this->Form->input('Kordinator.tgl_gabung',array('type'=>'date','dateFormat'=>'DMY', 'label'=>'Tanggal Bergabung'));
echo $this->Form->input('Photo.file',array('type'=>'file','label'=>'Photo'));
echo $this->Form->end('Simpan');
?>