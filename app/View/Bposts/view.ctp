<h2><?php echo $post['Post']['title']; ?></h2>
<div id='viewImage'><?php echo $this->Html->image($post['Post']['image'], array('alt' => $post['Post']['title']));?></div>

<p><?php echo $post['Post']['body']; ?></p>


<p><small>Created on: <?php echo $post['Post']['created']; ?>
Last modified on: <?php echo $post['Post']['modified']; ?></small></p>

<br />

<p><?php echo $this->html->link('Back', array('action'=>'index'));?></p>