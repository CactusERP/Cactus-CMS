

<?php
	$cakeDescription = __d('cake_dev', '');
?>
<!DOCTYPE html>
<html
>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('theme_light');
		echo $this->Html->css('plugins/bootstrap-fileupload/bootstrap-fileupload.min');

		echo $this->Html->css('plugins/font-awesome/css/font-awesome.min');
		echo $this->Html->css('plugins/iCheck/skins/all');
		echo $this->Html->css('plugins/bootstrap/css/bootstrap.min');
		echo $this->Html->css('plugins/perfect-scrollbar/src/perfect-scrollbar');
		echo $this->Html->css('plugins/jQuery-Tags-Input/jquery.tagsinput');
		
		echo $this->Html->css('plugins/bootstrap-colorpalette/css/bootstrap-colorpalette');
		
		echo $this->Html->css('plugins/bootstrap-modal/css/bootstrap-modal-bs3patch');
		echo $this->Html->css('plugins/bootstrap-modal/css/bootstrap-modal');
		echo $this->Html->css('plugins/fullcalendar/fullcalendar/fullcalendar');
		
		
		echo $this->Html->css('plugins/select2/select2');
		
		
		
		echo $this->Html->css('fonts/style');
		echo $this->Html->css('main');
		echo $this->Html->css('main-responsive');
		
		echo $this->Html->script('tinymce/js/tinymce/tinymce.min.js');
		echo $this->Html->script('edit_area/edit_area_full.js');
	?>

<script type="text/javascript">
tinymce.init({
	
	
	mode : "specific_textareas",
    editor_selector : "mceEditor",
	plugins:  "advlist autolink lists link image charmap print preview anchor searchreplace visualblocks code fullscreen insertdatetime media table contextmenu paste ",
    toolbar: " styleselect | undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media"

  
	
 });
</script>

<script  type="text/javascript">
		// initialisation
		editAreaLoader.init({
			id: "myphpcodebody"	// id of the textarea to transform		
			,start_highlight: true	// if start with highlight
			,allow_resize: "both"
			,allow_toggle: true
			,word_wrap: true
			,language: "en"
			,syntax: "php"	
		});
		
		
		editAreaLoader.init({
			id: "myphpcodeheader"	// id of the textarea to transform		
			,start_highlight: true	// if start with highlight
			,allow_resize: "both"
			,allow_toggle: true
			,word_wrap: true
			,language: "en"
			,syntax: "php"	
		});
		
		
		function my_save(id, content){
			alert("Here is the content of the EditArea '"+ id +"' as received by the save callback function:\n"+content);
		}
		
		function my_load(id){
			editAreaLoader.setValue(id, "The content is loaded from the load_callback function into EditArea");
		}
		
		function test_setSelectionRange(id){
			editAreaLoader.setSelectionRange(id, 100, 150);
		}
		
		function test_getSelectionRange(id){
			var sel =editAreaLoader.getSelectionRange(id);
			alert("start: "+sel["start"]+"\nend: "+sel["end"]); 
		}
		
		function test_setSelectedText(id){
			text= "[REPLACED SELECTION]"; 
			editAreaLoader.setSelectedText(id, text);
		}
		
		function test_getSelectedText(id){
			alert(editAreaLoader.getSelectedText(id)); 
		}
		
		function editAreaLoaded(id){
			if(id=="example_2")
			{
				open_file1();
				open_file2();
			}
		}
		
		function open_file1()
		{
			var new_file= {id: "to\\ é # € to", text: "$authors= array();\n$news= array();", syntax: 'php', title: 'beautiful title'};
			editAreaLoader.openFile('example_2', new_file);
		}
		
		function open_file2()
		{
			var new_file= {id: "Filename", text: "<a href=\"toto\">\n\tbouh\n</a>\n<!-- it's a comment -->", syntax: 'html'};
			editAreaLoader.openFile('example_2', new_file);
		}
		
		function close_file1()
		{
			editAreaLoader.closeFile('example_2', "to\\ é # € to");
		}
		
		function toogle_editable(id)
		{
			editAreaLoader.execCommand(id, 'set_editable', !editAreaLoader.execCommand(id, 'is_editable'));
		}
