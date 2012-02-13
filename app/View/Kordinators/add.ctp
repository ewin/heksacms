<!-- File: /app/View/Posts/add.ctp -->

<h1>Tambah Kordinator </h1><?php echo $this->Html->link('Kembali', array('controller' => 'kordinators', 'action' => 'index')); ?>


<form action="<?php echo $this->Html->url('/kordinators/add'); ?>" method="post" enctype="multipart/form-data">
<?php
// Form nama
// echo $this->Form->labelTag('Kordinator/nama', 'Nama'); 
// echo $this->Html->input('Kordinator/nama', array('size' => '60')); 
// echo $this->html->tagErrorMsg('Kordinator/nama', 'Nama Lengkap.'); 
// // form alamat
// echo $this->Form->labelTag( 'Kordinator/alamat', 'Alamat' );
// echo $this->Html->textarea('Kordinator/alamat', array('cols' => '60', 'rows' => '10'));
// echo $this->Html->tagErrorMsg('Kordinator/alamat', 'Alamat Lengkap.');
// echo $this->Html->submit('Add');














// echo $this->Form->create('Kordinator', array('enctype' => 'multipart/form-data')); 
echo $this->Form->input('Kordinator.nama',array('label'=>'Nama'));
echo $this->Form->input('Kordinator.alamat',array('label'=>'Alamat'));
echo $this->Form->input('Kordinator.tempat',array('label'=>'Tempat Lahir'));
echo $this->Form->input('Kordinator.tgl_lahir',array('type'=>'date','dateFormat'=>'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y') - 18,'label'=>'Tanggal Lahir'));
echo $this->Form->input('Kordinator.no_telp',array( 'label'=>'No. Telp'));
echo $this->Form->input('Kordinator.jml_kelompok',array('label'=>'Jumlah Kelompok'));
echo $this->Form->input('Kordinator.tgl_gabung',array('type'=>'date','dateFormat'=>'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y') - 18,'label'=>'Tanggal Bergabung'));
echo $this->Form->input('Photo.file',array('type'=>'file','label'=>'Photo'));
echo $this->Form->end('Simpan');
?>