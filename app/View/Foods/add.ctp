	<div class="row">
		<div class="col-sm-12">
		<div class="page-header">
			<h1><i class="fa fa-cutlery"></i> Add New Food <small> Add / Edit / Delete your foods</small></h1>
			<a class="btn btn-blue" href="<?php echo $this->Html->url(array('controller'=>'foods','action'=>'index')) ?>">
			< Back to Foods</a>
		</div>
		<div class="panel-body">
	<?php
		$selectbox=array();
		foreach($Categorylist as  $value)
		{
			$selectbox[$value['Fcategory']['id']]=$value['Fcategory']['Κατηγορία'];
		}
		
		$selectbox2=array();
		foreach($Categorylist2 as  $value2)
		{
			$selectbox2[$value2['Choice']['id']]=$value2['Choice']['Επιλογή'];
		}
		
		echo $this->Form->create('Food', array('type' => 'file',  'role' => 'form' , 'class' => 'form-horizontal' , 'inputDefaults' => array('label' => false , 'div' => false)));
		
		
		?>
		<div class="col-sm-6">
				<div class="panel panel-default">
					
					<div class="panel-body" style="display: block;">
					<?php
						echo "<div class='form-group'>";
						echo "<div class='col-sm-12'>";
						echo "<label for='form-field-mask-3'>";
						echo "Κωδικός Προϊόντος";
						echo "</label>";
						echo "<div class='input-group'>";
						echo "<span class='input-group-addon'> <i class='fa fa-key'></i> </span>";
							echo $this->Form->input('Κωδικός' , array('id' => 'form-field-1' , 'class' => 'form-control'));
						echo "</div>";
						echo "</div>";
						echo "</div>";
						
						echo "<div class='form-group'>";
						echo "<div class='col-sm-12'>";
						echo "<label for='form-field-mask-3'>";
						echo "Όνομα Προϊόντος";
						echo "</label>";
						echo "<div class='input-group'>";
						echo "<span class='input-group-addon'> <i class='fa fa-font'></i> </span>";
						echo $this->Form->input('Ονομασία' , array( 'type' => 'text' , 'id' => 'form-field-1' , 'class' => 'form-control'));
						echo "</div>";
						echo "</div>";
						echo "</div>";
						
						
										
						echo "<div class='form-group'>";
						echo "<div class='col-sm-12'>";
						echo "<label for='form-field-mask-3'>";
						echo "Επιλογή Κατηγορίας";
						echo "</label>";
						echo "<div class='input-group'>";
						echo "<span class='input-group-addon'> <i class='fa fa-list'></i> </span>";
						echo $this->Form->input('Κατηγορία' , array('type' => 'select' , 
												'id' => 'form-field-1' ,
												'class' => 'form-control',
												'options' => $selectbox,
												'selected' => 1 ));
						echo "</div>";
						echo "</div>";
						echo "</div>";
						
						
						echo "<div class='form-group'>";
						echo "<div class='col-sm-12'>";
						echo "<label for='form-field-mask-3'>";
						echo "Λιανική Τιμή";
						echo "</label>";
						echo "<div class='input-group'>";
						echo "<span class='input-group-addon'> <i class='fa fa-eur'></i> </span>";
						echo $this->Form->input('Τιμή' , array('type' => 'text' , 'id' => 'form-field-1' , 'class' => 'form-control'));
						echo "</div>";
						echo "</div>";
						echo "</div>";
						
								
						echo "<div class='form-group'>";
						echo "<div class='col-sm-12'>";
						echo "<label for='form-field-mask-3'>";
						echo "Τιμή Ιδιοκατανάλωσης";
						echo "</label>";
						echo "<div class='input-group'>";
						echo "<span class='input-group-addon'> <i class='fa fa-eur'></i> </span>";
						echo $this->Form->input('Τιμή_ιδιοκατανάλωσης' , array('type' => 'text' , 'id' => 'form-field-1' , 'class' => 'form-control'));
						echo "</div>";
						echo "</div>";
						echo "</div>";
						
						echo "<div class='form-group'>";
						echo "<div class='col-sm-12'>";
						echo "<label for='form-field-mask-3'>";
						echo "Συντελεστής ΦΠΑ";
						echo "</label>";
						echo "<div class='input-group'>";
						echo "<span class='input-group-addon'> % </span>";
						echo $this->Form->input('Ποσοστό_ΦΠΑ' , array('id' => 'form-field-1' , 'class' => 'form-control'));
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
						echo "Διαθεσιμότητα";
						echo "</label>";
						echo "<div class='input-group'>";
						echo "<span class='input-group-addon'> <i class='fa fa-th'></i> </span>";
						echo $this->Form->input('Διαθεσιμότητα' , array('placeholder' => 'Διαθεσιμότητα' , 'id' => 'form-field-1' , 'class' => 'form-control'));
						echo "</div>";
						echo "</div>";
						echo "</div>";
						
						
						echo "<div class='form-group'>";
						echo "<div class='col-sm-12'>";
						echo "<label for='form-field-mask-3'>";
						echo "Προτεραιότητα";
						echo "</label>";
						echo "<div class='input-group'>";
						echo "<span class='input-group-addon'> <i class='fa fa-list-ol'></i> </span>";
						echo $this->Form->input('Προτεραιότητα' , array('id' => 'form-field-1' , 'class' => 'form-control'));
						echo "</div>";
						echo "</div>";
						echo "</div>";
							
						echo "<div class='form-group'>";
						echo "<div class='col-sm-12'>";
						echo "<label for='form-field-mask-3'>";
						echo "Επιλογή Εκτυπωτή";
						echo "</label>";
						echo "<div class='input-group'>";
						echo "<span class='input-group-addon'> <i class='fa fa-print'></i> </span>";
						echo $this->Form->input('Εκτυπωτής' , array( 'id' => 'form-field-1' , 'class' => 'form-control'));
						echo "</div>";
						echo "</div>";
						echo "</div>";
						
						 
						echo "<div class='form-group'>";
						echo "<div class='col-sm-12'>";
						echo "<label for='form-field-mask-3'>";
						echo "Επιλογές - Συστατικά";
						echo "</label>";
						
						echo $this->Form->input('Επιλογή_1' , array('placeholder' => 'Επιλογές' , 'type' => 'select' , 'multiple' => 'multiple' , 'id' => 'form-field-select-4' , 'class' => 'form-control search-select', 'options' => $selectbox2));
						echo "</div>";
						echo "</div>";	
								
												
						
							
						echo "<div class='form-group'>";
						echo "<div class='col-sm-6'>";
						echo "<div class='input-group'>";
						echo "<span class='input-group-addon'> <i class='fa fa-calendar'></i> </span>";
							echo $this->Form->input( 'updated_at_date' , array('placeholder' => 'Updated At' , 'type' => 'text' , 'class' => 'form-control date-picker' ) );
						echo "</div>";
						echo "</div>";
						
						echo "<div class='col-sm-6'>";
						echo "<div class='input-group'>";
						echo "<span class='input-group-addon'> <i class='fa fa-clock-o'></i> </span>";
							echo $this->Form->input( 'updated_at_time' , array('type' => 'text' , 'class' => 'form-control time-picker' ) );
						echo "</div>";
						echo "</div>";
						echo "</div>";
						
						
						echo "<div class='form-group'>";
						
						echo "<div class='col-sm-6'>";
						echo "<div class='input-group'>";
						echo "<span class='input-group-addon'> <i class='fa fa-calendar'></i> </span>";
							echo $this->Form->input( 'created' , array('type' => 'text' , 'class' => 'form-control date-picker' ) );
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
								'label' => 'Αποθήκευση Προϊόντος',
								'class' => 'btn btn-green btn-lg btn-block',
								
						);

						echo $this->Form->end( $options );
				
										
										
									?>
									
					</div>
				</div>
				</div>
			
				

	
		
	</div>