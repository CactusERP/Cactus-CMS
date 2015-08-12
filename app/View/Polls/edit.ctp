	<?php
		echo $this->Form->create('Poll');
		echo $this->Form->input('question');
		echo $this->Form->input('answer_1');
		echo $this->Form->input('answer_2');
		echo $this->Form->input('answer_3');
		echo $this->Form->input('answer_4');
		echo $this->Form->input('answer_5');
		echo $this->Form->input('active', array('options' => array('yes' => 'Yes', 'no' => 'No')));

		echo $this->Form->end('Save Poll');
	?>