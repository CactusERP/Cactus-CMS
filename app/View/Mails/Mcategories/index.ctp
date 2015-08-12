<!-- File: /app/View/Categories/index.ctp  (edit links added) -->
<div class="page-header">
<h1>Article Categories Control Panel <small> Add / Edit / Delete your Categories items</small></h1>
	<a class="btn btn-blue" href="<?php echo $this->Html->url(array('controller'=>'mcategories','action'=>'add')) ?>">
	+ Add new category</a>
</div>

<div class="row">
	<div class="col-md-12">
		<!-- start: TABLE WITH IMAGES PANEL -->
		<div class="panel panel-default">
		<div class="panel-heading">
			<i class="icon-external-link-sign"></i>
			Article Categories
		<div class="panel-tools">
			<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
			</a>
				<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
											<i class="icon-wrench"></i>
										</a>
										<a class="btn btn-xs btn-link panel-refresh" href="#">
											<i class="icon-refresh"></i>
										</a>
										<a class="btn btn-xs btn-link panel-expand" href="#">
											<i class="icon-resize-full"></i>
										</a>
										<a class="btn btn-xs btn-link panel-close" href="#">
											<i class="icon-remove"></i>
										</a>
									</div>
								</div>
								<div class="panel-body">
									<table class="table table-striped table-bordered table-hover" id="sample-table-2">
										<thead>
											<tr>
												<th class="center"> Category ID </th>
												<th class="center">Article Categories</th>
											
												
												<th>Description</th>
																								
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
										<?php
										$i=0;
										foreach($Categorylist as $key=>$value){
										$editurl = $this->html->url(array('controller' => 'mcategories' , 'action'=>'edit', $key));
										$upurl = $this->html->url(array('controller' => 'mcategories' , 'action'=>'moveup', $key));
										$downurl = $this->html->url(array('controller' => 'mcategories' , 'action'=>'movedown', $key));
										$deleteurl = $this->html->url(array('controller' => 'mcategories' , 'action'=>'delete', $key));
      
 			  
										echo "<tr>";
										echo "<td>".$mydata[$i]['Mcategory']['id']."</td>";
										echo "<td >".$value."</td>";
										
										
										echo "<td>".$mydata[$i]['Mcategory']['description']."</td>";
										$i++;
										echo "<td class='center'>";
										echo "<a href='".$upurl."'     class='btn  btn-xs btn-blue tooltips data-placement='top' data-original-title='Up''><i class='clip-chevron-up'></i></a>";	
										echo " ";
										echo "<a href='".$downurl."'   class='btn  btn-xs btn-blue tooltips data-placement='top' data-original-title='Down'' ><i class='clip-chevron-down'></i></a>";
										echo " ";
										echo "<a href='".$editurl."'   class='btn btn-xs btn-teal tooltips' data-placement='top' data-original-title='Edit'><i class='clip-wrench-2'></i></a>";
										echo " ";
										echo "<a href='".$deleteurl."' class='btn btn-xs btn-bricky tooltips' data-placement='top' data-original-title='Remove'><i class='clip-close'></i></a>";
										echo "</td>";
 			
										echo "</tr>";
										}
										?>
										</table>
										