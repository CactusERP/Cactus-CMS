<!-- File: /app/View/Posts/add.ctp -->


	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">
			<div class="panel-heading">
			<i class="icon-external-link-sign"></i>
				Add New Page
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
			$selectbox2=array();
			foreach($Userlist as  $value2)
			{
				$selectbox2[$value2['User']['ID']]=$value2['User']['Last_Name']." ".$value2['User']['First_Name'] ;
			}
		
			echo $this->Form->create('Pagem', array('role' => 'form' , 'class' => 'form-horizontal' ));
			echo $this->form->hidden('id');
			echo "<div class='form-group'>";
			echo "<div class='col-sm-9'>";
				echo $this->Form->input('name' , array('placeholder' => 'Name' , 'id' => 'form-field-1' , 'class' => 'form-control'));
			echo "</div>";
			echo "</div>";
			
			echo "<div class='form-group'>";
			echo "<div class='col-sm-9'>";
				echo $this->Form->input('header' , array( 'type' => 'textarea' , 'id' => 'myphpcode' , 'class' => 'mytextareasizesmall' ));
			echo "</div>";
			echo "</div>";	
				
			echo "<div class='form-group'>";
			echo "<div class='col-sm-9'>";
				echo $this->Form->input('body' , array( 'type' => 'textarea' , 'id' => 'myphpcode' , 'class' => 'mytextareasize'));
			echo "</div>";
			echo "</div>";
			
			
			
			
			echo "<div class='form-group'>";
			echo "<div class='col-sm-9'>";
				echo $this->Form->input('description' , array('class' => 'mytextareasizesmall'));
			echo "</div>";
			echo "</div>";
			
			echo "<div class='form-group'>";
			echo "<div class='col-sm-9'>";
				echo $this->Form->input('author' , array('type' => 'select' , 
														   'id' => 'form-field-1' ,
														   'class' => 'form-control',
														   'options' => $selectbox2,
														   'selected' => 1 ));
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
				echo $this->Form->input('created');
			echo "</div>";
			echo "</div>";
			
			
			echo $this->Form->end('Save Pagem');
	?> 
	
			
		</div>
		</div>
		</div>
		</div>
								


	
