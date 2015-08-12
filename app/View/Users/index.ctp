
<div class="page-header">
	<h1><i class="clip-user-3"></i> System Users Control Panel <small> Add / Edit / Delete your users</small></h1>
	<a class="btn btn-blue" href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'add')) ?>">
	+ Add new User</a>
	
	</div>

	
	<div class="row">
	<div class="col-md-12">
		
		<!-- start: TABLE WITH IMAGES PANEL -->
		<div class="panel panel-default">
		<div class="panel-heading">
			<i class="icon-external-link-sign"></i>
			System Users
		<div class="panel-tools">
			
									</div>
								</div>
								<div class="panel-body">
									<table class="table table-striped table-bordered table-hover" id="sample-table-2">
										<thead>
											<tr>
												<th>Users</th>
												<th scope='col'>First Name</th>
												<th scope='col'>Last Name</th>
												<th scope='col'>Username</th>
												<th scope='col'>Email</th>
												<th scope='col'>Role</th>
												<th scope='col'>Actions</th>
											</tr>
										</thead>
										<tbody>
										<?php foreach($users as $user): 
										$editurl = $this->html->url(array('controller' => 'users' , 'action'=>'edit', $user['User']['ID']));
										$deleteurl = $this->html->url(array('controller' => 'users' , 'action'=>'delete', $user['User']['ID']));
										?>
											<tr>
												
												
												<td class="center"><?php echo $user['User']['ID'] ?></td>
												
												<td><?php echo $user['User']['First_Name'];?></td>
												<td><?php echo $user['User']['Last_Name'];?></td>
												<td><?php echo $user['User']['username'];?></td>
												<td><?php echo $user['User']['Email']." <i class='clip-checkmark-2'></i>"; ?></td>
												<td ><?php echo $user['User']['role']; ?></td>
												<td class="center">
												<a href="<?php echo $editurl; ?>" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="clip-wrench-2"></i></a>
												<a href="<?php echo $deleteurl; ?>" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="clip-close"></i></a>
											
												</td>
											
											</tr>


										<?php endforeach; ?>

</table>
		












