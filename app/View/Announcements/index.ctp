<table id='mytable' cellspacing='0'>

<tr>
	<th scope='col' abbr='Configurations' class='nobg'>Announcements</th>
	<th scope='col'>Title</th>
	<th scope='col'>User</th>
	<th scope='col'>Created Date</th>
	<th scope='col'>Category</th>
	<th scope='col' abbr='Configurations' class='nobg2'><?php echo $this->html->link("Add +",array('action'=>'add')); ?></th>
</tr>


<?php foreach($announcements as $announcement): 
	$editurl = $this->html->link("Edit", array('action'=>'edit', $announcement['Announcement']['ID']), array('style'=>'color:#E6B800'));
  	$deleteurl = $this->html->link("Delete", array('action'=>'delete', $announcement['Announcement']['ID']) , array('style'=>'color:#c43c35'));
  ?>
	<tr>
	<th scope='row' abbr='Model' class='spec' ><?php echo $announcement['Announcement']['ID'] ?></th>


	<td><?php echo $this->Html->Link($announcement['Announcement']['title'],array('action'=>'view',$announcement['Announcement']['ID']));?></td>
	<td>User</td>
	<td><?php echo $announcement['Announcement']['created']; ?></td>
	<td>Category</td>
	<td><?php echo $editurl; ?>/<?php echo $deleteurl; ?></td>
	
	</tr>

<?php endforeach; ?>

	
</table>





		