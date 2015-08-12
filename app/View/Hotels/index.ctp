	<div class="page-header">
	<h1><i class="clip-compass"></i> Hotels Control Panel <small> Add / Edit / Delete your destinations</small></h1>
	<a class="btn btn-blue" href="<?php echo $this->Html->url(array('controller'=>'hotels','action'=>'add')) ?>">
	+ Add new Hotel</a>
	
	
	</div>

	

	
	<div>
		<ul class="pagination pagination-sm">
		
		</ul>
	</div>

	
		<div class="panel panel-default">
			<div class="panel-body">
				<table class="table table-hover" id="sample-table-2">
				<thead>
					<tr>
					<th class="center">ID</th>
					<th>Name</th>
					<th>Type</th>
					<th>Destination</th>
					<th>Status</th>
					<th>Created</th>
					<th class="center">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($hotels as $hotel): 
						$editurl = $this->html->url(array('controller' => 'hotels' , 'action'=>'edit', $hotel['Hotel']['id']));
						$deleteurl = $this->html->url(array('controller' => 'hotels' , 'action'=>'delete', $hotel['Hotel']['id']));
					?>
					<tr>
					<td class="center"><?php echo $hotel['Hotel']['id']; ?></td>
					<td><?php echo $hotel['Hotel']['name']; ?></td>
					<td><?php echo $hotel['Hotel']['type']; ?></td>
					<td><?php echo $hotel['Hotel']['destination_id']; ?></td>
					
					<td><?php echo $hotel['Hotel']['status']." <i class='clip-checkmark-2'></i>"; ?></td>
					<td><?php echo $hotel['Hotel']['created']; ?></td>
					
					<td class="center">
					<a href="<?php echo $editurl; ?>" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="clip-wrench-2"></i></a>
					<a href="<?php echo $deleteurl; ?>" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="clip-close"></i></a>
					</td>
					</tr>
					<?php endforeach; ?>
					</table>
		</div>	
		</div>			
		<ul class="pagination">
		<?php
		echo $this->Paginator->first('&lsaquo;', array('tag' => 'li', 'title' => __('First page'), 'escape' => false));
		echo $this->Paginator->prev('&laquo;', array('tag' => 'li',  'title' => __('Previous page'), 'disabledTag' => 'span', 'escape' => false), null, array('tag' => 'li', 'disabledTag' => 'span', 'escape' => false, 'class' => 'disabled'));
		echo $this->Paginator->numbers(array('separator' => false, 'tag' => 'li', 'currentTag' => 'span', 'currentClass' => 'active'));
		echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'disabledTag' => 'span', 'title' => __('Next page'), 'escape' => false), null, array('tag' => 'li', 'disabledTag' => 'span', 'escape' => false, 'class' => 'disabled'));
		echo $this->Paginator->last('&rsaquo;', array('tag' => 'li', 'title' => __('First page'), 'escape' => false));
		?>
		</ul>
		





		