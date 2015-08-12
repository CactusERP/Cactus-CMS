	<div class="page-header">
	<h1><i class="clip-pencil"></i> Product Control Panel <small> Add / Edit / Delete your products</small></h1>
	<a class="btn btn-blue" href="<?php echo $this->Html->url(array('controller'=>'products','action'=>'add')) ?>">
	+ Add new Product</a>
	
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
			$selectbox[$value['Pcategory']['id']]=$value['Pcategory']['name'];
			echo "<li>".$this->html->link($value['Pcategory']['name'] , array('action'=>'bycategory', $value['Pcategory']['id']))."</li>";
			}
			
			
			$selectbox2=array();
			foreach($Userlist as  $value2)
			{
			$selectbox2[$value2['User']['ID']]=$value2['User']['Last_Name']." ".$value2['User']['First_Name'] ;
			}
			?>
		</ul>
	</div>
		<!-- start: TABLE WITH IMAGES PANEL -->
		<div class="panel panel-default">
		<div class="panel-heading">
			<i class="icon-external-link-sign"></i>
			Products
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
												
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
										<?php foreach($products as $product): 
										$editurl = $this->html->url(array('controller' => 'products' , 'action'=>'edit', $product['Product']['ID']));
										$deleteurl = $this->html->url(array('controller' => 'products' , 'action'=>'delete', $product['Product']['ID']));
										?>
											<tr>
												
												
												<td class="center"><?php echo $product['Product']['ID'] ?></td>
												
												<td><?php echo $this->Html->Link($product['Product']['title'],array('action'=>'view',$product['Product']['ID']));?></td>
												<td><?php echo $selectbox2[$product['Product']['author']];?></td>
												<td><?php echo $selectbox[$product['Product']['category']];?></td>
												<td><?php echo $product['Product']['status']." <i class='clip-checkmark-2'></i>"; ?></td>
												<td  ><?php echo $product['Product']['created']; ?></td>
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
		





		