</script>


		
</head>
<body style>


		<!-- start: HEADER -->
		<div class="navbar navbar-inverse navbar-top">
		
			<!-- start: TOP NAVIGATION CONTAINER -->
			
			<div class="container">
				<div class="navbar-header">
					<!-- start: LOGO -->
					<a class="navbar-brand" href="index.html">
						<?php echo $this->Html->image('icon.png', array('alt' => 'Cactus')); ?>Cactus
					</a>
					<!-- end: LOGO -->
				</div>
				
				
				
				
				
				
				<div class="navbar-tools">
					<!-- start: TOP NAVIGATION MENU -->
					<ul class="nav navbar-right">
						<!-- start: TO-DO DROPDOWN -->
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="clip-list-5"></i>
								<span class="badge"> 12</span>
							</a>
							<ul class="dropdown-menu todo">
								<li>
									<span class="dropdown-menu-title"> You have 12 pending tasks</span>
								</li>
								<li>
									<div class="drop-down-wrapper">
										<ul>
											<li>
												<a class="todo-actions" href="javascript:void(0)">
													<i class="fa fa-square-o"></i>
													<span class="desc" style="opacity: 1; text-decoration: none;">Staff Meeting</span>
													<span class="label label-danger" style="opacity: 1;"> today</span>
												</a>
											</li>
											<li>
												<a class="todo-actions" href="javascript:void(0)">
													<i class="fa fa-square-o"></i>
													<span class="desc" style="opacity: 1; text-decoration: none;"> New frontend layout</span>
													<span class="label label-danger" style="opacity: 1;"> today</span>
												</a>
											</li>
											<li>
												<a class="todo-actions" href="javascript:void(0)">
													<i class="fa fa-square-o"></i>
													<span class="desc"> Hire developers</span>
													<span class="label label-warning"> tommorow</span>
												</a>
											</li>
											<li>
												<a class="todo-actions" href="javascript:void(0)">
													<i class="fa fa-square-o"></i>
													<span class="desc">Staff Meeting</span>
													<span class="label label-warning"> tommorow</span>
												</a>
											</li>
											<li>
												<a class="todo-actions" href="javascript:void(0)">
													<i class="fa fa-square-o"></i>
													<span class="desc"> New frontend layout</span>
													<span class="label label-success"> this week</span>
												</a>
											</li>
											<li>
												<a class="todo-actions" href="javascript:void(0)">
													<i class="fa fa-square-o"></i>
													<span class="desc"> Hire developers</span>
													<span class="label label-success"> this week</span>
												</a>
											</li>
											<li>
												<a class="todo-actions" href="javascript:void(0)">
													<i class="fa fa-square-o"></i>
													<span class="desc"> New frontend layout</span>
													<span class="label label-info"> this month</span>
												</a>
											</li>
											<li>
												<a class="todo-actions" href="javascript:void(0)">
													<i class="fa fa-square-o"></i>
													<span class="desc"> Hire developers</span>
													<span class="label label-info"> this month</span>
												</a>
											</li>
											<li>
												<a class="todo-actions" href="javascript:void(0)">
													<i class="fa fa-square-o"></i>
													<span class="desc" style="opacity: 1; text-decoration: none;">Staff Meeting</span>
													<span class="label label-danger" style="opacity: 1;"> today</span>
												</a>
											</li>
											<li>
												<a class="todo-actions" href="javascript:void(0)">
													<i class="fa fa-square-o"></i>
													<span class="desc" style="opacity: 1; text-decoration: none;"> New frontend layout</span>
													<span class="label label-danger" style="opacity: 1;"> today</span>
												</a>
											</li>
											<li>
												<a class="todo-actions" href="javascript:void(0)">
													<i class="fa fa-square-o"></i>
													<span class="desc"> Hire developers</span>
													<span class="label label-warning"> tommorow</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="view-all">
									<a href="javascript:void(0)">
										See all tasks <i class="fa fa-arrow-circle-o-right"></i>
									</a>
								</li>
							</ul>
						</li>
						<!-- end: TO-DO DROPDOWN-->
						<!-- start: NOTIFICATION DROPDOWN -->
						<li class="dropdown">
							<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
								<i class="clip-notification-2"></i>
								<span class="badge"> 11</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li>
									<span class="dropdown-menu-title"> You have 11 notifications</span>
								</li>
								<li>
									<div class="drop-down-wrapper">
										<ul>
											<li>
												<a href="javascript:void(0)">
													<span class="label label-primary"><i class="fa fa-user"></i></span>
													<span class="message"> New user registration</span>
													<span class="time"> 1 min</span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
													<span class="label label-success"><i class="fa fa-comment"></i></span>
													<span class="message"> New comment</span>
													<span class="time"> 7 min</span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
													<span class="label label-success"><i class="fa fa-comment"></i></span>
													<span class="message"> New comment</span>
													<span class="time"> 8 min</span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
													<span class="label label-success"><i class="fa fa-comment"></i></span>
													<span class="message"> New comment</span>
													<span class="time"> 16 min</span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
													<span class="label label-primary"><i class="fa fa-user"></i></span>
													<span class="message"> New user registration</span>
													<span class="time"> 36 min</span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
													<span class="label label-warning"><i class="fa fa-shopping-cart"></i></span>
													<span class="message"> 2 items sold</span>
													<span class="time"> 1 hour</span>
												</a>
											</li>
											<li class="warning">
												<a href="javascript:void(0)">
													<span class="label label-danger"><i class="fa fa-user"></i></span>
													<span class="message"> User deleted account</span>
													<span class="time"> 2 hour</span>
												</a>
											</li>
											<li class="warning">
												<a href="javascript:void(0)">
													<span class="label label-danger"><i class="fa fa-shopping-cart"></i></span>
													<span class="message"> Transaction was canceled</span>
													<span class="time"> 6 hour</span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
													<span class="label label-success"><i class="fa fa-comment"></i></span>
													<span class="message"> New comment</span>
													<span class="time"> yesterday</span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
													<span class="label label-primary"><i class="fa fa-user"></i></span>
													<span class="message"> New user registration</span>
													<span class="time"> yesterday</span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
													<span class="label label-primary"><i class="fa fa-user"></i></span>
													<span class="message"> New user registration</span>
													<span class="time"> yesterday</span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
													<span class="label label-success"><i class="fa fa-comment"></i></span>
													<span class="message"> New comment</span>
													<span class="time"> yesterday</span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
													<span class="label label-success"><i class="fa fa-comment"></i></span>
													<span class="message"> New comment</span>
													<span class="time"> yesterday</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="view-all">
									<a href="javascript:void(0)">
										See all notifications <i class="fa fa-arrow-circle-o-right"></i>
									</a>
								</li>
							</ul>
						</li>
						<!-- end: NOTIFICATION DROPDOWN -->
						<!-- start: MESSAGE DROPDOWN -->
						<li class="dropdown">
							<a class="dropdown-toggle" data-close-others="true" data-hover="dropdown" data-toggle="dropdown" href="#">
								<i class="clip-bubble-3"></i>
								<span class="badge"> 9</span>
							</a>
							<ul class="dropdown-menu posts">
								<li>
									<span class="dropdown-menu-title"> You have 9 messages</span>
								</li>
								<li>
									<div class="drop-down-wrapper">
										<ul>
											<li>
												<a href="javascript:;">
													<div class="clearfix">
														<div class="thread-image">
															<img alt="" src="./assets/images/avatar-2.jpg">
														</div>
														<div class="thread-content">
															<span class="author">Nicole Bell</span>
															<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
															<span class="time"> Just Now</span>
														</div>
													</div>
												</a>
											</li>
											<li>
												<a href="javascript:;">
													<div class="clearfix">
														<div class="thread-image">
															<img alt="" src="./assets/images/avatar-1.jpg">
														</div>
														<div class="thread-content">
															<span class="author">Peter Clark</span>
															<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
															<span class="time">2 mins</span>
														</div>
													</div>
												</a>
											</li>
											<li>
												<a href="javascript:;">
													<div class="clearfix">
														<div class="thread-image">
															<img alt="" src="./assets/images/avatar-3.jpg">
														</div>
														<div class="thread-content">
															<span class="author">Steven Thompson</span>
															<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
															<span class="time">8 hrs</span>
														</div>
													</div>
												</a>
											</li>
											<li>
												<a href="javascript:;">
													<div class="clearfix">
														<div class="thread-image">
															<img alt="" src="./assets/images/avatar-1.jpg">
														</div>
														<div class="thread-content">
															<span class="author">Peter Clark</span>
															<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
															<span class="time">9 hrs</span>
														</div>
													</div>
												</a>
											</li>
											<li>
												<a href="javascript:;">
													<div class="clearfix">
														<div class="thread-image">
															<img alt="" src="./assets/images/avatar-5.jpg">
														</div>
														<div class="thread-content">
															<span class="author">Kenneth Ross</span>
															<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
															<span class="time">14 hrs</span>
														</div>
													</div>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="view-all">
									<a href="pages_messages.html">
										See all messages <i class="fa fa-arrow-circle-o-right"></i>
									</a>
								</li>
							</ul>
						</li>
						<!-- end: MESSAGE DROPDOWN -->
						<!-- start: USER DROPDOWN -->
						<li class="dropdown current-user">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<!--<img src="assets/images/avatar-1-small.jpg" class="circle-img" alt="">-->
								<?php $user = $this->Session->read('Auth.User'); ?>
								<span class="username"><?php  echo $user['First_Name']." ".$user['Last_Name']; ?></span>
								<i class="clip-chevron-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="pages_user_profile.html">
										<i class="clip-user-2"></i>
										&nbsp;My Profile
									</a>
								</li>
								<li>
									<a href="pages_calendar.html">
										<i class="clip-calendar"></i>
										&nbsp;My Calendar
									</a>
								<li>
									<a href="pages_messages.html">
										<i class="clip-bubble-4"></i>
										&nbsp;My Messages (3)
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="utility_lock_screen.html"><i class="clip-locked"></i>
										&nbsp;Lock Screen </a>
								</li>
								<li>
									<a href="login_example1.html">
										<i class="clip-exit"></i>
										&nbsp;Log Out
									</a>
								</li>
							</ul>
						</li>
						<!-- end: USER DROPDOWN -->
					</ul>
					<!-- end: TOP NAVIGATION MENU -->
				</div>
				
				
				
				
				
				
				
			</div>
			<!-- end: TOP NAVIGATION CONTAINER -->
		</div>
		<!-- end: HEADER -->
		
		
		
		
		
		<!-- start: MAIN CONTAINER -->
		<div class="main-container">
			<div class="navbar-content">
				<!-- start: SIDEBAR -->
				<div class="main-navigation navbar-collapse collapse">
					<!-- start: MAIN NAVIGATION MENU -->
					<?php echo	 $this->element('Menus/main'); ?>
					<!-- end: MAIN NAVIGATION MENU -->
				</div>
				<!-- end: SIDEBAR -->
			</div>
			<!-- start: PAGE -->
			<div class="main-content">
				<!-- start: PANEL CONFIGURATION MODAL FORM -->
				<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title">Panel Configuration</h4>
							</div>
							<div class="modal-body">
								Here will be a configuration form
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Close
								</button>
								<button type="button" class="btn btn-primary">
									Save changes
								</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<!-- end: SPANEL CONFIGURATION MODAL FORM -->
				<div class="container">
					<?php echo $this->fetch('content'); ?>
					<?php echo $this->Session->flash(); ?>
				
				</div>
			</div>
			<!-- end: PAGE -->
		</div>
		<!-- end: MAIN CONTAINER -->
		
		
		
		
		
		<!-- start: FOOTER -->
		<div class="footer clearfix">
			<div class="footer-inner">
				2013 &copy; clip-one by cliptheme.
			</div>
			<div class="footer-items">
				<span class="go-top"><i class="clip-chevron-up"></i></span>
			</div>
		</div>
		<!-- end: FOOTER -->
		<div id="event-management" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title">Event Management</h4>
					</div>
					<div class="modal-body"></div>
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-light-grey">
							Close
						</button>
						<button type="button" class="btn btn-danger remove-event no-display">
							<i class='icon-trash'></i> Delete Event
						</button>
						<button type='submit' class='btn btn-success save-event'>
							<i class='icon-ok'></i> Save
						</button>
					</div>
				</div>
			</div>
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<?php
			echo $this->Html->script('clipone/plugins/respond.min.js');
			echo $this->Html->script('clipone/plugins/excanvas.min.js');
		?>
		<![endif]-->
		<?php
			
			echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js');
			echo $this->Html->script('clipone/plugins/jQuery-lib/2.0.3/jquery.min.js');
			echo $this->Html->script('clipone/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js');
			echo $this->Html->script('clipone/plugins/bootstrap/js/bootstrap.min.js');
			
			echo $this->Html->script('clipone/plugins/blockUI/jquery.blockUI.js');
			echo $this->Html->script('clipone/plugins/iCheck/jquery.icheck.min.js');
			
			echo $this->Html->script('clipone/plugins/perfect-scrollbar/src/perfect-scrollbar.js');
			echo $this->Html->script('clipone/plugins/perfect-scrollbar/src/jquery.mousewheel.js');
			echo $this->Html->script('clipone/plugins/jquery-cookie/jquery.cookie.js');
			echo $this->Html->script('clipone/plugins/less/less-1.5.0.min.js');
			
			
			echo $this->Html->script('clipone/main.js');
			
			echo $this->Html->script('clipone/plugins/autosize/jquery.autosize.min.js');
			echo $this->Html->script('clipone/plugins/select2/select2.min.js');
			echo $this->Html->script('clipone/plugins/jquery.maskedinput/src/jquery.maskedinput.js');
			echo $this->Html->script('clipone/plugins/jquery-maskmoney/jquery.maskMoney.js');
			echo $this->Html->script('clipone/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js');
			echo $this->Html->script('clipone/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js');
			echo $this->Html->script('clipone/plugins/bootstrap-daterangepicker/moment.min.js');
			echo $this->Html->script('clipone/plugins/bootstrap-daterangepicker/daterangepicker.js');
			echo $this->Html->script('clipone/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js');
			echo $this->Html->script('clipone/plugins/bootstrap-colorpicker/js/commits.js');
			echo $this->Html->script('clipone/plugins/jQuery-Tags-Input/jquery.tagsinput.min.js');
			echo $this->Html->script('clipone/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js');
			echo $this->Html->script('clipone/plugins/summernote/build/summernote.min.js');
			
			
			
			echo $this->Html->script('clipone/plugins/flot/jquery.flot.js');
			echo $this->Html->script('clipone/plugins/flot/jquery.flot.pie.js');
			echo $this->Html->script('clipone/plugins/flot/jquery.flot.resize.min.js');
			echo $this->Html->script('clipone/plugins/jquery.sparkline/jquery.sparkline.js');
			echo $this->Html->script('clipone/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js');
			echo $this->Html->script('clipone/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js');
			echo $this->Html->script('clipone/plugins/fullcalendar/fullcalendar/fullcalendar.js');
			echo $this->Html->script('clipone/index.js');
			
			
			echo $this->Html->script('clipone/form-elements.js');
			echo $this->Html->script('clipone/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js');
			echo $this->Html->script('clipone/plugins/bootstrap-modal/js/bootstrap-modal.js');
			echo $this->Html->script('clipone/plugins/bootstrap-modal/js/bootstrap-modalmanager.js');
			echo $this->Html->script('clipone/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js');
			echo $this->Html->script('clipone/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js');
			echo $this->Html->script('clipone/plugins/fullcalendar/fullcalendar/fullcalendar.js');
			echo $this->Html->script('clipone/form-calendar.js');
			
		?>
							
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Calendar.init();
				FormElements.init();
				Index.init();
				
			});
		</script>
	
		<?php 
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		 ?>
		

				
	
	
	
</body>
</html>
