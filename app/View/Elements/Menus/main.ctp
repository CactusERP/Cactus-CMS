<nav>
	<ul class="main-navigation-menu">
		<li <?php if($this->params['controller'] == 'pages'){  echo "class='active open'";}?>  >
			<a href="<?php echo $this->Html->url(array('controller'=>'pages','action'=>'index')) ?>"><i class="clip-home-3"></i>
				<span class="title"> Home </span>
				<span class="selected"></span>
			</a>
				
			
			
		</li>
		
	 	<li <?php if($this->params['controller'] == 'categories'){  echo "class='active open'";}?> >
       		<a href="<?php echo $this->Html->url(array('controller'=>'categories','action'=>'index')) ?>"><i class="clip-list"></i>
				<span class="title"> Menu </span>
				<span class="selected"></span>
			</a>
     	</li>	
		
		<li <?php if($this->params['controller'] == 'pagems'){  echo "class='active open'";}?> >
			<a href="<?php echo $this->Html->url(array('controller'=>'pagems','action'=>'index')) ?>"><i class="clip-file"></i>
				<span class="title"> Pages </span>
				<span class="selected"></span>
			</a>
       		
     	</li>
		
	
		<li <?php if($this->params['controller'] == 'pdfs'){  echo "class='active open'";}?>>
		
       		<a href="javascript:void(0)"><i class="clip-file"></i>
				<span class="title"> PDF </span>
				<i class="icon-arrow"></i>
				<span class="selected"></span>
			</a>
			<ul class="sub-menu">
				<li <?php if($this->params['controller'] == 'pdfs'){  echo "class='active open'";}?>>
					<a href="<?php echo $this->Html->url(array('controller'=>'pdfs','action'=>'index')) ?>">
					<span class="title">PDF Files</span>
					</a>
				</li>
				<li>
					<a href="<?php echo $this->Html->url(array('controller'=>'bposts','action'=>'index')) ?>">
					<span class="title">PDF Articles</span>
					</a>
				</li>
				<li>
					<a href="<?php echo $this->Html->url(array('controller'=>'bcategories','action'=>'index')) ?>">
					<span class="title">PDF Categories</span>
					</a>
				</li>
			</ul>
	   	</li>
		
		
		
		
       	<li <?php if($this->params['controller'] == 'posts'){  echo "class='active open'";}?>>
       		<a href="<?php echo $this->Html->url(array('controller'=>'posts','action'=>'index')) ?>"><i class="clip-pencil"></i>
				<span class="title"> Articles </span>
				<span class="selected"></span>
			</a>
      	</li>	
		
		
		
		<li <?php if($this->params['controller'] == 'mcategories'){  echo "class='active open'";}?>>
		
       		<a href="javascript:void(0)"><i class="clip-grid-2"></i>
				<span class="title"> Categories </span>
				<i class="icon-arrow"></i>
				<span class="selected"></span>
			</a>
			<ul class="sub-menu">
				<li <?php if($this->params['controller'] == 'mcategories'){  echo "class='active open'";}?>>
					<a href="<?php echo $this->Html->url(array('controller'=>'mcategories','action'=>'index')) ?>">
					<span class="title">Article Categories</span>
					</a>
				</li>
				<li>
					<a href="<?php echo $this->Html->url(array('controller'=>'gcategories','action'=>'index')) ?>">
					<span class="title">Gallery Categories</span>
					</a>
				</li>
				<li>
					<a href="<?php echo $this->Html->url(array('controller'=>'pcategories','action'=>'index')) ?>">
					<span class="title">Product Categories</span>
					</a>
				</li>
			</ul>
	   	</li>
		
		<li <?php if($this->params['controller'] == 'orders'){  echo "class='active open'";}?>>
		
       		<a href="javascript:void(0)"><i class="clip-grid-2"></i>
				<span class="title"> Shop </span>
				<i class="icon-arrow"></i>
				<span class="selected"></span>
			</a>
			<ul class="sub-menu">
				<li <?php if($this->params['controller'] == 'orders'){  echo "class='active open'";}?>>
					<a href="<?php echo $this->Html->url(array('controller'=>'orders','action'=>'index')) ?>">
					<span class="title">Orders</span>
					</a>
				</li>
				<li>
					<a href="<?php echo $this->Html->url(array('controller'=>'products','action'=>'index')) ?>">
					<span class="title">Products</span>
					</a>
				</li>
			</ul>
	   	</li>
		
		
      	<li <?php if($this->params['controller'] == 'galleries'){  echo "class='active open'";}?>>
       		<a href="<?php echo $this->Html->url(array('controller'=>'galleries','action'=>'index')) ?>"><i class="clip-pictures"></i>
				<span class="title"> Galleries </span>
				<span class="selected"></span>
			</a>
			
      	</li>
		
		
		<li <?php if($this->params['controller'] == 'members'){  echo "class='active open'";}?>>
       	
			<a href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'index')) ?>"><i class="clip-bars"></i>
				<span class="title"> Statistics </span>
				<span class="selected"></span>
			</a>
      	</li>
		
		
      	<li <?php if($this->params['controller'] == 'users'){  echo "class='active open'";}?>>
			<a href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'index')) ?>"><i class="clip-user-3"></i>
				<span class="title"> System users </span>
				<span class="selected"></span>
			</a>
      	</li>	
		
		<li>
	      	
			<a href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'logout')) ?>"><i class="clip-cog"></i>
				<span class="title"> Settings </span>
				
			</a>
      	</li>	
      	
      	<li>
	      	
			<a href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'logout')) ?>"><i class="clip-key"></i>
				<span class="title"> logout </span>
				
			</a>
      	</li>	

	</ul>
</nav>