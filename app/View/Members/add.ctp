<!-- File: /app/View/Members/add.ctp -->
<?php
		echo $this->Form->create('Member');
		echo $this->Form->input('First_Name');
		echo $this->Form->input('Last_Name');
		echo $this->Form->input('Email');
		echo $this->Form->input('Phone');
		echo $this->Form->input('Chair');
		echo $this->Form->end('Save Member');
?>
