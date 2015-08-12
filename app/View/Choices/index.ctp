	<div class="page-header">
	<h1><i class="clip-pencil"></i> Choices Control Panel <small> Add / Edit / Delete your articles</small></h1>
	<a class="btn btn-blue" href="<?php echo $this->Html->url(array('controller'=>'choices','action'=>'add')) ?>">
	+ Add new Choice</a>
	
	</div>


	
	
		<!-- start: TABLE WITH IMAGES PANEL -->
		<div class="panel panel-default">
		<div class="panel-heading">
			<i class="icon-external-link-sign"></i>
			Choices
		<div class="panel-tools">
			
									</div>
								</div>
								<div class="panel-body">
									<table class="table table-hover" id="sample-table-2">
										<thead>
											<tr>
												<th class="center">ID</th>
												
												<th class="center">Κωδικός</th>
												<th>Επιλογή</th>
											
												<th>Status</th>
												<th >Updated at</th>
												
												<th class="center">Actions</th>
											</tr>
										</thead>
										<tbody>
										<?php foreach($choices as $choice): 
										$editurl = $this->html->url(array('controller' => 'choices' , 'action'=>'edit', $choice['Choice']['id']));
										$deleteurl = $this->html->url(array('controller' => 'choices' , 'action'=>'delete', $choice['Choice']['id']));
										?>
											<tr>
												
												
												<td class="center"><?php echo $choice['Choice']['id']; ?></td>
												<td class="center"><?php echo $choice['Choice']['Κωδικός']; ?></td>
												<td><?php echo $choice['Choice']['Επιλογή']; ?></td>
												<td><?php echo $choice['Choice']['status']." <i class='clip-checkmark-2'></i>"; ?></td>
												<td  ><?php echo $choice['Choice']['updated_at']; ?></td>
												<td class="center">
												<a href="<?php echo $editurl; ?>" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="clip-wrench-2"></i></a>
												<a href="<?php echo $deleteurl; ?>" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="clip-close"></i></a>
											
												</td>
											
											</tr>


										<?php endforeach; ?>

	
									</table>
								
								
		<ul class="pagination">
		<?php
		echo $this->Paginator->first('&lsaquo;', array('tag' => 'li', 'title' => __('First page'), 'escape' => false));
		echo $this->Paginator->prev('&laquo;', array('tag' => 'li',  'title' => __('Previous page'), 'disabledTag' => 'span', 'escape' => false), null, array('tag' => 'li', 'disabledTag' => 'span', 'escape' => false, 'class' => 'disabled'));
		echo $this->Paginator->numbers(array('separator' => false, 'tag' => 'li', 'currentTag' => 'span', 'currentClass' => 'active'));
		echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'disabledTag' => 'span', 'title' => __('Next page'), 'escape' => false), null, array('tag' => 'li', 'disabledTag' => 'span', 'escape' => false, 'class' => 'disabled'));
		echo $this->Paginator->last('&rsaquo;', array('tag' => 'li', 'title' => __('First page'), 'escape' => false));
		?>
		</ul>
		





		