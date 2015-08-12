	<div class="page-header">
	<h1><i class="fa fa-cutlery"></i> Food Control Panel <small> Add / Edit / Delete your foods</small></h1>
	<a class="btn btn-blue" href="<?php echo $this->Html->url(array('controller'=>'foods','action'=>'add')) ?>">
	+ Add new Food</a>
	
	
	</div>

	

	
	<div>
		<ul class="pagination pagination-sm">
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

	
		<div class="panel panel-default">
			<div class="panel-body">
				<table class="table table-hover" id="sample-table-2">
				<thead>
					<tr>
					<th class="center">ID</th>
					<th class="center">Κωδικός</th>
					<th>Ονομασία</th>
					<th>Κατηγορία</th>
					<th>Τιμή</th>
					<th>Διαθεσιμότητα</th>
					<th>Updated</th>
					<th>Status</th>
					<th class="center">Actions</th>
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
					<td><?php echo $food['Food']['updated_at']; ?></td>
					<td><?php echo $food['Food']['status']." <i class='clip-checkmark-2'></i>"; ?></td>
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
		





		