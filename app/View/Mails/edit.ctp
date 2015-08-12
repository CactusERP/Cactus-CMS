<?php
		echo $this->Form->create('Mail');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('confirm', array('options' => array('no' => 'No', 'yes' => 'Yes')));

		echo $this->Form->end('Save Mail');
	?>