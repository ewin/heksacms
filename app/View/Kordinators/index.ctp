<!-- File: /app/View/Posts/index.ctp -->

<h1>Kordinators</h1>
<?php echo $this->Html->link('Tambah Kordinator', array('controller' => 'kordinators', 'action' => 'add')); ?>
<table>
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Opsi</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($kordinators as $kordinator) : ?>
    <tr>
        <td><?php echo $kordinator['Kordinator']['id']; ?></td>
        <td>
            <?php echo  $kordinator['Kordinator']['nama']; ?>
        </td>
		 <td>
            <?php echo $this->Html->link('View', array('action' => 'view', $kordinator['Kordinator']['id']));?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $kordinator['Kordinator']['id']));?>
			<?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $kordinator['Kordinator']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>