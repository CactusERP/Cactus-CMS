<h2><?php echo $product['Product']['Name']; ?></h2>
<div id='viewImage'><?php echo "<img style='width:400px; height:350px;' src='../../../Photos/Products/".$product['Product']['Name'].".jpg'/>";?></div>

<p><?php echo $product['Product']['Small_Description']; ?></p>
<p><?php echo $product['Product']['Large_Description']; ?></p>

<p><small><?php echo $product['Product']['Category']; ?>
<?php echo $product['Product']['Price']; ?><?php echo $product['Product']['VAT']; ?><?php echo $product['Product']['State']; ?></small></p>

<br />

<p><?php echo $this->html->link('Back', array('action'=>'index'));?></p>