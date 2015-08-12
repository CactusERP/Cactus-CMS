<!-- File: /app/View/Posts/index.ctp  (edit links added) -->
<table id='mytable' cellspacing='0'>

<tr>
	<th scope='col' abbr='Configurations' class='nobg'>Members</th>
	<th scope='col'>First Name</th>
	<th scope='col'>Last Name</th>
	<th scope='col'>Email</th>
	<th scope='col'>Phone</th>
	<th scope='col'>Chair</th>
	<th scope='col' abbr='Configurations' class='nobg2'><?php echo $this->html->link("Add +",array('action'=>'add')); ?></th>
</tr>


<?php foreach($members as $member): 
	$editurl = $this->html->link("Edit", array('action'=>'edit', $member['Member']['ID']), array('style'=>'color:#E6B800'));
  	$deleteurl = $this->html->link("Delete", array('action'=>'delete', $member['Member']['ID']) , array('style'=>'color:#c43c35'));
  ?>
	<tr>
	<th scope='row' abbr='Model' class='spec' ><?php echo $member['Member']['ID'] ?></th>


	<td><?php echo $member['Member']['First_Name']; ?></td>
	<td><?php echo $member['Member']['Last_Name']; ?></td>
	<td><?php echo $member['Member']['Email']; ?></td>
	<td><?php echo $member['Member']['Phone']; ?></td>
	<td><?php echo $member['Member']['Chair']; ?></td>
	<td><?php echo $editurl; ?>/<?php echo $deleteurl; ?></td>
	
	</tr>

<?php endforeach; ?>

	
</table>
