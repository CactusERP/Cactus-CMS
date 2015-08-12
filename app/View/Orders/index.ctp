	<div class="page-header">
	<h1><i class="clip-pencil"></i> Orders Control Panel <small> Edit / Delete your Orders</small></h1>
	</div>
	
	<div class="row">
	<div class="col-md-12">
	
	
	<!-- start: TABLE WITH IMAGES PANEL -->
		<div class="panel panel-default">
		<div class="panel-heading">
			<i class="icon-external-link-sign"></i>
			Orders
		<div class="panel-tools">
		</div>
		</div>
		<div class="panel-body">
			<table class="table table-striped table-bordered table-hover" id="sample-table-2">
			<thead>
				<tr>
				<th class="center">ID</th>
				<th class="center">Name</th>
				<th>Products</th>
				<th >Address</th>
				<th>Post Method</th>
				<th>Payment Method</th>
				<th>Cost</th>
				<th>Date</th>
				<th>State</th>
				<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($orders as $order): 
				$editurl = $this->html->url(array('controller' => 'orders' , 'action'=>'edit', $order['Order']['ID']));
				$deleteurl = $this->html->url(array('controller' => 'orders' , 'action'=>'delete', $order['Order']['ID']));
				?>
				
				<tr>
				<td class="center"><?php echo $order['Order']['ID'] ?></td>
				<td><?php echo $order['Order']['First_Name']." ".$order['Order']['Last_Name']." / ".$order['Order']['Phone']." / ".$order['Order']['Email'];?></td>
				<td><?php echo $this->Html->Link("Products",array('action'=>'view',$order['Order']['ID']));?></td>

				<td><?php echo $order['Order']['Country']." ".$order['Order']['City']." ".$order['Order']['Address']." ".$order['Order']['Postal_Code'];?></td>
				<td><?php echo $order['Order']['Post_Method'];?></td>
				<td><?php echo $order['Order']['Payment_Method']; ?></td>
				<td><?php echo $order['Order']['Cost'];?>€</td>
				<td><?php echo $order['Order']['Date'];?></td>
				<td><?php echo $order['Order']['State'];?></td>
				<td class="center">
				<a href="<?php echo $editurl; ?>" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="clip-wrench-2"></i></a>
				<a href="<?php echo $deleteurl; ?>" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="clip-close"></i></a>
				</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
			</table>
		</div>
		</div>







		