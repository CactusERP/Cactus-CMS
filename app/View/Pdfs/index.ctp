<!-- File: /app/View/Categories/index.ctp  (edit links added) -->
<div class="page-header">
<h1><i class="clip-grid-2"></i> Pdf Files Control Panel <small> Add / Edit / Delete your Categories items</small></h1>
	<a class="btn btn-blue" href="<?php echo $this->Html->url(array('controller'=>'pdfs','action'=>'add')) ?>">
	+ Add new Pdf</a>
</div>

<div class="row">
	<div class="col-md-12">
		<!-- start: TABLE WITH IMAGES PANEL -->
		<div class="panel panel-default">
		<div class="panel-heading">
			<i class="icon-external-link-sign"></i>
			Gallery Categories
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
												<th class="center">Pdf Files</th>
											
												<th class="center">Title</th>
											
												<th>Entity</th>
												
												<th>Type</th>
												
												<th>Date</th>												
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
										<?php
										
										$selectbox2=array();
										foreach($bposts as  $value2)
										{
										$selectbox2[$value2['Bpost']['ID']]=$value2['Bpost']['title'];
										}
										
										
										foreach($pdfs as $pdf){
										$editurl = $this->html->url(array('controller' => 'pdfs' , 'action'=>'edit', $pdf['Pdf']['id']));
										$deleteurl = $this->html->url(array('controller' => 'pdfs' , 'action'=>'delete', $pdf['Pdf']['id']));
										?>
										<td class="center"><?php echo $pdf['Pdf']['id']; ?></td>
										<td><?php echo $this->Html->Link($pdf['Pdf']['title'],array('action'=>'view',$pdf['Pdf']['id']));?></td>
										
	
 			  							<?php
										echo "<td>";
										if(isset($selectbox2[$pdf['Pdf']['entity_id']])){
										echo $selectbox2[$pdf['Pdf']['entity_id']];
										}
										else{
										echo "None";
										}
										echo "</td>";
									    echo "<td>".$pdf['Pdf']['type']."</td>";
										echo "<td>".$pdf['Pdf']['created']."</td>";
										
										echo "<td class='center'>";
										echo "<a href='".$editurl."'   class='btn btn-xs btn-teal tooltips' data-placement='top' data-original-title='Edit'><i class='clip-wrench-2'></i></a>";
										echo " ";
										echo "<a href='".$deleteurl."' class='btn btn-xs btn-bricky tooltips' data-placement='top' data-original-title='Remove'><i class='clip-close'></i></a>";
										echo "</td>";
 			
										echo "</tr>";
									
										}
										?>
										</tbody>
										</table>
										