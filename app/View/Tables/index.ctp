	<script type="text/javascript">
	function refreshCode(){   
		$.ajax({
			type: 'get',
			url: '<?php echo $this->Html->url(array('action' => 'refreshTables', 'ext' => 'json')); ?>',
			beforeSend: function(xhr) {
				xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			},
			success: function(response) {
				if (response.error) {
					alert(response.error);
					console.log(response.error);
				}
				if (response.content) {
					$('#refresh').html(response.content);
				}
			},
			error: function(e) {
				alert("An error occurred: " + e.responseText.message);
				console.log(e);
			}
		});
		
	}

	setInterval(function(){ refreshCode(); }, 1000)
	</script>
	
	
	<div class="page-header">
	<h1><i class="fa fa-cutlery"></i> Table Control Panel <small> Add / Edit / Delete your foods</small></h1>
	<a class="btn btn-blue" href="<?php echo $this->Html->url(array('controller'=>'foods','action'=>'add')) ?>">
	+ Add new Table</a>
	
	
	</div>

	

	
	<div>
		<ul class="pagination pagination-sm">
		
		</ul>
	</div>

	
		<div class="panel panel-default">
			<div class="panel-body">
				<div id="refresh">
				
				
				<?php
					
					foreach($tables as $table): 
					
					
					if($table['Table']['status'] == 'open'){
						echo "<div style='float:left; padding:15px'><div style='margin-left: 55px;  color: black;    font-size: 20px;   z-index: 999;'>".$table['Table']['Κωδικός']."</div><img src='table_green.png' alt='table' /></div>";

					}
					else if($table['Table']['status'] == 'onCreate'){
						echo "<div style='float:left; padding:15px'><div style='margin-left: 55px;  color: black;    font-size: 20px;   z-index: 999;'>".$table['Table']['Κωδικός']."</div><img src='table_yellow.png' alt='table' /></div>";
				
					}
					else if($table['Table']['status'] == 'full'){
						echo "<div style='float:left; padding:15px'><div style='margin-left: 55px;  color: black;    font-size: 20px;   z-index: 999;'>".$table['Table']['Κωδικός']."</div><img src='table_red.png' alt='table' /></div>";

					}
					else{
						echo "<div style='float:left; padding:15px'><div style='margin-left: 55px;  color: black;    font-size: 20px;   z-index: 999;'>".$table['Table']['Κωδικός']."</div><img src='table.png' alt='table' /></div>";

					}
					
					
					
					
				
					
					endforeach;
					
					?>
				</div>
		</div>	
		</div>			
		





		