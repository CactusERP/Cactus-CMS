<!-- File: /app/View/Categories/index.ctp  (edit links added) -->
<div class="page-header">
<h1>Food Categories Control Panel <small> Add / Edit / Delete your menu items</small></h1>
</div>

<div class="row">
	<div class="col-md-12">
		<!-- start: TABLE WITH IMAGES PANEL -->
		<div class="panel panel-default">
		<div class="panel-heading">
			<i class="icon-external-link-sign"></i>
			Menu
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
												<th class="center">Main Menu</th>
											
												
												<th>Actions</th>
																								
												<th><?php echo $this->html->link("+ create new menu item", array('action'=>'add' , 'class' => 'btn btn-primary')); ?></th>
											</tr>
										</thead>
										<tbody>
										<?php
										$i=0;
										foreach($Categorylist as $key=>$value){
										$editurl = $this->html->link("Edit", array('action'=>'edit', $key), array('style'=>'color:#E6B800'));
										$upurl = $this->html->link("Up", array('action'=>'moveup', $key));
										$downurl = $this->html->link("Down", array('action'=>'movedown', $key));
										$deleteurl = $this->html->link("Delete", array('action'=>'delete', $key), array('style'=>'color:#c43c35'));
      
 			  
										echo "<tr>";
										
										echo "<td >".$value." ".$mydata[$i]['Fcategory']['Κατηγορία']."</th>";
										echo "<td>".$upurl."/".$downurl."</td>";
										echo "<td class='center'>";
									    echo $editurl; ?>  <?php echo $deleteurl; 
										echo "</td>";
 			
										echo "</tr>";
										$i++;
										}
										?>
										</table>
										