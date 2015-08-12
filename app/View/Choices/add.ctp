
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">
			<div class="panel-heading">
			<i class="icon-external-link-sign"></i>
				Add New Choice
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
		
		
			echo $this->Form->create('Choice', array('type' => 'file' , 'role' => 'form' , 'class' => 'form-horizontal' ));
			echo $this->form->hidden('id');
			echo "<div class='form-group'>";
			echo "<div class='col-sm-9'>";
				echo $this->Form->input('Κωδικός' , array('placeholder' => 'Κωδικός' , 'id' => 'form-field-1' , 'class' => 'form-control'));
			echo "</div>";
			echo "</div>";
			
			echo "<div class='form-group'>";
			echo "<div class='col-sm-9'>";
				echo $this->Form->input('Επιλογή' , array('placeholder' => 'Επιλογή' , 'id' => 'form-field-1' , 'class' => 'form-control'));
			echo "</div>";
			echo "</div>";
			
					
			echo "<div class='form-group'>";
			echo "<div class='col-sm-9'>";
				echo $this->Form->input('status' , array('type' => 'select' , 
														   'id' => 'form-field-1' ,
														   'class' => 'form-control',
														    'options' => array('published' => 'Published', 'hide' => 'Hide'),
														   'selected' => 1 ));
			echo "</div>";
			echo "</div>";
			
			
		
			
			
			echo "<div class='form-group'>";
			echo "<div class='col-sm-9'>";
				echo $this->Form->input('updated_at');
			echo "</div>";
			echo "</div>";
			
			
			echo $this->Form->end('Save Choice');
	?> 
	
			
		</div>
		</div>
		</div>
		</div>
								


	
