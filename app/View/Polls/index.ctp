<?php 	
	$this->html->link("Polls", array('controller' => 'polls','action'=>'index'));
	
?>

<table id='mytable' cellspacing='0' style="font-size:x-small">

<tr>
	<th scope='col' abbr='Configurations' class='nobg'>Polls</th>
	<th scope='col'>Question</th>
	<th scope='col'>Answer 1</th>
	<th scope='col'>Scor 1</th>
	<th scope='col'>Answer 2</th>
	<th scope='col'>Scor 2</th>
	<th scope='col'>Answer 3</th>
	<th scope='col'>Scor 3</th>
	<th scope='col'>Answer 4</th>
	<th scope='col'>Scor 4</th>
	<th scope='col'>Answer 5</th>
	<th scope='col'>Scor 5</th>
	<th scope='col'>Hits</th>
	<th scope='col'>Active</th>
	<th scope='col' abbr='Configurations' class='nobg2'><?php echo $this->html->link("Add +",array('action'=>'add')); ?></th>
</tr>


<?php foreach($polls as $poll): 
	$editurl = $this->html->link("Edit", array('action'=>'edit', $poll['Poll']['ID']), array('style'=>'color:#E6B800'));
  	$deleteurl = $this->html->link("Delete", array('action'=>'delete', $poll['Poll']['ID']) , array('style'=>'color:#c43c35'));
  ?>
	<tr>
	<th scope='row' abbr='Model' class='spec' ><?php echo $poll['Poll']['ID'] ?></th>


	<td ><?php echo $this->Html->Link($poll['Poll']['question'],array('action'=>'view',$poll['Poll']['ID']));?></td>
	<td><?php echo $poll['Poll']['answer_1'];?></td>
	<td><?php echo $poll['Poll']['scor_1'];?></td>
	<td><?php echo $poll['Poll']['answer_2'];?></td>
	<td><?php echo $poll['Poll']['scor_2'];?></td>
	<td><?php echo $poll['Poll']['answer_3'];?></td>
	<td><?php echo $poll['Poll']['scor_3'];?></td>
	<td><?php echo $poll['Poll']['answer_4'];?></td>
	<td><?php echo $poll['Poll']['scor_4'];?></td>
	<td><?php echo $poll['Poll']['answer_5'];?></td>
	<td><?php echo $poll['Poll']['scor_5'];?></td>
	<td><?php echo $poll['Poll']['hits'];?></td>
	<td><?php echo $poll['Poll']['active'];?></td>
	<td><?php echo $editurl; ?>/<?php echo $deleteurl; ?></td>
	
	</tr>

<?php endforeach; ?>

	
</table>




