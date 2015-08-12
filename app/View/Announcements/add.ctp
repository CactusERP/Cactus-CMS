<!-- File: /app/View/Posts/add.ctp -->
	<?php
		echo $this->Form->create('Announcement');
		echo $this->Form->input('title');
		echo $this->Form->input('body', array('rows' => '3'));
		echo $this->Form->end('Save Post');
	?>