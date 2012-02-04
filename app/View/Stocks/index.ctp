<!-- File: /app/View/Posts/index.ctp -->

<h1>Stocks</h1>
<?php echo $this->Html->link('Tambah Jenis Barang', array('controller' => 'stocks', 'action' => 'add')); ?>
<table>
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Jumlah</th>
        <th>Opsi</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($stocks as $stock) : ?>
    <tr>
        <td><?php echo $stock['Stock']['id']; ?></td>
        <td>
            <?php echo  $stock['Stock']['nama_barang']; ?>
        </td>
        <td><?php echo $stock['Stock']['jumlah_barang']; ?></td>
		 <td>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $stock['Stock']['id']));?>
			<?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $stock['Stock']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>