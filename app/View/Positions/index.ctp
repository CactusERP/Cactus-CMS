	<div class="page-header">
	<h1>Home Positions Control Panel <small> Edit your Home view</small></h1>
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
			$selectbox[$value['Mcategory']['id']]=$value['Mcategory']['name'];
			echo "<li>".$this->html->link($value['Mcategory']['name'] , array('action'=>'bycategory', $value['Mcategory']['id']))."</li>";
			}
			
		?>
		</ul>
	</div>
		
	
		<div class="panel panel-default">
			<div class="panel-heading">
			<i class="icon-external-link-sign"></i>
			Home Page View
			<div class="panel-tools">
			</div>
			</div>
			
			<div class="panel-body">
				<table class="table table-striped table-bordered table-hover" id="sample-table-2">
				<thead>
				<tr>
					<th class="center">ID</th>
					<th class="center">Category </th>
					<th class="center">Position</th>
					<th class="center">Title</th>
					
					<th>Created Date</th>
					<th>Change</th>
				</tr>
				</thead>
				
				<tbody>
					<?php foreach($positions as $position): 
						$editurl = $this->html->url(array('controller' => 'positions' , 'action'=>'edit', $position['Position']['ID']));
					?>
			
					<tr>
						<td class="center"><?php echo $position['Position']['ID'] ?></td>
						
						<td><?php echo $selectbox[$position['Position']['category_id']];?></td>
						
						<td class="center"><?php echo $position['Position']['position'] ?></td>
						
						<td><?php echo $position['Position']['title'] ?></td>
						
						<td><?php echo $position['Position']['created'] ?></td>
						
						<td class="center">
						<a href="<?php echo $editurl; ?>" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="clip-wrench-2"></i></a>
						</td>
					
					</tr>


					<?php endforeach; ?>

				</tbody>
				</table>
								
								
	





		