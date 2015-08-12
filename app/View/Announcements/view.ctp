<h2><?php echo $announcement['Announcement']['title']; ?></h2>
<div id='viewImage'><?php echo $this->Html->image($announcement['Announcement']['image'], array('alt' => $post['Post']['title']));?></div>

<p><?php echo $announcement['Announcement']['body']; ?></p>


<p><small>Created on: <?php echo $post['Post']['created']; ?>
Last modified on: <?php echo $post['Post']['modified']; ?></small></p>

<br />

<p><?php echo $this->html->link('Back', array('action'=>'index'));?></p>