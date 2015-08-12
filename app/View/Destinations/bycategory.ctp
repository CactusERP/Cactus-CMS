	<div class="page-header">
	<h1>Article Control Panel <small> Add / Edit / Delete your articles</small></h1>
	<a class="btn btn-blue" href="<?php echo $this->Html->url(array('controller'=>'posts','action'=>'add')) ?>">
	+ Add new Article</a>
	
	</div>

	
	<div class="row">
	<div class="col-md-12">
	
	<div>
		<ul class="pagination">
		<?php
			echo "<li>".$this->html->link("All", array('action'=>'index'))."</li>";
			$selectbox=array();
			foreach($Categorylist as  $value)
			{
			$selectbox[$value['Fcategory']['id']]=$value['Fcategory']['Κατηγορία'];
			echo "<li>".$this->html->link($value['Fcategory']['Κατηγορία'] , array('action'=>'bycategory', $value['Fcategory']['id']))."</li>";
			}
			
			
			
			?>
		</ul>
	</div>
		<!-- start: TABLE WITH IMAGES PANEL -->
		<div class="panel panel-default">
		<div class="panel-heading">
			<i class="icon-external-link-sign"></i>
			Posts
		<div class="panel-tools">
			
									</div>
								</div>
								<div class="panel-body">
									<table class="table table-striped table-bordered table-hover" id="sample-table-2">
										<thead>
											<tr>
												<th class="center">ID</th>
												
												<th class="center">Κωδικός</th>
												<th class="center">Ονομασία</th>
												<th>Κατηγορία</th>
												<th>Τιμή</th>
											
												<th>Διαθεσιμότητα</th>
												
												<th>Επιλογές</th>
												<th>Updated</th>
												<th>Status</th>
												
												
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
										<?php foreach($foods as $food): 
										$editurl = $this->html->url(array('controller' => 'foods' , 'action'=>'edit', $food['Food']['id']));
										$deleteurl = $this->html->url(array('controller' => 'foods' , 'action'=>'delete', $food['Food']['id']));
										?>
											<tr>
												
												
												<td class="center"><?php echo $food['Food']['id'] ?></td>
												<td class="center"><?php echo $food['Food']['Κωδικός'] ?></td>
												<td><?php echo $food['Food']['Ονομασία']; ?></td>
												<td><?php echo $selectbox[$food['Food']['Κατηγορία']];?></td>
												<td><?php echo $food['Food']['Τιμή']; ?></td>
												<td><?php echo $food['Food']['Διαθεσιμότητα']; ?></td>
												<td><?php echo $food['Food']['Επιλογή_1']; ?></td>
												<td><?php echo $food['Food']['updated_at']; ?></td>
												<td><?php echo $food['Food']['status']." <i class='clip-checkmark-2'></i>"; ?></td>
												
											
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
		





		