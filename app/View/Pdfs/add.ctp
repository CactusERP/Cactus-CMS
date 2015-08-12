<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">
			<div class="panel-heading">
			<i class="icon-external-link-sign"></i>
				Add New Pdf Item
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
		<div class="panel-body">
		<?php
			$selectbox=array();
			foreach($bposts as  $value)
			{
				$selectbox[$value['Bpost']['ID']]=$value['Bpost']['title'];
			}
		
		
			echo $this->Form->create('Pdf', array('type' => 'file' ,'role' => 'form' , 'class' => 'form-horizontal' ));
			echo $this->form->hidden('id');
			
			echo "<div class='form-group'>";
			echo "<div class='col-sm-9'>";
			echo $this->Form->input('entity_id' , array('type' => 'select' , 
														'id' => 'form-field-1' ,
														'class' => 'form-control',
														'empty' => 'None',
														'options' => $selectbox));
			echo "</div>";
			echo "</div>";
			
			echo "<div class='form-group'>";
			echo "<div class='col-sm-9'>";
				echo $this->Form->input('title' , array('placeholder' => 'Title' , 'id' => 'form-field-1' , 'class' => 'form-control'));
			echo "</div>";
			echo "</div>";
			
			
			echo "<div class='form-group'>";
			echo "<div class='col-sm-9'>";
				echo $this->Form->input('type' , array('type' => 'select' , 
														   'id' => 'form-field-1' ,
														   'class' => 'form-control',
														    'options' => array('Κατάλογος πρoϊόντων' => 'Κατάλογος Πρoϊόντων', 'Τιμοκατάλογος' => 'Τιμοκατάλογος' , 'Sevice Manual' => 'Sevice Manual'),
														   'selected' => 1 ));
			echo "</div>";
			echo "</div>";
			
			
					
			echo "<div class='form-group'>";
			echo "<div class='col-sm-9'>";
			echo $this->Form->input('image', array('type'=>'file' , 'id' => 'form-field-1' , 'class' => 'form-control')); 
			echo "</div>";
			echo "</div>";
			
			echo "<div class='form-group'>";
			echo "<div class='col-sm-9'>";
				echo $this->Form->input('created');
			echo "</div>";
			echo "</div>";

			echo $this->form->end('Update');
 
		?>

		</div>
		</div>
		</div>
		</div>
