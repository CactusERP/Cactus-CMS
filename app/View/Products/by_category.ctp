<?php
		$selectbox=array();
		foreach($Categorylist as  $value)
		{
			$selectbox[$value['Pcategory']['id']]=$value['Pcategory']['name'];
			echo $this->html->link($value['Pcategory']['name']." | ", array('action'=>'ByCategory', $value['Pcategory']['id']), array('style'=>'color:#E6B800'));;
		}

?>

<table id='mytable' cellspacing='0'>

<tr>
	<th scope='col' abbr='Configurations' class='nobg'><?php echo $selectbox[$catid]; ?></th>
	<th scope='col'>Name</th>

	<th scope='col'>Price</th>
	<th scope='col'>VAT</th>
	<th scope='col'>State</th>
	<th scope='col' abbr='Configurations' class='nobg2'><?php echo $this->html->link("Add +",array('action'=>'add')); ?></th>
</tr>


<?php foreach($products as $product): 
	$editurl = $this->html->link("Edit", array('action'=>'edit', $product['Product']['ID']), array('style'=>'color:#E6B800'));
  	$deleteurl = $this->html->link("Delete", array('action'=>'delete', $product['Product']['ID']) , array('style'=>'color:#c43c35'));
  ?>
	<tr>
	<th scope='row' abbr='Model' class='spec' ><?php echo $product['Product']['ID'] ?></th>


	<td><?php echo $this->Html->Link($product['Product']['Name'],array('action'=>'view',$product['Product']['ID']));?></td>
	<td><?php echo $product['Product']['Price'];?></td>
	<td><?php echo $product['Product']['VAT'];?></td>
	<td><?php echo $product['Product']['State'];?></td>
	<td><?php echo $editurl; ?>/<?php echo $deleteurl; ?></td>
	
	</tr>

<?php endforeach; ?>

	
</table>


