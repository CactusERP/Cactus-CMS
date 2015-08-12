	<div class="page-header">
	<h1><i class="clip-compass"></i> Destinations Control Panel <small> Add / Edit / Delete your destinations</small></h1>
	<a class="btn btn-blue" href="<?php echo $this->Html->url(array('controller'=>'destinations','action'=>'add')) ?>">
	+ Add new Destination</a>
	
	
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
					<th>Parent</th>
					<th>Status</th>
					<th>Created</th>
					<th class="center">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($destinations as $destination): 
						$editurl = $this->html->url(array('controller' => 'destinations' , 'action'=>'edit', $destination['Destination']['id']));
						$deleteurl = $this->html->url(array('controller' => 'destinations' , 'action'=>'delete', $destination['Destination']['id']));
					?>
					<tr>
					<td class="center"><?php echo $destination['Destination']['id'] ?></td>
					<td><?php echo $destination['Destination']['name'] ?></td>
					<td><?php echo $destination['Destination']['parent_id']; ?></td>
				
					
					<td><?php echo $destination['Destination']['status']." <i class='clip-checkmark-2'></i>"; ?></td>
					<td><?php echo $destination['Destination']['created']; ?></td>
					
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
		





		