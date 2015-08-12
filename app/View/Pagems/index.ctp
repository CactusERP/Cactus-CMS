	<div class="page-header">
	<h1><i class="clip-file"></i> Page Control Panel <small> Add / Edit / Delete your Pages</small></h1>
	<a class="btn btn-blue" href="<?php echo $this->Html->url(array('controller'=>'pagems','action'=>'add')) ?>">
	+ Add new Page</a>
	
	</div>

	
	<div class="row">
	<div class="col-md-12">

		<!-- start: TABLE WITH IMAGES PANEL -->
		<div class="panel panel-default">
		<div class="panel-heading">
			<i class="icon-external-link-sign"></i>
			Pages
		<div class="panel-tools">
			
									</div>
								</div>
								<div class="panel-body">
									<table class="table table-striped table-bordered table-hover" id="sample-table-2">
										<thead>
											<tr>
												<th class="center">ID</th>
												
												<th class="center">Name</th>
												<th>Author</th>
												<th>Status</th>
												<th >Created Date</th>
												
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
										<?php 
										$selectbox2=array();
										foreach($Userlist as  $value2)
										{
										$selectbox2[$value2['User']['ID']]=$value2['User']['Last_Name']." ".$value2['User']['First_Name'] ;
										}
										
										foreach($pagems as $pagem): 
										$editurl = $this->html->url(array('controller' => 'pagems' , 'action'=>'edit', $pagem['Pagem']['ID']));
										$deleteurl = $this->html->url(array('controller' => 'pagems' , 'action'=>'delete', $pagem['Pagem']['ID']));
										?>
											<tr>
												
												
												<td class="center"><?php echo $pagem['Pagem']['ID'] ?></td>
												
												<td><?php echo $this->Html->Link($pagem['Pagem']['name'],array('action'=>'view',$pagem['Pagem']['ID']));?></td>
												<td><?php echo $selectbox2[$pagem['Pagem']['author']];?></td>
												<td><?php echo $pagem['Pagem']['status']." <i class='clip-checkmark-2'></i>"; ?></td>
												<td  ><?php echo $pagem['Pagem']['created']; ?></td>
												<td class="center">
												<a href="<?php echo $editurl; ?>" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="clip-wrench-2"></i></a>
												<a href="<?php echo $deleteurl; ?>" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="clip-close"></i></a>
											
												</td>
											
											</tr>


										<?php endforeach; ?>

	
									</table>
								






		