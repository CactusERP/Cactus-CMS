
<?php
    echo $this->Form->create('Announcement');
    echo $this->Form->input('title');
    echo $this->Form->input('body', array('rows' => '5'));
    echo $this->Form->end('Save Announcement');
?>