	<div class="row">
		<div class="col-sm-12">
		<div class="page-header">
			<h1><i class="clip-compass"></i> Add New Destination <small> Add / Edit / Delete your destinations</small></h1>
			<a class="btn btn-blue" href="<?php echo $this->Html->url(array('controller'=>'destinations','action'=>'index')) ?>">
			< Back to Destinations</a>
		</div>
		<div class="panel-body">
	<?php
		$selectbox=array();
		foreach($destinationlist as  $value)
		{
			$selectbox[$value['Destination']['parent_id']]=$value['Destination']['name'];
		}
		
		
		
		echo $this->Form->create('Destination', array('type' => 'file',  'role' => 'form' , 'class' => 'form-horizontal' , 'inputDefaults' => array('label' => false , 'div' => false)));
		
		
		?>
		<div class="col-sm-6">
				<div class="panel panel-default">
					
					<div class="panel-body" style="display: block;">
					<?php
						echo "<div class='form-group'>";
						echo "<div class='col-sm-12'>";
						echo "<label for='form-field-mask-3'>";
						echo "Name";
						echo "</label>";
						echo "<div class='input-group'>";
						echo "<span class='input-group-addon'> <i class='fa fa-font'></i> </span>";
						echo $this->Form->input('name' , array( 'type' => 'text' , 'id' => 'form-field-1' , 'class' => 'form-control'));
						echo "</div>";
						echo "</div>";
						echo "</div>";
						
						
										
						echo "<div class='form-group'>";
						echo "<div class='col-sm-12'>";
						echo "<label for='form-field-mask-3'>";
						echo "Parent Destination";
						echo "</label>";
						echo "<div class='input-group'>";
						echo "<span class='input-group-addon'> <i class='fa fa-list'></i> </span>";
						echo $this->Form->input('parent_id' , array('type' => 'select' , 
												'id' => 'form-field-1' ,
												'class' => 'form-control',
												
												'options' => array('null', $selectbox) 
												
												));
						echo "</div>";
						echo "</div>";
						echo "</div>";
						
						
						echo "<div class='form-group'>";
						echo "<div class='col-sm-12'>";
						echo "<label for='form-field-mask-3'>";
						echo "Primary Image";
						echo "</label>";
						echo "<div class='input-group'>";
						echo "<span class='input-group-addon'> <i class='fa fa-print'></i> </span>";
						echo $this->Form->input('image', array('type'=>'file' , 'id' => 'form-field-1' , 'class' => 'form-control')); 
						echo "</div>";
						echo "</div>";
						echo "</div>";
						
						
						echo "<div class='form-group'>";
						echo "<div class='col-sm-12'>";
						echo "<label for='form-field-mask-3'>";
						echo "Description";
						echo "</label>";
						echo "<div class='input-group'>";
						
						echo $this->Form->input('description' , array( 'class' => 'mceEditor' , 'style' => 'height:150px'));
						echo "</div>";
						echo "</div>";
						echo "</div>";
						
					
					?>
								
					</div>
				</div>
				</div>
				
				
					<div class="col-sm-6">
				<div class="panel panel-default">
					
					<div class="panel-body" style="display: block;">
					<?php
						
						echo "<div class='form-group'>";
						echo "<div class='col-sm-12'>";
						echo "<label for='form-field-mask-3'>";
						echo "Body";
						echo "</label>";
						echo "<div class='input-group'>";
						
						echo $this->Form->input('body' , array( 'class' => 'mceEditor' , 'style' => 'height:250px'));
						echo "</div>";
						echo "</div>";
						echo "</div>";
					
						
						echo "<div class='form-group'>";
						
						echo "<div class='col-sm-6'>";
						echo "<div class='input-group'>";
						echo "<span class='input-group-addon'> <i class='fa fa-calendar'></i> </span>";
							echo $this->Form->input('created');
						echo "</div>";
						echo "</div>";
					
						
						echo "<div class='col-sm-6'>";
						echo $this->Form->input('status' , array('type' => 'select' , 
																	'id' => 'form-field-1' ,
																	'class' => 'form-control',
																	'options' => array('in' => 'In Stock', 'out' => 'Out Of Stock'),
																	'selected' => 1 ));
						echo "</div>";
						echo "</div>";
					
		
						$options = array(
								'label' => 'Save Destination',
								'class' => 'btn btn-green btn-lg btn-block',
								
						);

						echo $this->Form->end( $options );
				
										
										
						?>
									
					</div>
				</div>
				</div>
			
				

	
		
	</div>