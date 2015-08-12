<div class="menus form">
<?php echo $this->Form->create('Menu');?>
    <fieldset>
        <legend><?php __('Add Menu Item'); ?></legend>
<?php
    echo $this->Form->input('name');
    echo $this->Form->input('controller');
    echo $this->Form->input('action');
?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit', true));?>
</div> 