	<div class="page-header">
	<h1>Article Control Panel <small> Add / Edit / Delete your articles</small></h1>
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
			$selectbox[$value['MCategory']['id']]=$value['MCategory']['name'];
			echo "<li>". $this->html->link($value['MCategory']['name'], array('action'=>'ByCategory', $value['MCategory']['id']))."</li>";
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
												
												<th class="center">Title</th>
												<th>Author</th>
												<th >Category</th>
												<th>Status</th>
												<th >Created Date</th>
												
												<th><?php echo $this->html->link("+ create new article", array('action'=>'add' , 'class' => 'btn btn-primary')); ?></th>
											</tr>
										</thead>
										<tbody>
										<?php foreach($bposts as $bpost): 
										$editurl = $this->html->link("Edit", array('action'=>'edit', $post['Bpost']['ID']), array('style'=>'color:#E6B800'));
										$deleteurl = $this->html->link("Delete", array('action'=>'delete', $post['Bpost']['ID']) , array('style'=>'color:#c43c35'));
										?>
											<tr>
												
												
												<td class="center"><?php echo $Bpost['Bpost']['ID'] ?></td>
												
												<td><?php echo $this->Html->Link($post['Bpost']['title'],array('action'=>'view',$post['Bpost']['ID']));?></td>
												<td><?php echo $post['Bpost']['author'];?></td>
												<td><?php echo $selectbox[$post['Bpost']['category']];?></td>
												<td ><?php echo $post['Bpost']['status']; ?></td>
												<td ><?php echo $post['Bpost']['created']; ?></td>
												<td class="center">
												<?php echo $editurl; ?>  <?php echo $deleteurl; ?>
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




		
		
		
		
		
		