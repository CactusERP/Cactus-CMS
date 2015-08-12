<table id='mytable' cellspacing='0'>

<tr>
	<th scope='col' abbr='Configurations' class='nobg'>Mails</th>
	<th scope='col'>Name</th>
	<th scope='col'>Email</th>
	<th scope='col'>Confirm</th>
	<th scope='col' abbr='Configurations' class='nobg2'><?php echo $this->html->link("Add +",array('action'=>'add')); ?></th>
</tr>


<?php foreach($mails as $mail): 
	$editurl = $this->html->link("Edit", array('action'=>'edit', $mail['Mail']['ID']), array('style'=>'color:#E6B800'));
  	$deleteurl = $this->html->link("Delete", array('action'=>'delete', $mail['Mail']['ID']) , array('style'=>'color:#c43c35'));
  ?>
	<tr>
	<th scope='row' abbr='Model' class='spec' ><?php echo $mail['Mail']['ID'] ?></th>


	<td><?php echo $mail['Mail']['name'];?></td>
	<td><?php echo $mail['Mail']['email'];?></td>
	<td><?php echo $mail['Mail']['confirm']; ?></td>
	<td><?php echo $editurl; ?>/<?php echo $deleteurl; ?></td>
	
	</tr>

<?php endforeach; ?>

	
</table>
