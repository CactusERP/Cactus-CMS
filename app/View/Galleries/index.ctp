	<div class="page-header">
	<h1><i class="clip-pictures"></i> Gallery Control Panel <small> Add / Edit / Delete your articles</small></h1>
	
	<a class="btn btn-blue" href="<?php echo $this->Html->url(array('controller'=>'galleries','action'=>'add')) ?>">
	+ Add new image</a>
	</div>
	<div class="row">
		<div class="col-sm-12"></div>
	</div>
	<div class="row">
		<?php foreach($images as $image): 
		$deleteurl = $this->html->url(array('controller' => 'galleries' , 'action'=>'delete', $image['Gallery']['ID']));
		
		echo "<div class='col-md-3 col-sm-4 gallery-img'>";
		echo "<div class='wrap-image'>";
		//echo "<a class='group1' href='assets/images/image01.jpg' title='".$image['Gallery']['title']."'>";
		echo "<img  src='../../../".$image['Gallery']['image']."' alt='' class='img-responsive rounded-corners'>";
		//echo "</a>";

		echo "<div class='tools tools-left rounded-corners'>";
		echo "<a href='#'><i class='clip-link-4'></i></a>";
		echo "<a href='galleries/edit/".$image['Gallery']['ID']."'><i class='clip-pencil-3'></i></a>";
		
		echo "<a href='".$deleteurl."'><i class='clip-close-2'></i></a>";
		echo "<a style='font-size:10px'>".$image['Gallery']['title']."</a>";
		echo "<a style='font-size:8px'>".$image['Gallery']['created']."</a>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		endforeach; ?>
	</div>
	
	<ul class="pagination">
		<?php
		echo $this->Paginator->first('&lsaquo;', array('tag' => 'li', 'title' => __('First page'), 'escape' => false));
		echo $this->Paginator->prev('&laquo;', array('tag' => 'li',  'title' => __('Previous page'), 'disabledTag' => 'span', 'escape' => false), null, array('tag' => 'li', 'disabledTag' => 'span', 'escape' => false, 'class' => 'disabled'));
		echo $this->Paginator->numbers(array('separator' => false, 'tag' => 'li', 'currentTag' => 'span', 'currentClass' => 'active'));
		echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'disabledTag' => 'span', 'title' => __('Next page'), 'escape' => false), null, array('tag' => 'li', 'disabledTag' => 'span', 'escape' => false, 'class' => 'disabled'));
		echo $this->Paginator->last('&rsaquo;', array('tag' => 'li', 'title' => __('First page'), 'escape' => false));
		?>
	</ul>